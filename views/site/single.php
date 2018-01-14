<?php

/* @var $this yii\web\View */

use app\components\BannerWidget;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Rservice | Услуги';
?>

<?php
$gallery = $cat->getImages();
?>
<div class="light-wrapper">
    <div class="container inner">
            <div class="section-title text-center"></div>

        <div class="rev_slider_wrapper" style="background-color:transparent; padding:0px;">
            <div id="flow" class="rev_slider fullscreenbanner" data-version="5.0">
                <ul>
                    <?php foreach($cat as $catalog): ?>

                        <?php foreach($gallery as $img): ?>
                            <li data-transition="fade"> <?= Html::img($img->getUrl(),['data-bgposition'=> 'center center']); ?>
                                <div class="tp-caption light-layer"
                                     data-x="center"
                                     data-y="bottom"
                                     data-voffset="0"
                                     data-width="full"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;"
                                     data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                     data-start="0"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5;"></div>
                            </li>
                        <?php endforeach; ?>

                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- /.rev_slider -->
        </div>

            <div class="section-title text-center">
                <h1><?= $cat->title ?></h1>
                <p><?= $cat->description ?></p>
            </div>

        <div class="light-wrapper">
            <div class="container inner2">
                <div class="blog grid-view col2 row">

                    <div class="col-sm-8 col-sm-push-4 blog-content">
                                <div class="post-content">

                                    <p><?= $cat->content ?>
                                    </p>

                                </div>
                    </div>
                    <!-- /.blog-content -->

                    <aside class="col-sm-4 col-sm-pull-8 sidebar left-sidebar">
                        <?= BannerWidget::widget([]) ?>
                        <!-- /.widget -->
                        <div class="sidebox widget">
                            <h3 class="widget-title">Наши услуги</h3>
                            <ul class="tag-list">
                                <li> <?= \app\components\MenuWidget::widget(['tpl'=>'menu_foot'])?> </li>
                            </ul>
                        </div>
                        <!-- /.widget -->
                    </aside>
                    <!-- /column .sidebar -->
                </div>
                <!-- /.blog -->
            </div>
            <!-- /.container -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.light-wrapper -->

