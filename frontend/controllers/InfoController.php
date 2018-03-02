<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 02.03.2018
 * Time: 13:43
 */

namespace frontend\controllers;


use frontend\models\Info;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class InfoController extends Controller
{
    public function actionIndex()
    {

    }

    public function actionView($id)
    {
        $info = $this->findModel($id);
        return $this->render('view', [
            'info' => $info,
        ]);
    }

    /**
     * Finds the Info model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Info the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Info::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Мәлімет табылмады.');
    }
}