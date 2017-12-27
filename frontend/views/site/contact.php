<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contactos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        Morada: R.Gen. Norton de Matos, 2411-901
    </p>
    <p>
        Telefone: 249555666
    </p>
    <p><strong>Sócio 1: Joaquim Rodrigues</strong></p>
    <p>
        Email: 2160442@my.ipleiria.pt
    </p>
    <p><strong>Sócio 2: João Filipe Vieira</strong></p>
    <p>
        Email: 2160451@my.ipleiria.pt
    </p>
    <p><strong>Sócio 3: Jéssica Grácio</strong></p>
    <p>
        Email: 2160475@my.ipleiria.pt
    </p>

    <div class="row">
        <div class="col-lg-5">



        </div>
    </div>

</div>
