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
                <h2>Бастапқы беттегі негізгі слайдер</h2>
                <p>Суреттер тізімін көру, мәлімет қосу және өзгерту.</p>
                <p>
                    <a class="btn btn-default" href="<?= Url::to(['slider/index']); ?>">Суреттер</a>
                    <a class="btn btn-primary" href="<?= Url::to(['slider/create']); ?>">Жаңа сурет қосу</a>
                </p>
            </div>
            <div class="col-lg-6">
                <h2>Хабарландыру</h2>
                <p>Хабарландыру тізімін көру, мәлімет қосу және өзгерту.</p>
                <p>
                    <a class="btn btn-default" href="<?= Url::to(['notification/index']); ?>">Хабарландыру</a>
                    <a class="btn btn-primary" href="<?= Url::to(['notification/create']); ?>">Жаңа хабарландыру қосу</a>
                </p>
            </div>
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
                <p>Мәлімет тізімін көру, мәлімет қосу және өзгерту.</p>
                <p>
                    <a class="btn btn-default" href="<?= Url::to(['info/index']); ?>">Мәлімет тізімі</a>
                    <a class="btn btn-primary" href="<?= Url::to(['info/create']); ?>">Жаңа мәлімет қосу</a>
                </p>
            </div>
            <div class="col-lg-6">
                <h2>Мақала</h2>
                <p>Мақала тізімін көру, мәлімет қосу және өзгерту.</p>
                <p>
                    <a class="btn btn-default" href="<?= Url::to(['article/index']); ?>">Мақала тізімі</a>
                    <a class="btn btn-primary" href="<?= Url::to(['article/create']); ?>">Жаңа мақала қосу</a>
                </p>
            </div>
            <div class="col-lg-6">
                <h2>Настройки</h2>
                <p>Бегущая строка, слайдер на главной</p>
                <p>
                    <a class="btn btn-default" href="<?= Url::to(['settings/index']); ?>">Настройки</a>
                </p>
            </div>
            <div class="col-lg-6">
                <h2>Онлайн көрсетілім</h2>
                <p>Онлайн көрсетілім тізімін көру, мәлімет қосу және өзгерту.</p>
                <p>
                    <a class="btn btn-default" href="<?= Url::to(['translation/index']); ?>">Онлайн көрсетілім</a>
                    <a class="btn btn-primary" href="<?= Url::to(['translation/create']); ?>">Жаңа онлайн көрсетілім қосу</a>
                </p>
            </div>
            <div class="col-lg-6">
                <h2>Депутаттар</h2>
                <p>Депутаттар тізімін көру, мәлімет қосу және өзгерту.</p>
                <p>
                    <a class="btn btn-default" href="<?= Url::to(['deputy/index']); ?>">Депутаттар</a>
                    <a class="btn btn-primary" href="<?= Url::to(['deputy/create']); ?>">Жаңа депутат қосу</a>
                </p>
            </div>
            <div class="col-lg-6">
                <h2>Галерея</h2>
                <p>Галерея тізімін көру, мәлімет қосу және өзгерту.</p>
                <p>
                    <a class="btn btn-default" href="<?= Url::to(['gallery/index']); ?>">Галерея</a>
                    <a class="btn btn-primary" href="<?= Url::to(['gallery/create']); ?>">Жаңа галерея қосу</a>
                </p>
            </div>
            <div class="col-lg-6">
                <h2>Инфографика</h2>
                <p>Инфографика тізімін көру, мәлімет қосу және өзгерту.</p>
                <p>
                    <a class="btn btn-default" href="<?= Url::to(['infographics/index']); ?>">Инфографика</a>
                    <a class="btn btn-primary" href="<?= Url::to(['infographics/create']); ?>">Жаңа инфографика қосу</a>
                </p>
            </div>
        </div>

    </div>
</div>
