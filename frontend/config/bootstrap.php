<?php

use yii\base\Event;
use yii\helpers\ArrayHelper;
use yii\web\View;
use common\models\Info;

Event::on(View::className(), View::EVENT_BEFORE_RENDER, function() {

    $session = Yii::$app->session;
    Yii::$app->language = $session->get('language') ?: 'kz-KZ';

    $menuItems = Info::find()
        ->orderBy('parent')
        ->asArray()
        ->all();
    $menuItems = ArrayHelper::index($menuItems, NULL, 'parent');
    Yii::$app->view->params['menuItems'] = $menuItems;


    $language = substr(Yii::$app->language, 0, 2);
    Yii::$app->view->params['language'] = $language;
});