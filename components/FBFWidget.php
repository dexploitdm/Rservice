<?php

namespace app\components;

use app\models\ZvonForm;
use Yii;
use yii\base\Widget;


class FBFWidget extends Widget
{

    public function run()
    {
        $model = new ZvonForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactNumberSubmitted');
        }
        return $this->render('fbfWidget', [
            'model' => $model,
        ]);
    }

}