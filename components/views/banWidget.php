<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>
<div class="sidebox widget">
    <?php foreach($ban as $banner): ?>
    <?php  $img = $banner->getImage(); ?>
    <!--<h3 class="widget-title">Баннер<?= $banner->title;  ?></h3>-->
    <div class="icon icon-s"> <?= Html::img($img->getUrl(),[
            'alt'=> $banner->title,
            'style' => 'width: 390px; height: 300px']) ?> </div>
    <?php endforeach; ?>
</div>