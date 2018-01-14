<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Elementinfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="elementinfo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <div class="form-group">
        <?php
        $gallery = $model->getImages();

        $img_str='';
        echo ' <div class="row">';
        foreach($gallery as $img_g){
            $url_delete=Url::toRoute(['deleteimg', 'id_reshenie' => $model->id, 'id_img' => $img_g->id]); //настройка роутера на нужный урл
            $img_str.='		
		<div class="col-xs-6 col-md-3">
		<div  class="thumbnail reshenie_image_form">
			 <a class="btn delete_reshenie_img" title="Удалить?" href="'.$url_delete.'" data-id="'.$img_g->id.'"><span class="glyphicon glyphicon-remove"></span></a> 
		  <a class="fancybox img-rounded" rel="gallery1" href="'. $img_g->getUrl().'">'.Html::img($img_g->getUrl('200x200'), ['alt' => '']).'</a>
		</div>
		</div> ';
        }
        echo $img_str;
        echo '</div>';
        ?>
        <script>

            $(document).on("click", '.delete_reshenie_img', function (e) {
                e.preventDefault();
                var isTrue = confirm("Удалить изображение?");
                if(isTrue==true){
                    var href=$(this).attr('href');
                    $(this).parent('div').parent('div').remove();
                    $.get( href );
                }
            });
        </script>
    </div>

</div>
