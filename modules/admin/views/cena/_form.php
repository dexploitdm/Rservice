<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;


/* @var $this yii\web\View */
/* @var $model app\models\Cena */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cena-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php
    echo $form->field($model, 'content')->widget(CKEditor::className(), [

        'editorOptions' => ElFinder::ckeditorOptions('elfinder',['preset' => 'standard',]),
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
