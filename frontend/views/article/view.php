<?php

/* @var $article \frontend\models\Article */

$l = $this->params['language'];
?>

<div class="col-sm-9">
    <div class="row">
        <div class="col-sm-12">
            <h3><?= $article->{'title_' . $l}; ?></h3>
            <p style="text-align:center">
                <img src="/uploads/preview-images/<?=$article->preview_image?>" alt="" width="600px">
            </p>
            <?= $article->{'content_' . $l}; ?>
        </div>
    </div>
</div>

