<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Clientes</h3>
        </div>
        <div class="panel-body">
            <table class="table">
                <tr>
                    <th>Email</th>
                    <th>Numero Telefone</th>
                    <th>Morada</th>
                    <th>Nome</th>
                    <th>Estado</th>
                    <th>Ação</th>
                </tr>
                <?php

                foreach ($clientes as $cliente) {
                    ?>
                    <tr>
                        <td>  <?= $cliente->email;?></td>
                        <td>  <?= $cliente->numeroTelefone;?></td>
                        <td>  <?= $cliente->morada;?></td>
                        <td>  <?= $cliente->nome;?></td>
                        <td id="estado_<?=$cliente->id_user?>">
                            <?php
                            if ($cliente->idUser->status == 10)
                                echo "Normal";
                            else
                                echo "Bloqueado";
                            ?>
                        </td>
                        <td>
                            <button href="javacript:" class="bloquear-cliente" data-link="<?=Url::toRoute(['cliente/bloquear'])?>" data-id="<?= $cliente->id_user ?>">Alterar Status</button>
                        </td>
                    </tr>
                <?php }?>
            </table>
        </div>
    </div>
</div>
