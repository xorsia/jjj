<?php
namespace app\modules\api\controllers;
use app\models\AdminIdentity;
use app\models\Author;
use yii\filters\AccessControl;
use yii\filters\auth\QueryParamAuth;
use yii\filters\auth\HttpBasicAuth;
use app\models\Books;

class UserController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        \Yii::$app->user->enableSession = false;
    }
//
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator']['tokenParam'] = 'token';
        $behaviors['authenticator']['class'] = QueryParamAuth::className();
        return $behaviors;
    }


    public function actionBooks()
    {
        \Yii::$app->response->format = \Yii\web\Response::FORMAT_JSON;
        $bookdata = Books::find()->all();

        return array('status' => true,
            'books' => $bookdata,
        );
    }

    public function actionAuthors()
    {
        \Yii::$app->response->format = \Yii\web\Response::FORMAT_JSON;
        $bookdata = Author::find()->all();

        return array('status' => true,
            'books' => $bookdata,
        );
    }

}
