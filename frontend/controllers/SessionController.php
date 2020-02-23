<?php

namespace frontend\controllers;


use frontend\models\Session;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class SessionController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'session' => $this->findModel($id),
        ]);
    }

    public function actionList()
    {
        $query = Session::find()->where(['type' => null]);
        $countQuery = clone $query;
        $pagination = new Pagination([
            'forcePageParam' => false,
            'pageSizeParam' => false,
            'defaultPageSize' => 12,
            'totalCount' => $countQuery->count(),
        ]);
        $sessions = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('list', [
            'sessions' => $sessions,
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
