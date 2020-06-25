<?php


namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Admin;
use app\models\Author;
use app\models\ContactForm;
use app\models\LoginForm;
use yii\data\Pagination;

class AdminController extends Controller
{
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        return $this->render('index');
    }

    public function actionAuthors(){
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $query = Author::find()->with('books');;
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'PageSize' => 5]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('authors', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }

    public function actionBooks(){
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        return $this->render('books');
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {

            return $this->actionIndex();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}

