<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ImageWithDescription */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="image-with-description-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->textInput(['value' => 'slider', 'type' => 'hidden'])->label(false) ?>

    <?= $form->field($model, 'tmpImage')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сақтау', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
