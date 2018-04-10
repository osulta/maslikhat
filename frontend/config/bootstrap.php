<?php

use yii\base\Event;
use yii\helpers\ArrayHelper;
use yii\web\View;
use common\models\Info;

Event::on(View::className(), View::EVENT_BEFORE_RENDER, function() {

    $_SESSION['language'] = isset($_SESSION['language']) ? $_SESSION['language'] : 'kz';

    $menuItems = Info::find()
        ->orderBy('parent')
        ->asArray()
        ->all();
    $menuItems = ArrayHelper::index($menuItems, NULL, 'parent');

    Yii::$app->view->params['menuItems'] = $menuItems;
});