<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Infographics */

$this->title = 'Сурет қосу';
$this->params['breadcrumbs'][] = ['label' => 'Инфографика', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="infographics-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
