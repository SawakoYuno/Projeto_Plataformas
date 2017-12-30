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

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Artigo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Tipos de Artigo</h3>
        </div>
        <div class="panel-body">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Tipo Artigo</th>
                    <th>Nome</th>
                    <th>Destalhes</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Img</th>

                </tr>
                <?php
                $artigos = Artigo::find()->all();

                foreach ($artigos as $artigo) {
                    $tipoartigo = TipoArtigo::find()
                        ->where(['id' => $artigo->id_tipo_artigo])
                        ->one();
                    ?>
                    <tr>
                        <td>  <?= $artigo->id;?></td>
                        <td>  <?= $tipoartigo->nome;?></td>
                        <td>  <?= $artigo->nome;?></td>
                        <td>  <?= $artigo->detalhes;?></td>
                        <td>  <?= $artigo->preco;?></td>
                        <td>  <?= $artigo->quantidade;?></td>
                        <td> <?= Html::img('/Projeto_Plataformas/images/artigos/'. $artigo->imagem_artigo, ['id' => 'imagem-teste']);?></td>

                        <td>
                            <a href="<?=Url::toRoute(['artigo/update', 'id'=>$artigo->id])?>" title="Atualizar" aria-label="Atualizar" data-pjax="0">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                            <a href="<?=Url::toRoute(['artigo/delete', 'id'=>$artigo->id])?>" title="Apagar" aria-label="Apagar" data-pjax="0"
                               data-confirm="Are you sure you want to delete this item?" data-method="post">
                                <span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
                <?php }?>
            </table>
        </div>
    </div>
</div>
