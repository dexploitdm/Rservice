<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\RunAsset;
use app\components\FBFWidget;
use app\components\FooterWidget;

RunAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="full-layout">
<?php $this->beginBody() ?>
<div class="content-wrapper">
    <div class="navbar navbar-default default header2" role="navigation">
        <div class="top-bar">
            <div class="container">
                <ul class="info">
                    <li><i class="icon-mail"></i> <a href="mailto:rservice@yandex.ru" class="email-link">rservice@yandex.ru</a></li>
                    <li><i class="icon-phone-1"></i>+7(952) 645 60 13</li>
                </ul>
                <!-- /.info -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.top-bar -->
        <div class="container boxed">
            <div class="navbar-header">
                <div class="navbar-brand"><a href="/"><img src="/web/style/images/logo.png" set="/style/images/logo.png 1x, /style/images/logo@2x.png 2x" alt="" /></a></div>
                <div class="nav-bars-wrapper">
                    <div class="nav-bars-inner">
                        <div class="nav-bars" data-toggle="collapse" data-target=".navbar-collapse"><span></span></div>
                    </div>
                    <!-- /.nav-bars-inner -->
                </div>
                <!-- /.nav-bars-wrapper -->

            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/">Главная </a>
                    </li>
                    <li><a href="/site/about/">О компании </a>

                    </li>
                    <li><a href="#!">Услуги <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><?= \app\components\MenuWidget::widget(['tpl'=>'menu'])?></li>
                        </ul>
                    </li>
                    <li><a href="/site/cena/">Цены </li>
                    <li><a href="/site/zovs/">Отзывы </li>
                    <li><a href="/site/contact/">Контакты </li>

                    <?php if(Yii::$app->user->isGuest): ?>
                    <li><a href="<?= Url::toRoute(['auth/login']) ?>">Вход</a></li>
                    <?php else: ?>
                    <li><a href="<?= Url::toRoute(['/auth/logout']) ?>">Выход(<?= Yii::$app->user->identity->name ?>)</a></li>
                    <?php endif; ?>

                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!--/.nav-collapse -->

        </div>
        <!--/.container -->
    </div>

<?= $content ?>
    <a href="#" id="popup__toggle" data-toggle="modal" data-target="#myModal" onclick="return false;">
        <div class="circlephone" style="transform-origin: center;"></div>
        <div class="circle-fill" style="transform-origin: center;"></div>
        <div class="img-circle" style="transform-origin: center;">
            <div class="img-circleblock" style="transform-origin: center;"></div>
        </div>
    </a>
    <footer class="footer inverse-wrapper">
        <div class="container inner2">
            <div class="row">
                <div class="col-sm-3">
                    <div class="widget"> <img src="/web/style/images/logo_footer.png" alt="Rservice | Ремонт автомобилей в Перми" />
                        <div class="divide20"></div>
                        <p>Пока мастера занимаются вашим автомобилем, вы можете провести время с
                            комфортом в клиентской зоне за чашкой чая или кофе с телевизором и бесплатным Wi-Fi. <i class="icon-signal"></i></p>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-sm-3">
                    <div class="widget">
                        <?= FooterWidget::widget([]) ?>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Перечень наших услуг</h4>
                        <ul class="tag-list">
                            <li> <?= \app\components\MenuWidget::widget(['tpl'=>'menu_foot'])?> </li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- .container -->
        <div class="sub-footer">
            <div class="container inner3">
                <p class="text-center">© <?php echo date('Y') ?> RService. Сайт разработан <i class="icon-magnet"></i><a href="http://dexploitdm.ru">DexploitDm</a>.</p>
            </div>
            <!-- .container -->
        </div>
        <!-- .sub-footer -->
    </footer>
</div>
<?= FBFWidget::widget([]) ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
