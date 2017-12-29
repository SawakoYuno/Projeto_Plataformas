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

     <?php
    echo Carousel::widget([
        'items' => [

            ['content'=>  Html::img('@web/img/bife_a_portuguesa.jpg', ['id'=>'imagem-slide'])],
            ['content'=>  Html::img('@web/img/salmao_grelhado_com_legumes.jpg', ['id' => 'imagem-slide'])],
            ['content'=>  Html::img('@web/img/lombinhos_de_porco_preto.jpg', ['id' => 'imagem-slide'])],
            ],
    ]);
    ?>





    <div class="site-index">


            <div style="text-align: center">
                <h2><strong>Especialidades</strong></h2>
                    <!-- <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p> -->
            </div>
        <table style="width:80%">

            <tr>
                <td>
                    <?=Html::img('@web/img/bife_a_portuguesa.jpg', ['id' => 'imagem-teste']);?>
                    <p id="texto">Bife à Portuguesa</p>
                </td>
                <td>
                    <?=Html::img('@web/img/salmao_grelhado_com_legumes.jpg', ['id' => 'imagem-teste']);?>
                    <p id="texto">Salmão Grelhado com Legumes</p>
                </td>
                <td>
                    <?=Html::img('@web/img/lombinhos_de_porco_preto.jpg', ['id' => 'imagem-teste']);?>
                    <p id="texto">Lombinhos de Porco Preto</p>
                </td>
            </tr>


            </tr>
        </table>

    </div>

</div>