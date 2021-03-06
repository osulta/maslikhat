<?php

use yii\helpers\Url;

$l = $this->params['language'];
?>

<div class="col-sm-9">
    <div class="row">
        <div class="col-sm-12">
            <ul class="list-group">
                <?php foreach ($sessions as $session) :?>
                    <li class="list-group-item"><span class="text-secondary"><?= $session->date; ?></span><br /><a href="<?= Url::to(['session/view/', 'id' => $session->id]); ?>"><?= $session->{'title_' . $l}; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

