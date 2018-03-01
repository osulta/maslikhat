<?php

use yii\base\Event;
use yii\web\View;
use common\models\Session;

Event::on(View::className(), View::EVENT_BEFORE_RENDER, function() {
//    $sessionDropDown = Session::find()
//        ->where(['type' => Session::TYPE_STATIC])
//        ->all();
//
//    Yii::$app->view->params['sessionDropDown'] = $sessionDropDown;
});