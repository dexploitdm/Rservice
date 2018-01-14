<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Elementinfo */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Elementinfos', 'url' => ['index']];
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


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php

    $gallery = $model->getImages();

    $img_str='';
    foreach($gallery as $img2){
        $img_str.='<a class="fancybox img-thumbnail" rel="gallery1">'.Html::img($img2->getUrl('84x85'), ['alt' => '']).'</a>';
    }
    ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'content:ntext',
            //'image',
            [
                'attribute' => 'image',
                'value' =>  $img_str,
                'format' => 'html',
            ],
        ],
    ]) ?>

</div>
