<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Deputy */

$this->title = 'Депутатты өзгерту: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Депутаттар тізімі', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Өзгерту';
?>
<div class="deputy-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
