<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="light-wrapper">
    <div class="container inner2">
    </div>
</div>
<div class="light-wrapper">
    <div class="container inner2">
      <div class="thin">
          <div class="section-title text-center">
              <h1>Контакты</h1>
          </div>
        <div class="row">
          <div class="col-sm-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.0s">
            <div class="icon icon-m bm10"> <img src="/style/images/icons/ecology-earth.svg" alt="" /> </div>
            <p>г.Пермь, ул.Чернышевского 21А <br>
              корп. №1 </p>
          </div>
          <!--/column -->
          <div class="col-sm-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="icon icon-m bm10"> <img src="/style/images/icons/home-phone.svg" alt="" /> </div>
            <p>+7(952) 645 60 13 <br>
            </p>
          </div>
          <!--/column -->
          <div class="col-sm-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
            <div class="icon icon-m bm10"> <img src="/style/images/icons/chat-envelope.svg" alt="" /> </div>
            <p> <a class="nocolor" href="mailto:#">rservice@yandex.ru</a> <br>
              <a class="nocolor" href="mailto:#">rservice@gmail.ru</a> </p>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.thin -->
    </div>
    <!-- /.container -->
  </div>
<div class="dark-wrapper">
    <div class="row row-offset-0">
        <div class="row-same-height">
            <div class="col-md-6">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad6c95322d33496615ede95d3f607a92e0e07c71994dbad643d55e81dc319f73c&amp;width=580&amp;height=478&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
            <!--/column -->
            <div class="col-md-6 col-md-height">
                <div class="inner-col">
                    <div class="section-title bm20">
                        <h3>Напишите нам</h3>
                    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                        <div class="alert alert-success">
                            Спасибо что отправили нам сообщение! Мы постараемся как можно быстрее ответить Вам.
                        </div>
                    <?php else: ?>
                        <p> Если у вас возникли вопросы вы можете написать нам и мы Вам ответим. </p>
                    </div>
                    <div class="form-container">
                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                        <?= $form->field($model, 'email') ?>
                        <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ]) ?>
                        <div class="form-group">
                            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                    <!--/.form-container -->
                    <?php endif; ?>
                </div>
                <!--/.inner-col -->
            </div>
            <!--/column -->
        </div>
        <!--/.row-same-height -->
    </div>
    <!--/.row -->
</div>