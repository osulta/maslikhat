<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Infographics */

$this->title = 'Инфографиканы өзгерту: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Инфографика', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Өзгерту';
?>
<div class="infographics-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
