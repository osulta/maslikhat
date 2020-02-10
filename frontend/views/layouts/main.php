<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;

AppAsset::register($this);

$scrollingText = $this->params['scrolling_text'];
$menuItems = $this->params['menuItems'];
$l = $this->params['language'];
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Yii::t('app', 'Еңбекшіқазақ аудандық мәслихатының ресми сайты') ?></title>
    <meta name="description" content="<?= Yii::t('app', 'Еңбекшіқазақ аудандық мәслихатының ресми сайты') ?>">
    <meta name="keywords" content="<?= Yii::t('app', 'Еңбекшіқазақ, аудандық мәслихат, ресми сайты') ?>">
    <meta name="author" content="Omashev Sultan">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!--cotainer-->
<div class="container">
    <!--navbar -->
    <nav class="navbar navbar-inverse">

        <div class="navbar-background">
            <div class="gerb-block">
                <img src="../images/gerb.png" alt="">
            </div>
            <div class="navbar-title-block">
                <h1 class="navbar-title"><?= Yii::t('app', 'Еңбекшіқазақ аудандық мәслихатының ресми сайты'); ?></h1>
            </div>
        </div>

        <div class="navbar-menu">
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
                        <input type="text" class="form-control" placeholder="<?= Yii::t('app', 'Іздеу'); ?>">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </form>
                <ul class="nav navbar-languages navbar-nav navbar-right">
                    <li class="<?= Yii::$app->language == 'kz-KZ' ? 'active' : '' ?>"><a href="<?=  Url::to(['language/change-language', 'language' => 'kz-KZ']); ?>">ҚЗ</a></li>
                    <li class="<?= Yii::$app->language == 'ru-RU' ? 'active' : '' ?>"><a href="<?= Url::to(['language/change-language', 'language' => 'ru-RU']); ?>">РУ</a></li>
                </ul>
                <ul class="nav navbar-social navbar-nav navbar-right">
                    <li>
                        <a href="#"><img class="social-logo" src="../images/vk-logo.png" alt="VK logo"></a>
                    </li>
                    <li>
                        <a href="#"><img class="social-logo" src="../images/instagram-logo.png" alt="Instagram logo"></a>
                    </li>
                </ul>
                <div class="scrolling-text-block">
                    <marquee class="scrolling-text" behavior="scroll" direction="left"><?= $scrollingText ?></marquee>
                </div>
            </div>
        </div>
    </nav>
    <!--navbar ends -->

    <div class="row">
        <div class="col-sm-12">
            <div class="header-divider"></div>
        </div>
    </div>


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
                        <span class="visible-xs navbar-brand"><?= Yii::t('app', 'Мәзір'); ?></span>
                    </div>
                    <div class="navbar-collapse collapse sidebar-navbar-collapse">
                        <ul class="nav navbar-nav left-sidebar" id="left-sidebar">
                            <li><a href="/site/index"><?= Yii::t('app', 'Негізгі бет'); ?></a></li>
                            <li>
                                <a href="#maslikhat" class="left-sidebar-a"><?= Yii::t('app', 'Мәслихат'); ?></a>
                                <div id="maslikhat" class="collapse" >
                                    <ul class="nav nav-list">
                                        <?php foreach ($menuItems['maslikhat'] as $item) : ?>
                                            <li><a href="<?= Url::to(['info/view', 'id' => $item['id']]); ?>"><?= $item['title_' . $l]; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#kogamdyk-kenes" class="left-sidebar-a"><?= Yii::t('app', 'Қоғамдық кеңес'); ?></a>
                                <div id="kogamdyk-kenes" class="collapse">
                                    <ul class="nav nav-list">
                                        <?php foreach ($menuItems['public_council'] as $item) : ?>
                                            <li><a href="<?= Url::to(['info/view', 'id' => $item['id']]); ?>"><?= $item['title_' . $l]; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#sessiya" class="left-sidebar-a"><?= Yii::t('app', 'Сессия'); ?></a>
                                <div class="collapse" id="sessiya">
                                    <ul class="nav nav-list">
                                        <?php foreach ($menuItems['session'] as $item) : ?>
                                            <li><a href="<?= Url::to(['info/view', 'id' => $item['id']]); ?>"><?= $item['title_' . $l]; ?></a></li>
                                        <?php endforeach; ?>
                                        <li><a href="<?= Url::to(['session/list']); ?>"><?= Yii::t('app', 'Жүргізілген сессиясы'); ?></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#commission" class="left-sidebar-a"><?= Yii::t('app', 'Тұрақты комиссия'); ?></a>
                                <div class="collapse" id="commission">
                                    <ul class="nav nav-list">
                                        <?php foreach ($menuItems['commission'] as $item) : ?>
                                            <li><a href="<?= Url::to(['info/view', 'id' => $item['id']]); ?>"><?= $item['title_' . $l]; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#requests" class="left-sidebar-a"><?= Yii::t('app', 'Сауалдар'); ?></a>
                                <div class="collapse" id="requests">
                                    <ul class="nav nav-list">
                                        <?php foreach ($menuItems['requests'] as $item) : ?>
                                            <li><a href="<?= Url::to(['info/view', 'id' => $item['id']]); ?>"><?= $item['title_' . $l]; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#deputies" class="left-sidebar-a"><?= Yii::t('app', 'Мәслихат депутаттары'); ?></a>
                                <div class="collapse" id="deputies">
                                    <ul class="nav nav-list">
                                        <?php if (isset($menuItems['deputies'])) { ?>
                                        <?php foreach ($menuItems['deputies'] as $item) : ?>
                                            <li><a href="<?= Url::to(['info/view', 'id' => $item['id']]); ?>"><?= $item['title_' . $l]; ?></a></li>
                                        <?php endforeach; ?>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#decisions" class="left-sidebar-a"><?= Yii::t('app', 'Шешімдер'); ?></a>
                                <div class="collapse" id="decisions">
                                    <ul class="nav nav-list">
                                        <?php if (isset($menuItems['decisions'])) { ?>
                                        <?php foreach ($menuItems['decisions'] as $item) : ?>
                                            <li><a href="<?= Url::to(['info/view', 'id' => $item['id']]); ?>"><?= $item['title_' . $l]; ?></a></li>
                                        <?php endforeach; ?>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#services" class="left-sidebar-a"><?= Yii::t('app', 'Мемлекеттік қызмет'); ?></a>
                                <div class="collapse" id="services">
                                    <ul class="nav nav-list">
                                        <?php if (isset($menuItems['services'])) { ?>
                                        <?php foreach ($menuItems['services'] as $item) : ?>
                                            <li><a href="<?= Url::to(['info/view', 'id' => $item['id']]); ?>"><?= $item['title_' . $l]; ?></a></li>
                                        <?php endforeach; ?>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#budget" class="left-sidebar-a"><?= Yii::t('app', 'Бюджет'); ?></a>
                                <div class="collapse" id="budget">
                                    <ul class="nav nav-list">
                                        <?php if (isset($menuItems['budget']) && is_array($menuItems['budget'])) { ?>
                                            <?php foreach ($menuItems['budget'] as $item) : ?>
                                                <li><a href="<?= Url::to(['info/view', 'id' => $item['id']]); ?>"><?= $item['title_' . $l]; ?></a></li>
                                            <?php endforeach; ?>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#election" class="left-sidebar-a"><?= Yii::t('app', 'Сайлау'); ?></a>
                                <div class="collapse" id="election">
                                    <ul class="nav nav-list">
                                        <?php if (isset($menuItems['election']) && is_array($menuItems['election'])) { ?>
                                        <?php foreach ($menuItems['election'] as $item) : ?>
                                            <li><a href="<?= Url::to(['info/view', 'id' => $item['id']]); ?>"><?= $item['title_' . $l]; ?></a></li>
                                        <?php endforeach; ?>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </li>
                    <?php foreach ($menuItems['main'] as $item) : ?>
                            <li><a href="<?= Url::to(['info/view', 'id' => $item['id']]); ?>"><?= $item['title_' . $l]; ?></a></li>
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
