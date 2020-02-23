<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \backend\models\Infographics;

/* @var $this yii\web\View */
/* @var $model backend\models\Infographics */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="infographics-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->textInput(['value' => Infographics::INFOGRAPHICS, 'type' => 'hidden'])->label(false) ?>

    <?= $form->field($model, 'tmpImage')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сақтау', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
