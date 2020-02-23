<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ImageWithDescription */

$this->title = 'Слайдерге сурет қосу';
$this->params['breadcrumbs'][] = ['label' => 'Суреттер', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="image-with-description-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
