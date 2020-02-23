<?php

$l = $this->params['language'];
?>

<div class="col-sm-9">
    <div class="row">
        <div class="col-sm-12">
            <h2><?= Yii::t('app', 'Онлайн көрсетілім'); ?></h2>
            <h5><?= $translation->{'title_' . $l}; ?></h5>
            <p><?= $translation->video; ?></p>
        </div>
    </div>
</div>

