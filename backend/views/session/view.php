<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Session */

$this->title = $model->title_kz;
$this->params['breadcrumbs'][] = ['label' => 'Сессия тізімі', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="session-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Өзгерту', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Кетіру', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Сессия жойылады!',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title_kz',
            'title_ru',
            'content_kz:ntext',
            'content_ru:ntext',
            'preview_image',
            'date',
            'created_at',
        ],
    ]) ?>

</div>
