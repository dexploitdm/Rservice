<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Banner */

$this->title = 'Создание баннера';
$this->params['breadcrumbs'][] = ['label' => 'Banners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<header class="top-head container-fluid">
    <button type="button" class="navbar-toggle pull-left">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</header>
<!-- Header Ends -->


<div class="warper container-fluid">

    <div class="page-header"><h1><?= Html::encode($this->title) ?><small></small></h1></div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
