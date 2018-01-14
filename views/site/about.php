<?php

/* @var $this yii\web\View */

use app\components\BannerAboutWidget;
use yii\helpers\Html;

$this->title = 'О Компании';
$this->params['breadcrumbs'][] = $this->title;
?>


<?php

?>
<div class="light-wrapper">
    <div class="container inner">
        <div class="section-title text-center"></div>
        <?php foreach ($ab as $about): ?>
            <div class="section-title text-center">
                <h1><?= $about->title; ?></h1>
            </div>
        <?php endforeach; ?>
                <div class="blog grid-view col2 row">
                    <div class="col-sm-8 col-sm-push-4 blog-content">
                        <div class="post-content">
                            <p><?= $about->content; ?></p>
                        </div>
                    </div>
                    <!-- /.blog-content -->
                    <aside class="col-sm-4 col-sm-pull-8 sidebar left-sidebar">
                        <?= BannerAboutWidget::widget([]) ?>

                    </aside>
                    <!-- /column .sidebar -->
                </div>
                <!-- /.blog -->

        <!--/.row -->
    </div>
    <!-- /.container -->
</div>


