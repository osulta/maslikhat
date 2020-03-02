<?php

namespace frontend\controllers;


use frontend\models\Article;
use frontend\models\Session;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class ArticleController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        $query = Article::find()
            ->orderBy(['id' => SORT_DESC])
            ->where(['type' => \backend\models\Article::ARTICLE]);
        $countQuery = clone $query;
        $pages = new Pagination([
            'totalCount' => $countQuery->count(),
            'pageSize' => 3,
            'forcePageParam' => false,
            'pageSizeParam' => false,
        ]);
        $articles = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('index', [
            'articles' => $articles,
            'pages' => $pages,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'article' => $this->findModel($id),
        ]);
    }


    /**
     * Finds the Session model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Session the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Session::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Сессия табылмады');
    }
}
