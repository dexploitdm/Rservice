<?php

namespace app\components;

use app\models\Foot;
use Yii;
use yii\base\Widget;


class FooterWidget extends Widget{

    public function run()
    {

        $model = Foot::find()->all();

        return $this->render('fooWidget', [
            'model' => $model,
        ]);
    }
}

?>