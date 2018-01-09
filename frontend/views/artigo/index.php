<?php

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

    <h1><strong>Entradas</strong></h1>


    <?php
    $artigos = Artigo::find()
        ->join('JOIN', 'tipo_artigo', 'tipo_artigo.id = artigo.id_tipo_artigo')
        ->where('artigo.id_tipo_artigo =1')
        ->all();
    ?>


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

    <h1><strong>Carnes</strong></h1>


    <?php
    $artigos = Artigo::find()
        ->join('JOIN', 'tipo_artigo', 'tipo_artigo.id = artigo.id_tipo_artigo')
        ->where('artigo.id_tipo_artigo =2')
        ->all();



    ?>


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


    <?php
    $artigos = Artigo::find()
        ->join('JOIN', 'tipo_artigo', 'tipo_artigo.id = artigo.id_tipo_artigo')
        ->where('artigo.id_tipo_artigo =3')
        ->all();



    ?>


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
    <?php
    $artigos = Artigo::find()
        ->join('JOIN', 'tipo_artigo', 'tipo_artigo.id = artigo.id_tipo_artigo')
        ->where('artigo.id_tipo_artigo =4')
        ->all();
    ?>


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


    <?php
    $artigos = Artigo::find()
        ->join('JOIN', 'tipo_artigo', 'tipo_artigo.id = artigo.id_tipo_artigo')
        ->where('artigo.id_tipo_artigo =5')
        ->all();
    ?>


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
