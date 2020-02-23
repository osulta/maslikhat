<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Translation */

$this->title = 'Онлайн көрсетілімді өзгерту: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Онлайн көрсетілім', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Өзгерту';
?>
<div class="translation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
