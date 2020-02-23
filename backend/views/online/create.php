<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Info */

$this->title = 'Мәлімет';
$this->params['breadcrumbs'][] = ['label' => 'Мәліметтер тізімі', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>