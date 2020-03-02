<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Notification */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Хабарландырулар', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="advert-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Өзгерту', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Кетіру', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Хабарландыру жойылады!',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'short_desc_kz',
            'short_desc_ru',
            'image',
            'created_at',
        ],
    ]) ?>

</div>
