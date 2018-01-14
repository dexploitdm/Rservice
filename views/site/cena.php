<?php

/* @var $this yii\web\View */

use app\components\BannerCenaWidget;
use yii\helpers\Html;

$this->title = 'Цены';
$this->params['breadcrumbs'][] = $this->title;
?>


<?php

?>
<div class="light-wrapper">
    <div class="container inner">
        <div class="section-title text-center"></div>
<?php foreach ($price as $cena): ?>
        <div class="section-title text-center">
            <h1><?= $cena->title; ?></h1>
        </div>
<?php endforeach; ?>
        <div class="light-wrapper">
            <div class="container inner2">
                <div class="blog grid-view col2 row">
                    <div class="col-sm-8 col-sm-push-4 blog-content">
                        <div class="post-content">
                            <p><?= $cena->content; ?></p>
                        </div>
                    </div>
                    <!-- /.blog-content -->
                    <aside class="col-sm-4 col-sm-pull-8 sidebar left-sidebar">
                        <?= BannerCenaWidget::widget([]) ?>
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