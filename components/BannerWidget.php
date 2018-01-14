<?php

namespace app\components;

use app\models\Banner;
use Yii;
use yii\base\Widget;


class BannerWidget extends Widget{

    public function run()
    {

        $ban = Banner::find()->where(['usl' => '1'])->all();

        return $this->render('banWidget', [
            'ban' => $ban,
        ]);
    }
}

?>