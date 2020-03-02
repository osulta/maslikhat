<?php

/* @var $articles \frontend\models\Article[] */

$l = $this->params['language'];
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>

<div class="col-sm-9 article-list">
    <h3><?= Yii::t('app', 'Мақалалар'); ?></h3>
    <div class="row flex news-feed-block">
        <?php foreach ($articles as $article) : ?>
            <div class="col-sm-4">
                <div class="well well-equal">
                    <p class="sess-date"><?= $article->date; ?></p>
                    <img src="/uploads/preview-images/<?= $article->preview_image; ?>" width="100%" alt="<?= $article->{'title_' . $l}; ?>">
                    <h4 class="sess-title"><a href="<?= Url::to(['article/view', 'id' => $article->id]); ?>"><?= $article->{'title_' . $l}; ?></a></h4>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php
        echo LinkPager::widget([
            'pagination' => $pages,
        ]);
    ?>
</div>

