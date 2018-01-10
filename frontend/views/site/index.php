<?php

use yii\bootstrap\Carousel;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Vanilla';
?>
<div class="site-index">
<!--  <div class="jumbotron">-->
<!--        <h1><strong>Prato do dia</strong></h1>-->
<!---->
<!--        --><?//=Html::img('@web/img/bife_pimenta.jpg');?>
<!--        <p class="lead">Bife com molho de pimenta</p>-->
<!---->
<!---->
<!---->
<!--        <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
<!--  </div>-->







    <div class="site-index">


            <div style="text-align: center">
                <h2><strong>Especialidades</strong></h2>
                <?php
                echo Carousel::widget([
                    'items' => [

                        ['content'=>  Html::img('@web/img/francesinha.jpg', ['id'=>'imagem-slide'])],
                        ['content'=>  Html::img('@web/img/salmao_grelhado_com_legumes.jpg', ['id' => 'imagem-slide'])],
                        ['content'=>  Html::img('@web/img/lombinhos_de_porco_preto.jpg', ['id' => 'imagem-slide'])],
                    ],
                ]);
                ?>
                    <!-- <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p> -->
            </div>


    </div>

    <div class="col-lg-4">
        <div><?=Html::img('@web/img/a5a03f440abefb39b220a86f9c9b2e74.jpg', ['id' =>'imagem-teste']);?> </div>
        <h1>Pretende degustar de um bom vinho? <?= Html::a('Saiba mais aqui...', ['artigo/bebidas']) ?></h1>
    </div>

</div>