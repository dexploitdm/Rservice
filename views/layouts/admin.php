<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
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

<aside class="left-panel">

    <div class="user text-center">
        <img src="assets/images/avtar/user.png" class="img-circle" alt="...">
        <h4 class="user-name">Админ</h4>

        <div class="dropdown user-login">
            <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" aria-expanded="true">
                <i class="fa fa-circle status-icon available"></i> Действия <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" href="/"><i class="fa fa-circle status-icon busy"></i> На сайт</a></li>
                <li role="presentation"><a role="menuitem" href="/auth/logout/"><i class="fa fa-circle status-icon invisibled"></i> Выход</a></li>
            </ul>
        </div>
    </div>



    <nav class="navigation">
        <ul class="list-unstyled">
            <li class="active"><a href="/admin/index/"><i class="fa fa-bookmark-o"></i><span class="nav-label">Главная</span></a></li>
            <li class="has-submenu"><a href="#"><i class="fa fa-comment-o"></i> <span class="nav-label">Элементы главной</span></a>
                <ul class="list-unstyled">
                    <li><a href="<?= Url::toRoute(['/admin/hed/index/']);?>">Шапка</a></li>
                    <li><a href="<?= Url::toRoute(['/admin/foot/index/']);?>">Подвал</a></li>
                    <li><a href="<?= Url::toRoute(['/admin/slider/index/']);?>">Слайдер</a></li>
                </ul>
            </li>
            <li class="has-submenu"><a href="<?= Url::toRoute(['/admin/catalog/index/']);?>"><i class="fa fa-flag-o"></i> <span class="nav-label">Услуги</span></a></li>
            <li class="has-submenu"><a href="<?= Url::toRoute(['/admin/zovs/index/']);?>"><i class="fa fa-file-text-o"></i> <span class="nav-label">Отзывы</span></a></li>
            <li class="has-submenu"><a href="<?= Url::toRoute(['/admin/info/index/']);?>"><i class="fa fa-star-o"></i> <span class="nav-label">Блок Информации</span></a>
                <ul class="list-unstyled">
                    <li><a href="<?= Url::toRoute(['/admin/info/index/']);?>">Баннер и название</a></li>
                    <li><a href="<?= Url::toRoute(['/admin/elementinfo/index/']);?>">Элементы блока</a></li>

                </ul>
            </li>
            <li class="has-submenu"><a href="<?= Url::toRoute(['/admin/banner/index/']);?>"><i class="fa fa-picture-o"></i> <span class="nav-label">Баннеры</span></a>
            </li>
            <li class="has-submenu">
                <a href="<?= Url::toRoute(['/admin/cena/index/']);?>"><i class="fa fa-usd"></i> <span class="nav-label">Раздел Цена</span></a>
            </li>
            <li class="has-submenu">
                <a href="<?= Url::toRoute(['/admin/about/index/']);?>"><i class="fa fa-car"></i> <span class="nav-label">Раздел О компании</span></a>
            </li>
        </ul>
    </nav>

</aside>
<!-- Aside Ends-->

<section class="content">


    <?= $content ?>




    <footer class="container-fluid footer">
        ExploitDm &copy; 2017
        <a href="#" class="pull-right scrollToTop"><i class="fa fa-chevron-up"></i></a>
    </footer>


</section>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
