<?php

/* @var $this yii\web\View */

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Artigo;
use common\models\TipoArtigo;
use yii\helpers\Url;

$this-> title = 'Bebidas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
        <?php
        foreach ($artigos as $artigo) {
        if ($artigo->idTipoArtigo->id == 5){
            ?>
            <table>
              <th>  <div class="col-sm-3">
                    <?= Html::img('/Projeto_Plataformas/images/artigos/'. $artigo->imagem_artigo, ['id' => 'imagem-bebida']);?>
                </div>
              </th>
               <th>
                    <div class="col-sm-11">
                    <div id="textobebida">  Nome: <?= $artigo->nome;?></div>
                    <div id="textobebida">  Descrição: <?= $artigo->detalhes;?></div>
                    <div id="textobebida">  Preço:  <?= $artigo->preco;?> €</div>
               </th>
            </table>
        <?php }}?>
</div>

