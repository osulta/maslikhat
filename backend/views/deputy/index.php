<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Депутаттар тізімі';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deputy-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Депутат қосу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'full_name_kz',
            'full_name_ru',
            'avatar',
            'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
