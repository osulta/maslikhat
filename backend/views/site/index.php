<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Еңбекшіқазақ Аудандық Мәслихаты. Басқару панелі.';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Басқару панелі</h1>

        <p class="lead">Еңбекшіқазақ Аудандық Мәслихаты</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>Сессиялар</h2>
                <p>Сессиялардың тізімін көру, сессияны қосу және өзгерту.</p>
                <p>
                    <a class="btn btn-default" href="<?= Url::to(['session/index']); ?>">Сесссиялар тізімі</a>
                    <a class="btn btn-primary" href="<?= Url::to(['session/create']); ?>">Сесссияны қосу</a>
                </p>
            </div>
            <div class="col-lg-6">
                <h2>Мәлімет</h2>
                <p>Мәліметтердің тізімін көру, мәлімет қосу және өзгерту.</p>
                <p>
                    <a class="btn btn-default" href="<?= Url::to(['info/list']); ?>">Мәлімет тізімі</a>
                    <a class="btn btn-primary" href="<?= Url::to(['info/create']); ?>">Жаңа мәліметі қосу</a>
                </p>
            </div>
        </div>

    </div>
</div>
