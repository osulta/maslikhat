<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\models\Translation;
use frontend\models\Deputy;
use frontend\models\Gallery;
use yii\bootstrap\Carousel;
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;

AppAsset::register($this);

$scrollingText = $this->params['scrolling_text'];
$menuItems = $this->params['menuItems'];
$l = $this->params['language'];
$deputies = Deputy::find()
    ->orderBy(['id' => SORT_DESC])
    ->all();
$galleries = Gallery::find()
    ->where(['type' => Gallery::GALLERY])
    ->orderBy(['id' => SORT_DESC])
    ->limit(5)
    ->all();
$translation = Translation::find()
    ->orderBy(['id' => SORT_DESC])
    ->one();
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
                        <a href="https://vk.com/enbekshikazakh.maslihat" target="_blank"><img class="social-logo" src="../images/vk-logo.png" alt="VK logo"></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/enbekshikazakh.maslihat" target="_blank"><img class="social-logo" src="../images/instagram-logo.png" alt="Instagram logo"></a>
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
                            <li>
                                <a href="/site/index" class="menu-flex">
                                    <img src="/images/menu_icon/1.jpg" alt="icon">
                                    <?= Yii::t('app', 'Негізгі бет'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="#maslikhat" class="left-sidebar-a menu-flex">
                                    <img src="/images/menu_icon/2.jpg" alt="icon">
                                    <?= Yii::t('app', 'Мәслихат'); ?>
                                </a>
                                <div id="maslikhat" class="collapse" >
                                    <ul class="nav nav-list">
                                        <?php foreach ($menuItems['maslikhat'] as $item) : ?>
                                            <li><a href="<?= Url::to(['info/view', 'id' => $item['id']]); ?>"><?= $item['title_' . $l]; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#kogamdyk-kenes" class="left-sidebar-a menu-flex">
                                    <img src="/images/menu_icon/3.jpg" alt="icon">
                                    <?= Yii::t('app', 'Қоғамдық кеңес'); ?>
                                </a>
                                <div id="kogamdyk-kenes" class="collapse">
                                    <ul class="nav nav-list">
                                        <?php foreach ($menuItems['public_council'] as $item) : ?>
                                            <li><a href="<?= Url::to(['info/view', 'id' => $item['id']]); ?>"><?= $item['title_' . $l]; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#sessiya" class="left-sidebar-a menu-flex">
                                    <img src="/images/menu_icon/4.png" alt="icon">
                                    <?= Yii::t('app', 'Сессия'); ?>
                                </a>
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
                                <a href="#commission" class="left-sidebar-a menu-flex">
                                    <img src="/images/menu_icon/5.jpg" alt="icon">
                                    <?= Yii::t('app', 'Тұрақты комиссия'); ?>
                                </a>
                                <div class="collapse" id="commission">
                                    <ul class="nav nav-list">
                                        <?php foreach ($menuItems['commission'] as $item) : ?>
                                            <li><a href="<?= Url::to(['info/view', 'id' => $item['id']]); ?>"><?= $item['title_' . $l]; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#requests" class="left-sidebar-a menu-flex">
                                    <img src="/images/menu_icon/6.png" alt="icon">
                                    <?= Yii::t('app', 'Сауалдар'); ?>
                                </a>
                                <div class="collapse" id="requests">
                                    <ul class="nav nav-list">
                                        <?php foreach ($menuItems['requests'] as $item) : ?>
                                            <li><a href="<?= Url::to(['info/view', 'id' => $item['id']]); ?>"><?= $item['title_' . $l]; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#decisions" class="left-sidebar-a menu-flex">
                                    <img src="/images/menu_icon/7.png" alt="icon">
                                    <?= Yii::t('app', 'Шешімдер'); ?>
                                </a>
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
                                <a href="#services" class="left-sidebar-a menu-flex">
                                    <img src="/images/menu_icon/8.jpg" alt="icon">
                                    <?= Yii::t('app', 'Мемлекеттік қызмет'); ?>
                                </a>
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
                                <a href="#budget" class="left-sidebar-a menu-flex">
                                    <img src="/images/menu_icon/9.png" alt="icon">
                                    <?= Yii::t('app', 'Бюджет'); ?>
                                </a>
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
                                <a href="#election" class="left-sidebar-a menu-flex">
                                    <img src="/images/menu_icon/10.jpg" alt="icon">
                                    <?= Yii::t('app', 'Сайлау'); ?>
                                </a>
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
                    <?php foreach ($menuItems['main'] as $key => $item) : ?>
                            <li>
                                <a class="menu-flex" href="<?= Url::to(['info/view', 'id' => $item['id']]); ?>">
                                    <?php if ($key === 0) { ?>
                                        <img src="/images/menu_icon/11.png" alt="icon">
                                    <?php } else { ?>
                                        <img src="/images/menu_icon/12.jpg" alt="icon">
                                    <?php } ?>
                                    <?= $item['title_' . $l]; ?>
                                </a>
                            </li>
                    <?php endforeach; ?>
                            <?php if ($translation) { ?>
                            <li>
                                <a class="menu-flex" href="<?= Url::to(['translation/view', 'id' => $translation->id]); ?>">
                                    <img src="/images/menu_icon/13.png" alt="icon">
                                    <?= Yii::t('app', 'Онлайн көрсетілім'); ?>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div><!--/.nav-collapse -->
                    <?php if (count($deputies) > 0) { ?>
                    <div class="carousel-deputies">
                        <p style="color: #777"><?= Yii::t('app', 'Мәслихат депутаттары'); ?></p>
                        <?php
                            $carousel = [];
                            foreach ($deputies as $key => $deputy) :
                                $carousel[]  =
                                    [
                                        'content' => '<img src="/uploads/deputy-images/'.$deputy->avatar.'" alt="deputy" class="deputy-avatar"/>',
                                        'caption' => '<p class="deputy-full-name">'.$deputy->{'full_name_' . $l}.'</p><p class="deputy-position">'.$deputy->{'place_' . $l}.'</p>',
                                    ];
                            endforeach;
                            echo Carousel::widget([
                                'items' => $carousel,
                                'options' => ['class' => 'carousel slide', 'data-interval' => '12000'],
                                'controls' => [
                                    '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
                                    '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
                                ]
                            ]);
                        ?>
                    </div>
                    <?php }?>
                    <?php if (count($galleries) > 0) { ?>
                    <div class="carousel-galleries">
                        <div class="gallery-title">
                            <p style="color: #777;margin: 0">Галерея</p>
                            <a href="/gallery/index" class="gallery-link"><?= Yii::t('app', 'Галереяға өту'); ?> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                        </div>
                        <?php
                            $g_carousel = [];
                            foreach ($galleries as $key => $gallery) :
                                $g_carousel[]  =
                                    [
                                        'content' => '<img src="/uploads/gallery-images/small/'.$gallery->image.'" alt="gallery" class="gallery-image"/>',
                                    ];
                            endforeach;
                            echo Carousel::widget([
                                'items' => $g_carousel,
                                'options' => ['class' => 'carousel slide', 'data-interval' => '10000'],
                                'controls' => ['', '']
                            ]);
                        ?>
                    </div>
                    <?php }?>

                </div>
            </div>
        </div>

            <?= $content ?>

    </div>
</div>

<footer class="container text-center">
    <ul class="row text-left">
        <li class="col-md-4">
            <p class="footer-title"><?= Yii::t('app', 'БАЙЛАНЫС'); ?></p>
            <p>© <?= Yii::t('app', 'АЛМАТЫ ОБЛЫСЫ ЕҢБЕКШІҚАЗАҚ АУДАНДЫҚ МӘСЛИХАТТЫНЫҢ АППАРАТЫ'); ?></p>
            <p>040402 <?= Yii::t('app', 'Есік қаласы'); ?>,</p>
            <p><?= Yii::t('app', 'Жамбыл даңғылы, 21 «а»'); ?></p>
            <p><b>Тел.:</b> <a href="tel:87277572555">8 (72775) 7-25-55</a></p>
            <p><b>Факс:</b> 8 (7275) 7-25-55</p>
            <p><a href="mailto:maslihat777@mail.ru">Maslihat777@mail.ru</a></p>
        </li>
        <li class="col-md-4">
            <p class="footer-title"><?= Yii::t('app', 'ҚР ИНТЕРНЕТ-РЕСУРСТАРЫ'); ?></p>
            <p class="footer-a"><a href="https://www.akorda.kz" target="_blank"><?= Yii::t('app', 'Қазақстан Республикасы Президентінің ресми сайты'); ?></a></p>
            <p class="footer-a"><a href="https://primeminister.kz" target="_blank"><?= Yii::t('app', 'Қазақстан Республикасының Премьер-Министрінің ресми сайты'); ?></a></p>
            <p class="footer-a"><a href="http://www.parlam.kz" target="_blank"><?= Yii::t('app', 'Қазақстан Республикасы Парламентінің ресми сайты'); ?></a></p>
        </li>
        <li class="col-md-4">
            <p class="footer-title"><?= Yii::t('app', 'ӘКІМДІКТЕРДІҢ ИНТЕРНЕТ-РЕСУРСТАРЫ'); ?></p>
            <p class="footer-a"><a href="http://almoblmaslihat.gov.kz" target="_blank"><?= Yii::t('app', 'Алматы облысы мәслихатының ресми сайты'); ?></a></p>
            <p class="footer-a"><a href="https://www.zhetysu.gov.kz/" target="_blank"><?= Yii::t('app', 'Алматы облысы әкімдігінің ресми сайты'); ?></a></p>
            <p class="footer-a"><a href="www.enbekshikazah.gov.kz" target="_blank"><?= Yii::t('app', 'Еңбекшіқазақ ауданы әкімдігінің ресми сайты'); ?></a></p>
        </li>
    </ul>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
