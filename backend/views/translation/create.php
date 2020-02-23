<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Translation */

$this->title = 'Онлайн көрсетілім қосу';
$this->params['breadcrumbs'][] = ['label' => 'Онлайн көрсетілім', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="translation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
