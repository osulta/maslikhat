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
        $language = Yii::$app->request->get('language');
        Yii::$app->language = $language;

        $session = Yii::$app->session;
        $session->set('language', $language);

        if (Yii::$app->request->referrer == 'http://enbekshikazak-maslikhat.kz/') {
            return $this->redirect('/site/index');
        }

        return $this->redirect(Yii::$app->request->referrer);
    }

}