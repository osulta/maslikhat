<?php

namespace frontend\controllers;


use backend\models\Gallery;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class GalleryController extends Controller
{
    public function actionIndex()
    {
        $galleries = Gallery::find()
            ->where(['type' => Gallery::GALLERY])
            ->orderBy(['id' => SORT_DESC])
            ->all();
        return $this->render('index', [
            'galleries' => $galleries,
        ]);
    }

    /**
     * Finds the Info model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Gallery the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Gallery::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Мәлімет табылмады.');
    }
}