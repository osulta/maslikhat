<?php

/* @var $this yii\web\View */
/* @var $galleries \frontend\models\Gallery */

$this->title = '';
?>
<div class="col-sm-9">
    <h3 style="margin-left: 1%">Галерея</h3>
    <?php
    $items = [];
    foreach ($galleries as $gallery):
        $items[] = [
            'url' => '/uploads/gallery-images/'.$gallery->image,
            'src' => '/uploads/gallery-images/'.$gallery->image,
            'options' => []
        ];
    endforeach;
    ?>
    <?= dosamigos\gallery\Gallery::widget(['items' => $items]);?>
</div>
