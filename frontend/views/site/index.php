<?php
use yii\bootstrap\Carousel;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'Vanilla';
?>
<div class="site-index">
    <div class="site-index">


        <div style="text-align: center">
            <?php
            echo Carousel::widget([
                'items' => [
                    ['content'=>  Html::img('@web/img/francesinha.jpg', ['id'=>'imagem-slide'])],
                    ['content'=>  Html::img('@web/img/salmao_grelhado_com_legumes.jpg', ['id' => 'imagem-slide'])],
                    ['content'=>  Html::img('@web/img/lombinhos_de_porco_preto.jpg', ['id' => 'imagem-slide'])],
                ],
            ]);
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div><?=Html::img('@web/img/a5a03f440abefb39b220a86f9c9b2e74.jpg', ['id' =>'imagem-teste']);?> </div>
            <h5>Pretende degustar de um bom vinho? <?= Html::a('Saiba mais aqui...', ['artigo/bebidas']) ?></h5>
        </div>
        <div class="col-sm-4">
            <!--           segunda imagem-->
        </div>
        <div class="col-sm-4">
            <!--           terceira imagem-->
        </div>
    </div>
    <h5>Pretende degustar de um bom vinho? <?= Html::a('Saiba mais aqui...', ['artigo/bebidas']) ?></h5>
</div>