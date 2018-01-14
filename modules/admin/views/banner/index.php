<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BannerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Баннеры';
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
        <?= Html::a('Создать баннер', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
