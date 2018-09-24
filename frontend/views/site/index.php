<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'My Yii Application';
$l = $this->params['language'];
?>
<div class="col-sm-6">
    <div class="row">
        <div class="col-sm-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="/images/slider/1.jpeg" alt="">
                    </div>

                    <div class="item">
                        <img src="/images/slider/2.jpeg" alt="">
                    </div>

                    <div class="item">
                        <img src="/images/slider/3.jpeg" alt="">
                    </div>

                    <div class="item">
                        <img src="/images/slider/4.jpeg" alt="">
                    </div>

                    <div class="item">
                        <img src="/images/slider/5.jpeg" alt="">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">алдыңғы</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">келесі</span>
                </a>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-sm-12">
            <div class="title">
                <h4><?= Yii::t('app', 'Жаңалықтар'); ?></h4>
            </div>
        </div>
    </div>
    <div class="row flex news-feed-block">
        <?php foreach ($news as $news) : ?>
        <div class="col-sm-6">
            <div class="well well-equal">
                <p class="sess-date"><?= $news->date; ?></p>
                <img src="/uploads/preview-images/<?= $news->preview_image; ?>" width="100%" alt="<?= $news->{'title_' . $l}; ?>">
                <h4 class="sess-title"><a href="<?= Url::to(['session/view', 'id' => $news->id]); ?>"><?= $news->{'title_' . $l}; ?></a></h4>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="col-sm-3">
    <div class="thumbnail">
        <p class="text-center"><strong><?= Yii::t('app', 'Қош келдіңіздер!'); ?></strong></p>
        <img class="image-margin-bottom" src="/images/beket-tol.jpeg" alt="Астана">
        <p class="text"><?= Yii::t('app', 'Сізді Еңбекшіқазақ аудандық мәслихаттың ресми сайтында қарсы алуға қуаныштымын. Еңбекшіқазақ аудандық мәслихаты Қазақстан Республикасында «Электрондық үкімет» мемлекеттік бағдарламасын қалыптастыру мақсатында, атқарылып жатқан іс-шаралар туралы ақпарат береді.'); ?> </p>
        <p class="text-right"><?= Yii::t('app', 'Құрметпен, Еңбекшіқазақ аудандық мәслихаттың хатшысы'); ?> <br /><strong><?= Yii::t('app', 'Ахметов Бекет Төлегенұлы'); ?></strong></p>
    </div>
</div>
