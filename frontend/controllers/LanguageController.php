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
use yii\web\Cookie;

class LanguageController extends Controller
{

    public function actionChangeLanguage()
    {
        $language = Yii::$app->request->get('language');
        Yii::$app->language = $language;

        $languageCookie = new Cookie([
            'name' => 'language',
            'value' => $language,
            'expire' => time() + 60 * 60 * 24 * 30, // 30 days
        ]);
        Yii::$app->response->cookies->add($languageCookie);

        return $this->redirect(Yii::$app->request->referrer);
    }

}