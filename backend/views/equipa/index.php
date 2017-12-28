<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\TipoEquipa;
use common\models\Equipa;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Equipas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equipa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Equipa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Tipos de Artigo</h3>
        </div>
        <div class="panel-body">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Tipo Equipa</th>
                    <th>Nome</th>
                </tr>
                <?php
                $equipas = Equipa::find()->all();
                foreach ($equipas as $equipa) {
                    $tipoequipa = TipoEquipa::find()
                        ->where(['id' => $equipa->id_tipo_equipa])
                        ->one();
                    ?>
                        <tr>
                            <td>  <?= $equipa->id;?></td>
                            <td>  <?= $tipoequipa->tipo;?></td>
                            <td>  <?= $equipa->nome;?></td>
                            <td>
                                <a href="<?=Url::toRoute(['artigo/update', 'id'=>$equipa->id])?>" title="Atualizar" aria-label="Atualizar" data-pjax="0">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                <a href="<?=Url::toRoute(['artigo/delete', 'id'=>$equipa->id])?>" title="Apagar" aria-label="Apagar" data-pjax="0"
                                   data-confirm="Are you sure you want to delete this item?" data-method="post">
                                    <span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
                    <?php }?>
            </table>
        </div>
    </div>
</div>