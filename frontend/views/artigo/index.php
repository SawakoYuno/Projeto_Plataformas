<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Artigo;
use common\models\TipoArtigo;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Artigos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="artigo-index">
    <?php
    Modal::begin([
            'header'=>"<h4 id ='nome'></h4>",
            'id' => 'modal',
        'closeButton' => [
            'label' => 'Close',
            'class' => 'btn btn-danger btn-sm pull-right',
        ],
        'size' => 'modal-md',
    ]);
    ?>
    <div align="center">
    <?= Html::img('', ['id' => 'imagem', 'class' =>'imagem-detalhes'])?>
    </div>
    <div id="preco"></div>
    <div id="detalhes"></div>
    <?php
    Modal::end();
    ?>
    <h1><strong>Entradas</strong></h1>

    <div class="row">
        <?php
        foreach ($artigos as $artigo) {
            if ($artigo->idTipoArtigo->id == 1){
        ?>
        <div class="col-6 col-md-4">
          <a href="javacript:" class="view-artigo" data-link="<?=Url::toRoute(['artigo/detalhes'])?>" data-id="<?= $artigo->id ?>">
              <?= Html::img('/Projeto_Plataformas/images/artigos/'. $artigo->imagem_artigo, ['id' => 'imagem-ementa'])?>
          </a>
            <div id="textoImgEmenta"><?= $artigo->nome;?></div>
        </div>
        <?php }}?>
    </div>



    <h1><strong>Carnes</strong></h1>
    <div class="row">
        <?php
        foreach ($artigos as $artigo) {
            $tipoartigo = TipoArtigo::find()
                ->where(['id' => $artigo->id_tipo_artigo])
                ->one();
            ?>
            <div class="col-6 col-md-4">

                <?= Html::img('/Projeto_Plataformas/images/artigos/'. $artigo->imagem_artigo, ['id' => 'imagem-ementa'])?>


                <div id="textoImgEmenta"><?= $artigo->nome;?></div>

            </div>
        <?php }?>

    </div>

    <h1><strong>Peixes</strong></h1>





    <div class="row">
        <?php
        foreach ($artigos as $artigo) {
            $tipoartigo = TipoArtigo::find()
                ->where(['id' => $artigo->id_tipo_artigo])
                ->one();
            ?>
            <div class="col-6 col-md-4">

                <?= Html::img('/Projeto_Plataformas/images/artigos/'. $artigo->imagem_artigo, ['id' => 'imagem-ementa'])?>


                <div id="textoImgEmenta"><?= $artigo->nome;?></div>

            </div>
        <?php }?>

    </div>

    <h1><strong>Sobremesas</strong></h1>



    <div class="row">
        <?php
        foreach ($artigos as $artigo) {
            $tipoartigo = TipoArtigo::find()
                ->where(['id' => $artigo->id_tipo_artigo])
                ->one();
            ?>
            <div class="col-6 col-md-4">

                <?= Html::img('/Projeto_Plataformas/images/artigos/'. $artigo->imagem_artigo, ['id' => 'imagem-ementa'])?>

                <div id="textoImgEmenta"><?= $artigo->nome;?></div>
            </div>
        <?php }?>
    </div>
    <h1><strong>Sopas</strong></h1>


    <div class="row">
        <?php
        foreach ($artigos as $artigo) {
            $tipoartigo = TipoArtigo::find()
                ->where(['id' => $artigo->id_tipo_artigo])
                ->one();
            ?>
            <div class="col-6 col-md-4">

                <?= Html::img('/Projeto_Plataformas/images/artigos/'. $artigo->imagem_artigo, ['id' => 'imagem-ementa'])?>


                <div id="textoImgEmenta"><?= $artigo->nome;?></div>

            </div>
        <?php }?>

    </div>


</div>
