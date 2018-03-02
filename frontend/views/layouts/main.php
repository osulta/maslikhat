<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);

$menuItems = $this->params['menuItems'];

$this->title = "Еңбекшіқазақ Аудандық Мәслихатының Ресми сайты.";
//print("<pre>".print_r($menuItems,true)."</pre>");
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!--navbar -->
<nav class="navbar navbar-inverse">

    <div class="container navbar-background">
    </div>

    <div class="container navbar-menu">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">

            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group input-group">
                    <input type="text" class="form-control" placeholder="Іздеу">
                    <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">ҚЗ</a></li>
                <li><a href="#">РУ</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--navbar ends -->

<!--cotainer-->
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="sidebar-nav">
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="visible-xs navbar-brand">Мәзір</span>
                    </div>
                    <div class="navbar-collapse collapse sidebar-navbar-collapse">
                        <ul class="nav navbar-nav left-sidebar" id="left-sidebar">
                            <li><a href="/">Негізгі бет</a></li>
                            <li>
                                <a href="#maslikhat" class="left-sidebar-a">Мәслихат</a>
                                <div id="maslikhat" class="collapse" >
                                    <ul class="nav nav-list">
                                        <?php foreach ($menuItems['maslikhat'] as $item) : ?>
                                            <li><a href="<?= Url::to(['info/view', 'id' => $item['id']]); ?>"><?= $item['title']; ?></a></li>
                                        <?php endforeach; ?>
<!--                                        <li><a href="">Қызметі мен міндеттері</a></li>-->
<!--                                        <li><a href="">Аппарат құрылымы</a></li>-->
<!--                                        <li><a href="">Жұмыс регламентi</a></li>-->
<!--                                        <li><a href="">Қызметтік міндеттер</a></li>-->
<!--                                        <li><a href="">Басшылық</a></li>-->
<!--                                        <li><a href="">Ереже</a></li>-->
<!--                                        <li><a href="">Жұмыс жоспары</a></li>-->
<!--                                        <li><a href="">Нормативтік-құқықтық база</a></li>-->
<!--                                        <li><a href="">Аппарат тарихы</a></li>-->
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#kogamdyk-kenes" class="left-sidebar-a">Қоғамдық кеңес</a>
                                <div id="kogamdyk-kenes" class="collapse">
                                    <ul class="nav nav-list">
                                        <?php foreach ($menuItems['public_council'] as $item) : ?>
                                            <li><a href="<?= Url::to(['info/view', 'id' => $item['id']]); ?>"><?= $item['title']; ?></a></li>
                                        <?php endforeach; ?>
<!--                                        <li><a href="">Ереже</a></li>-->
<!--                                        <li><a href="">Жұмыс жоспары</a></li>-->
<!--                                        <li><a href="">Кеңестің құрамы</a></li>-->
<!--                                        <li><a href="">Комиссиялардың құрамы</a></li>-->
<!--                                        <li><a href="">Кеңестің отырыстары</a></li>-->
<!--                                        <li><a href="">Қызметінің мониторингі</a></li>-->
                                    </ul>
                                </div>
                            </li>
                            <li class="active">
                                <a href="#sessiya" class="left-sidebar-a">Сессия</a>
                                <div class="collapse" id="sessiya"">
                                    <ul class="nav nav-list">
                                        <?php foreach ($menuItems['session'] as $item) : ?>
                                            <li><a href="<?= Url::to(['info/view', 'id' => $item['id']]); ?>"><?= $item['title']; ?></a></li>
                                        <?php endforeach; ?>
<!--                                        <li><a href="">Өткізу тәртібі</a></li>-->
<!--                                        <li><a href="">Сессия төрағасы</a></li>-->
<!--                                        <li><a href="">Мәселелер тізімі</a></li>-->
                                        <li><a href="<?= Url::to(['session/list']); ?>">Жүргізілген сессиясы</a></li>
                                    </ul>
                                </div>
                            </li>
                    <?php foreach ($menuItems['main'] as $item) : ?>
                            <li><a href="<?= Url::to(['info/view', 'id' => $item['id']]); ?>"><?= $item['title']; ?></a></li>
                    <?php endforeach; ?>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

            <?= $content ?>

    </div>
</div>

<footer class="container text-center">
    <ul>

    </ul>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
