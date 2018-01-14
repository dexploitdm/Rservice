<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Rservice';
?>

<div class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider" data-version="5.0">
        <ul>
            <?php foreach($sliders as $slider): ?>
            <?php
             $img = $slider->getImage();
            ?>
            <li data-transition="fade"> <?= Html::img($img->getUrl(),['alt'=> '']) ?>
                <div class="tp-caption large text-center"
                     data-x="center"
                     data-hoffset=""
                     data-y="center"  data-voffset="-10"
                     data-width="['auto','auto','auto','auto']"
                     data-height="['auto','auto','auto','auto']"
                     data-transform_idle="o:1;"
                     data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1300;e:Power2.easeOut;"
                     data-transform_out="s:1300;e:Power3.easeInOut;s:1300;e:Power3.easeInOut;"
                     data-start="1200"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"
                     style="z-index: 9; white-space: nowrap; font-size: 50px; line-height: 50px;"><?= $slider->title; ?></div>
                <div class="tp-caption medium text-center"
                     data-x="center"
                     data-hoffset=""
                     data-y="center"
                     data-voffset="50"
                     data-width="['auto','auto','auto','auto']"
                     data-height="['auto','auto','auto','auto']"
                     data-transform_idle="o:1;"
                     data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1300;e:Power2.easeOut;"
                     data-transform_out="s:1300;e:Power3.easeInOut;s:1300;e:Power3.easeInOut;"
                     data-start="1700"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"
                     style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 25px;"><?= $slider->content; ?></div>
                <div class="tp-caption medium text-center"
                     data-x="center"
                     data-hoffset=""
                     data-y="center"
                     data-voffset="115"
                     data-width="['auto','auto','auto','auto']"
                     data-height="['auto','auto','auto','auto']"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1300;e:Power4.easeInOut;"
                     data-transform_out="s:1300;e:Power3.easeInOut;s:1300;e:Power3.easeInOut;"
                     data-start="2200"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"
                     style=""> <a href="#" class="btn" data-toggle="modal" data-target="#myModal" onclick="return false;">Заказать звонок</a></div>
            </li>
            <?php endforeach; ?>

        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
    </div>
    <!-- /.rev_slider -->
</div>
<!-- /.rev_slider_wrapper -->

<div class="light-wrapper">
    <div class="container inner">
        <div class="section-title text-center">
            <h3>Наши услуги</h3>
        </div>
        <div class="row">

        <?php foreach($cat as $catalog): ?>
            <?php
            $mainImg = $catalog->getImage();
            ?>
            <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="feature">
                    <div class="icon icon-m"> <?= Html::img($mainImg->getUrl(),['alt'=> $catalog->title]) ?> </div>
                    <h4><a href="">
                            <?= $catalog->title; ?></a></h4>
                    <p><?= $catalog->description; ?></p>
                </div>
                <!--/.feature -->
            </div>
            <!--/column -->
        <?php endforeach; ?>

        </div>
        <!--/.row -->

    </div>
    <!-- /.container -->
</div>
<!-- /.light-wrapper -->


<div class="inverse-wrapper">
    <div class="container inner">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-center wow fadeIn" data-wow-duration="1s">
                <?php foreach($infor as $info): ?>
                    <?php
                    $img = $info->getImage();
                    ?>
                <figure><?= Html::img($img->getUrl(),['alt'=> $info->title]) ?> </figure>
                <?php endforeach; ?>
            </div>
            <!--/column -->
            <div class="col-md-6 col-sm-12">
                <div class="divide40"></div>
                <div class="section-title">
                    <?php foreach($infor as $info): ?>
                        <h3><?= $info->title; ?></h3>
                        <p class="lead"><?= $info->description; ?></p>
                    <?php endforeach; ?>
                </div>
                <div class="row wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                    <?php foreach($elementinfo as $element): ?>
                      <?php  $img = $element->getImage(); ?>
                    <div class="col-sm-6">
                        <div class="feature feature-s" style="text-align: center">
                            <div class="icon icon-s"> <?= Html::img($img->getUrl(),['alt'=> $element->name]) ?> </div>
                            <h4><?= $element->name; ?></h4>
                            <p style="text-align: center"><?= $element->content; ?></p>
                        </div>
                        <!--/.feature -->
                    </div>
                   <?php endforeach; ?>

                </div>
                <!--/.row -->
                <div class="divide10"></div>
            </div>
            <!--/column -->

        </div>
        <!--/.row -->
    </div>
    <!--/.container -->
</div>
<!--/.inverse-wrapper -->
