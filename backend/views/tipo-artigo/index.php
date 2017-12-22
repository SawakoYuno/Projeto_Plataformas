<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\TipoArtigo;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Artigos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-artigo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Criar Tipo Artigo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Tipos de Artigo</h3>
        </div>
        <div class="panel-body">
            <table class="table">
               <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Destalhes</th>
                </tr>
                <?php
                $tipoartigos = TipoArtigo::find()->all();
                foreach ($tipoartigos as $tipoartigo) {
                ?>
                <tr>
                    <td>  <?= $tipoartigo->id;?></td>
                    <td>  <?= $tipoartigo->nome;?></td>
                    <td>  <?= $tipoartigo->detalhes;?></td>
                    <td>
                        <a href="<?=Url::toRoute(['tipo-artigo/update', 'id'=>$tipoartigo->id])?>" title="Atualizar" aria-label="Atualizar" data-pjax="0">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <a href="<?=Url::toRoute(['tipo-artigo/delete', 'id'=>$tipoartigo->id])?>" title="Apagar" aria-label="Apagar" data-pjax="0"
                           data-confirm="Are you sure you want to delete this item?" data-method="post">
                            <span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                </tr>
                <?php }?>
            </table>
        </div>
    </div>
</div>
