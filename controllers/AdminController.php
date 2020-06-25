<?php


namespace app\controllers;

use app\models\Books;
use SebastianBergmann\Comparator\Book;
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
use yii\web\NotFoundHttpException;
use app\models\Bookcomments;

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

    public function actionAboutauthor($id)
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = Author::findOne($id);

        if($model == null){
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        $bookslist = Books::find()
            ->where(['author_id' => $model->id])
            ->all();

        return $this->render('aboutauthor', [
            'model' => $model,
            'books' => $bookslist,
        ]);
    }

    public function actionBooks(){
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $query = Books::find()->with('author');;
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'PageSize' => 6]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('books', [
            'models' => $models,
            'pages' => $pages,
        ]);

    }

    public function actionBookcomment($id){
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $comments = new Bookcomments();
        $model = Books::findOne($id);


        if ($comments->load(Yii::$app->request->post()) && $comments->save()) {
            return $this->redirect(["bookcomment?id=$id"]);
        }

        if($model == null){
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return $this->render('bookcomments',
        [
          'model' => $model,
            'comments' => $comments,
        ]);
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

