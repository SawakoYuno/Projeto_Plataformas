<?php

use yii\bootstrap\Carousel;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Vanilla';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><strong>Prato do dia</strong></h1>

        <?=Html::img('@web/img/bife_pimenta.jpg');?>
        <p class="lead">Bife com molho de pimenta</p>



        <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
    </div>

    <div class="site-index">


            <div style="text-align: center">
                <h2><strong>Especialidades</strong></h2>
                    <!-- <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p> -->
            </div>
            <div>

                <?=Html::img('@web/img/bife_a_portuguesa.jpg');?>
                <p>Bife à Portuguesa</p>

            </div>
            <div>

                <?=Html::img('@web/img/salmao_grelhado_com_legumes.jpg');?>
                <p>Salmão Grelhado com Legumes</p>
            </div>
            <div>
                <?=Html::img('@web/img/lombinhos_de_porco_preto.jpg');?>
                <p>Lombinhos de Porco Preto</p>
            </div>
    </div>

</div>