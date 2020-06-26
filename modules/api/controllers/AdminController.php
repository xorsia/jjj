<?php
namespace app\modules\api\controllers;
use app\models\AdminIdentity;
use yii\filters\AccessControl;
use yii\filters\auth\QueryParamAuth;
use yii\filters\auth\HttpBasicAuth;

class AdminController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        \Yii::$app->user->enableSession = false;
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBasicAuth::className(),
            'auth' => [$this, 'auth'],
        ];
        return $behaviors;
    }

    public function auth($username, $password)
    {
        $user = AdminIdentity::findOne(['username' => $username]);
        return $user->validatePassword($password) ? $user : null;

    }

    public function actionGettoken()
    {
        \Yii::$app->response->format = \Yii\web\Response::FORMAT_JSON;
        $user = \Yii::$app->user->identity;
        return array('status' => true,
            'msg' => 'hello User',
            'username' => $user->username,
            'access_token' => $user->access_token,
            'role' => 'admin',
            'How to use?' => "/user/books?token=$user->access_token",
        );
    }

}