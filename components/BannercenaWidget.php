<?php
namespace app\components;

use app\models\Banner;
use Yii;
use yii\base\Widget;




class BannercenaWidget extends Widget
{
    public function run()
    {


        $cen = Banner::find()->where(['cen' => '1'])->all();

        return $this->render('banCenWidget', [
            'cen'=>$cen

        ]);
    }

}