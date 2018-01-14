<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Отзывы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="light-wrapper">
    <p class="container inner">
    <div class="section-title text-center"></div>


    <section class="latest-news blog blog-single padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div>
                        <h2>Отзывы о нашем сервисе  </h2>
                    </div>
                    <div class="comments">

                        <?php if(!empty($zovs)): ?>
                            <?php foreach($zovs as $zov ): ?>


                                    <div class="feature">
                                        <div class="icon icon-m"><img class="media-object"src="<?= $zov->user->image;?>" alt=""> </div>
                                        <h4><a href="">
                                                <?= $zov->user->name; ?></a></h4><i><?= $zov->getDate();?></i>
                                        <p><?= $zov->text; ?></p>
                                    </div>
                                    <!--/.feature -->



                            <?php endforeach; ?>
                        <?php endif; ?>

                        <?php if(!Yii::$app->user->isGuest):?>
                            <div class="leave-comment"><!--leave comment-->
                                <h4>Написать отзыв</h4>
                                <?php if(Yii::$app->session->getFlash('zovs')):?>
                                    <div class="alert alert-success" role="alert">
                                        <?= Yii::$app->session->getFlash('zovs'); ?>
                                    </div>
                                <?php endif;?>


                                <?php $form = \yii\widgets\ActiveForm::begin([
                                    'action'=>['site/zovs'],
                                    'options'=>['class'=>'form-horizontal contact-form', 'role'=>'form']])?>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <?= $form->field($zovsForm, 'zovs')->textarea(['class'=>'form-control','placeholder'=>'Написать сообщение'])->label(false)?>
                                    </div>
                                </div>
                                <button type="submit" class="btn send-btn">Отправить</button>
                                <?php \yii\widgets\ActiveForm::end();?>
                            </div><!--end leave comment-->
                        <?php else : ?>
                            <div class="alert alert-success"><!--leave comment-->
                                <h6>Добавить отзыв могут только авторизованные пользователи</h6>
                            </div>
                        <?php endif; ?>
						
						<!-- Put this script tag to the <head> of your page -->

                    </div>
                </div>
            </div>
        </div>
</div>
</section>

</div>
</div>
