<?php

namespace app\modules\api\controllers;
use app\modules\api\models\Random;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\AccessControl;

class RandomController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;

    public function actionGenerate(){
        \Yii::$app->response->format = \Yii\web\Response::FORMAT_JSON;
        $random = new Random();
        $random->scenario = Random::SCENARIO_GENERATE;
        $random->attributes = \Yii::$app->request->post();
        if($random->validate()){
            $random->save();
            return array('status' => true);
        } else {
            return array('status' => false, 'data' => $random->getErrors());
        }
    }

    public function actionRetrieve(){
        \Yii::$app->response->format = \Yii\web\Response::FORMAT_JSON;
        $random = new Random();
        $result = $random->findOne(\Yii::$app->request->post('id'));
        if($result == null){
            return array('status' => false, 'data' => 'not found');
        } else {
            return array('status' => true, 'data' => $result);
        }
    }

    public function actionIndex(){
        \Yii::$app->response->format = \Yii\web\Response::FORMAT_JSON;
            $link = null;
            $a = "NUUUUUUL -> Try to use [?id=]";
        if(\Yii::$app->request->get('id') == 1){
            $a = true;
            $link = 'https://www.youtube.com/watch?v=S5PvBzDlZGs';
        }
        return array('status'=> 'WELLCOME TO THE LINK GAME','your result'=>$a,'Link'=>$link);
    }
}
