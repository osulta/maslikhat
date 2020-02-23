<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Deputy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deputy-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'full_name_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'full_name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'place_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'place_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сақтау', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
