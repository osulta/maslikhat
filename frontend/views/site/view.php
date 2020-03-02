<?php

/* @var $notification \frontend\models\Notification */

$l = $this->params['language'];
?>

<div class="col-sm-9">
    <div class="row">
        <div class="col-sm-12">
            <h3><?= Yii::t('app', 'Хабарландыру'); ?></h3>
            <p><?= $notification->created_at ?></p>
            <p style="text-align:center">
                <img src="/uploads/notification-images/<?= $notification->image ?>" alt="" width="600px">
            </p>
            <?= $notification->{'description_' . $l}; ?>
        </div>
    </div>
</div>

