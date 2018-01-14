<?php
namespace app\components;

use app\models\Banner;
use Yii;
use yii\base\Widget;

class BannerAboutWidget extends Widget
{
    public function run()
    {

        $ab = Banner::find()->where(['ab' => '1'])->all();

        return $this->render('banAbWidget', [
            'ab'=> $ab
        ]);
    }

}