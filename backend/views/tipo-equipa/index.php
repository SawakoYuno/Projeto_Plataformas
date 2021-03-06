<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo Equipas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-equipa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Criar Tipo Equipa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Tipo de equipas</h3>
        </div>
        <div class="panel-body">
            <table class="table">
                <tr>
                    <th>Nome</th>
                    <th>Destalhes</th>
                </tr>
                <?php
                foreach ($tipoequipas as $tipoequipa) {
                    ?>
                    <tr>
                        <td>  <?= $tipoequipa->tipo;?></td>
                        <td>  <?= $tipoequipa->detalhes;?></td>
                        <td>
                            <a href="<?=Url::toRoute(['tipo-equipa/update', 'id'=>$tipoequipa->id])?>" title="Atualizar" aria-label="Atualizar" data-pjax="0">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                            <a href="<?=Url::toRoute(['tipo-equipa/delete', 'id'=>$tipoequipa->id])?>" title="Apagar" aria-label="Apagar" data-pjax="0"
                               data-confirm="Are you sure you want to delete this item?" data-method="post">
                                <span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
                <?php }?>
            </table>
        </div>
    </div>
</div>
