<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<section id="container" class="">
<header class="header dark-bg">
    <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>

    <!--logo start-->
    <a href="<?=Url::toRoute(['site/index'])?>" class="logo">Vanilla</a>

    <!--logo end-->

    <div class="nav search-row" id="top_menu">

    </div>

    <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                              <span class="profile-ava">
                                 <i class="icon_profile"></i>
                              </span>
                    <span class="username"><?= Yii::$app->user->getIdentity()->username?></span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li class="eborder-top">
                        <a href="#"><i class="icon_profile"></i> My Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                    </li>
                    <li>
                        <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                    </li>
                    <li>
                        <a href="<?=Url::toRoute(['site/logout'])?>" data-method="post"><i class="icon_key_alt"></i> Log Out</a>
                    </li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
    </div>
</header>


<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="active">
                <a class="" href="<?=Url::toRoute(['site/index'])?>">
                    <i class="icon_house_alt"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>Artigos</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="<?=Url::toRoute(['tipo-artigo/index'])?>">Tipo de Artigos</a></li>
                    <li><a class="" href="<?=Url::toRoute(['artigo/index'])?>">Artigos</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_profile"></i>
                    <span>Utilizadores</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="<?=Url::toRoute(['empregado/index'])?>">Empregados</a></li>
                    <li><a class="" href="<?=Url::toRoute(['site/index'])?>">Clientes</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_profile"></i>
                    <span>Equipas</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="<?=Url::toRoute(['equipa/index'])?>">Equipas de Empregados</a></li>
                    <li><a class="" href="<?=Url::toRoute(['tipo-equipa/index'])?>">Tipo de Equipas</a></li>

                </ul>
            </li>
            <li>
                <a class="" href="chart-chartjs.html">
                    <i class="icon_piechart"></i>
                    <span>Charts</span>

                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>

<!--sidebar end-->
<section id="main-content">
    <section class="wrapper">
    <?= $content ?>
    </section>
</section>
</section>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>



