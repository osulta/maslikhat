<?php

/* @var $this yii\web\View */
/* @var $sliderImages \frontend\models\Slider */
/* @var $notification \frontend\models\Notification */
/* @var $article \frontend\models\Article */
/* @var $infographics \frontend\models\Infographics[] */

use yii\bootstrap\Carousel;
use yii\helpers\Url;

$this->title = 'My Yii Application';
$l = $this->params['language'];
?>
<div class="col-sm-6">
    <div class="row">
        <div class="col-sm-12">
            <div class="carousel slide">
                <?php
                $carousel = [];
                foreach ($sliderImages as $key => $image) :
                    $carousel[]  =
                        [
                            'content' => '<img src="/uploads/slider-images/'.$image->image.'" alt="slider" class="deputy-avatar"/>',
                        ];
                endforeach;
                echo Carousel::widget([
                    'items' => $carousel,
                    'options' => ['class' => 'carousel slide', 'data-interval' => '5000'],
                    'controls' => [
                        '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
                        '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
                    ]
                ]);
                ?>
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
    <?php if ($notification) { ?>
        <div class="thumbnail">
            <p class="text-center"><strong><?= Yii::t('app', 'Хабарландыру'); ?>!</strong></p>
            <?php if ($notification->image !== null) { ?>
                <img class="image-margin-bottom" src="/uploads/notification-images/<?= $notification->image; ?>" alt="img">
            <?php } ?>
            <p class="text"><?= $notification->{'description_' . $l}; ?> </p>
            <p class="text-right"><strong><?= $notification->created_at ?></strong></p>
        </div>
    <?php } ?>
    <div class="link-by-img">
        <?php if ($article) { ?>
        <a href="/article/view?id=<?= $article->id ?>">
            <img src="/images/25_<?= $l ?>.png" alt="25">
        </a>
        <?php } ?>
        <a href="https://www.akorda.kz/kz/addresses" target="_blank">
            <img src="/images/zholdau_<?= $l ?>.png" alt="zholdau">
        </a>
        <a href="https://open.egov.kz/" target="_blank">
            <img src="/images/egov_<?= $l ?>.png" alt="egov">
        </a>
    </div>
    <?php if (count($infographics) > 0) { ?>
        <div class="carousel-galleries thumbnail">
            <div class="gallery-title">
                <p style="color: #777;margin: 0">Инфографика</p>
                <a href="/infographics/index" class="gallery-link"><?= Yii::t('app', 'Инфографикаға өту'); ?> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
            </div>
            <?php
            $g_carousel = [];
            foreach ($infographics as $key => $infographic) :
                $g_carousel[]  =
                    [
                        'content' => '<img src="/uploads/infographics-images/small/'.$infographic->image.'" alt="infographic" class="gallery-image"/>',
                    ];
            endforeach;
            echo Carousel::widget([
                'items' => $g_carousel,
                'options' => ['class' => 'carousel slide', 'data-interval' => '9000'],
                'controls' => ['', '']
            ]);
            ?>
        </div>
    <?php }?>
</div>
