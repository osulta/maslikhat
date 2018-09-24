<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Session */

$this->title = 'Сессияны өзгерту';
$this->params['breadcrumbs'][] = ['label' => 'Сессия тізімі', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title_kz, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Өзгерту';
?>
<div class="session-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
