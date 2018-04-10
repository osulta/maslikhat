<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 10.04.2018
 * Time: 11:05
 */

namespace frontend\controllers;


use Yii;
use yii\web\Controller;

class LanguageController extends Controller
{

    public function actionChangeLanguage()
    {
        $request = Yii::$app->request;
        $session = Yii::$app->session;
        $language = $request->get('language');
        $session->set('language', $language);

        return $this->redirect(Yii::$app->request->referrer);
    }

}