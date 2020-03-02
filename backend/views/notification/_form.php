<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model common\models\Notification */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="advert-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'short_desc_kz')->textarea(['maxlength' => true, 'rows' => 5]) ?>

    <?= $form->field($model, 'short_desc_ru')->textarea(['maxlength' => true, 'rows' => 5]) ?>

    <?= $form->field($model, 'description_kz')->widget(CKEditor::className(),[
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
            'preset' => 'full',
            'inline' => false,
        ]),
    ]);?>

    <?= $form->field($model, 'description_ru')->widget(CKEditor::className(),[
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
            'preset' => 'full',
            'inline' => false,
        ]),
    ]);?>

    <?= $form->field($model, 'tmpImage')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сақтау', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
