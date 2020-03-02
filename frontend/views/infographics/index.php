<?php

/* @var $this yii\web\View */
/* @var $infographics \frontend\models\Infographics[] */

$this->title = '';
?>
<div class="col-sm-9 infographics">
    <h3 style="margin-left: 1%">Инфографика</h3>
    <?php
    $items = [];
    foreach ($infographics as $infographic):
        $items[] = [
            'url' => '/uploads/infographics-images/'.$infographic->image,
            'src' => '/uploads/infographics-images/'.$infographic->image,
            'options' => []
        ];
    endforeach;
    ?>
    <?= dosamigos\gallery\Gallery::widget(['items' => $items]);?>
</div>
