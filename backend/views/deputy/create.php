<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Deputy */

$this->title = 'Депутат';
$this->params['breadcrumbs'][] = ['label' => 'Депутаттар тізімі', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deputy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
