<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Banner */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Banners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
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
        $img = $model->getImage();
        $gallery = $model->getImages();

        $img_str='';
        foreach($gallery as $img2){
            $img_str.='<a class="fancybox img-thumbnail" rel="gallery1">'.Html::img($img2->getUrl('84x85'), ['alt' => '']).'</a>';
        }
        ?> <?php
        $img = $model->getImage();
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
            'title',
            [
                'attribute' => 'image',
                'value' =>  $img_str,
                'format' => 'html',
            ],
            [
                'attribute'=>'ab',
                'value'=> function($data){
                    //Если не находит хит, то...
                    return !$data->ab ? '<span class="text-danger">Нет</span>' :
                        '<span class="text-success">Да</span>';
                },
                'format' => 'html',
            ],
            [
                'attribute'=>'cen',
                'value'=> function($data){
                    //Если не находит новинки, то...
                    return !$data->cen ? '<span class="text-danger">Нет</span>' :
                        '<span class="text-success">Да</span>';
                },
                'format' => 'html',
            ],
            [
                'attribute'=>'usl',
                'value'=> function($data){
                    //Если не находит распродажи, то...
                    return !$data->usl ? '<span class="text-danger">Нет</span>' :
                        '<span class="text-success">Да</span>';
                },
                'format' => 'html',
            ],
        ],
    ]) ?>

</div>
