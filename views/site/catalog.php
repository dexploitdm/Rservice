<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Rservice | Услуги';
?>

<div class="light-wrapper">
    <div class="container inner">
        <?php foreach($products as $product): ?>
        <div class="section-title text-center">
            <h3><?= $product->catalog->title?></h3>
        </div>
        <?php endforeach; ?>
        <div class="row">


        </div>
        <!--/.row -->

    </div>
    <!-- /.container -->
</div>
<!-- /.light-wrapper -->

