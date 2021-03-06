<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>
<?php if (Yii::$app->session->hasFlash('contactNumberSubmitted')) { ?>
    <?php
    $this->registerJs(
        "$('#myModalSendOk').modal('show');",
        yii\web\View::POS_READY
    );
    ?>
    <div class="modal fade" id="myModalSendOk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Запрос перезвонить отправлен</h4>
                </div>
                <div class="modal-body">
                    <p>В ближайшее время наш менеджер с вами свяжется по указанному Вами номеру!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div id="carbonForm">
            <div class="fieldContainer">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <div class="modal-header" style=" repeat-y #fc0;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h6 class="modal-title" id="myModalLabel" style="text-align:center; color: white">Укажите свои данные и мы вам перезвоним</h6>
                </div>
                <div class="modal-body" style="repeat-y #fc0; color: #07f4ff;">
                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model, 'phone')->textInput(['max' => 6])->hint('Пример: +79526456013'); ?>
                </div>
                <div class="signupButton">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>