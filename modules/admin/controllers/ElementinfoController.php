<?php

namespace app\modules\admin\controllers;

use app\models\ImageUpload;
use Yii;
use app\models\Elementinfo;
use app\models\ElementinfoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ElementinfoController implements the CRUD actions for Elementinfo model.
 */
class ElementinfoController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new ElementinfoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Elementinfo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Elementinfo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $model->image = UploadedFile::getInstance($model, 'image');
            if ($model->image){
                $model->upload();
            }
            unset($model->image);

            $model->gallery = UploadedFile::getInstances($model, 'gallery');
            $model->uploadGallery();

            Yii::$app->session->setFlash('success', "Услуга обновлен");
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionDeleteimg($id_reshenie, $id_img)
    {
        $reshenie = Elementinfo::find()
            ->where(['id' => $id_reshenie])
            ->one();

        $images = $reshenie->getImages();
        foreach($images as $img){
            if($img->id==$id_img){
                $reshenie->removeImage($img);
            }
        }
        $success=true;
        return $this->redirect(['update', 'id' => $reshenie->id]);
    }
}
