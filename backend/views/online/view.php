<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Info */

$this->title = $model->title_kz;
$this->params['breadcrumbs'][] = ['label' => 'Мәліметтер тізімі', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Өзгерту', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Кетіру', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title_kz',
            'title_url_kz:url',
            'title_ru',
            'title_url_ru:url',
            'content_kz:ntext',
            'content_ru:ntext',
            'date',
            'created_at',
        ],
    ]) ?>

</div>
