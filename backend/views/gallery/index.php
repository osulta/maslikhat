<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Галерея';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="image-with-description-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Сурет қосу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'description_kz',
            //'description_ru',
            //'type',
            [
                'attribute' => 'image',
                'format' => 'html',
                'value' => function ($data) {
                    return Html::img('/frontend/web/uploads/gallery-images/small/'. $data['image'],
                        ['width' => '120px']);
                },
            ],
            //'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
