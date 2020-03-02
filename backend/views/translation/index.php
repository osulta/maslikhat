<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Онлайн көрсетілім';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="translation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Онлайн көрсетілім қосу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title_kz',
            'title_ru',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
