<?php

namespace app\controllers;

use app\models\About;
use app\models\Banner;
use app\models\Catalog;
use app\models\Cena;
use app\models\ElementInfo;
use app\models\Info;
use app\models\Slider;
use app\models\Zovs;
use app\models\ZovsForm;
use app\models\ZvonForm;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $infor = Yii::$app->cache->get('infor');
        if(!$infor){
            $modelInfo = new Info();
            $infor = $modelInfo::find()->all();
            Yii::$app->cache->set('infor', $infor, 3600);
        }

        $sliders = Yii::$app->cache->get('sliders');
        if(!$sliders){
            $modelInfo = new Slider();
            $sliders = $modelInfo::find()->all();
            Yii::$app->cache->set('sliders', $sliders, 3600);
        }

        $cat = Yii::$app->cache->get('cat');
        if(!$cat){
            $modelCategory = new Catalog();
            $cat = $modelCategory::find()->all();
            Yii::$app->cache->set('cat', $cat, 3600);
        }
        $elementinfo = ElementInfo::getAll();

        return $this->render('index',[
            'cat'=> $cat,
            'infor' => $infor,
            'elementinfo'=> $elementinfo,
            'sliders'=> $sliders,
        ]);
    }

    public function actionCatalog($id)
    {
        $data = Catalog::getPrByCatalog($id);
        $cat = Catalog::getAll();

        return $this->render('catalog', [
            'products'=>$data['products'],
            'cat'=> $cat,
        ]);
    }
    public function actionView($id)
    {

        $cat = Catalog::findOne($id);
        return $this->render('single',[
            'cat'=> $cat,
        ]);
    }


    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        $ab = About::getAll();

        return $this->render('about',[
            'ab'=>$ab,
        ]);

    }

    public function actionCena()
    {
        $price = Cena::getAll();

        $cen = Banner::find()->where(['cen' => '1'])->all();


        return $this->render('cena',[
            'price'=>$price,
            'cen'=>$cen,
        ]);
    }

    public function actionZovs()
    {
        $zovsForm = new ZovsForm();
        $zovs = Zovs::find()->where(['status'=>'1'])->limit(10)->all();

        if(Yii::$app->request->isPost)
        {
            $zovsForm->load(Yii::$app->request->post());
            if($zovsForm->saveZovs())
            {
                Yii::$app->getSession()->setFlash('zovs', 'Ваш отправлен. Ожидайте одобрения на публикацию');
                return $this->redirect(['/site/zovs/']);
            }
        }
        return $this->render('zovs',[
            'zovs'=>$zovs,
            'zovsForm'=>$zovsForm
        ]);
    }

    public function actionNumber()
    {
        $model = new ZvonForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactNumberSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }
}
