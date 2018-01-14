<?php
namespace app\modules\admin\controllers;

use app\models\Otzyv;
use yii\web\Controller;

class OtzyvController extends Controller
{
    public function actionIndex()
    {
        $otzyv = Otzyv::find()->all();
        return $this->render('index',['otzyv'=>$otzyv]);
    }

    public function actionDelete($id)
    {
        $zovs = Otzyv::findOne($id);
        if($zovs->delete())
        {
            return $this->redirect(['otzyv/index']);
        }
    }

    public function actionAllow($id)
    {
        $zovs = Otzyv::findOne($id);
        if($zovs->allow())
        {
            return $this->redirect(['index']);
        }
    }
    public function actionDisallow($id)
    {
        $zovs = Otzyv::findOne($id);
        if($zovs->disallow())
        {
            return $this->redirect(['index']);
        }
    }
}

?>