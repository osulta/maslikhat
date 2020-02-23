<?php

namespace frontend\controllers;


use common\models\Translation;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class TranslationController extends Controller
{

    public function actionView($id)
    {
        return $this->render('view', [
            'translation' => $this->findModel($id),
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
        if (($model = Translation::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Онлайн көрсетілім табылмады');
    }
}
