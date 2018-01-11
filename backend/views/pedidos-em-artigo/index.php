<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cozinha';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedidos-em-artigo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Pedidos</h3>
        </div>
        <div class="panel-body">
            <table class="table">
                <tr>
                    <th>Artigo</th>
                    <th>Tipo Artigo</th>
                    <th>Mesa</th>
                    <th>Estado</th>
                    <th>Hora</th>

                </tr>
                <?php

                foreach ($pedidosemartigo as $pedidoemartigo) {
                    ?>
                    <tr>
                        <td>  <?= $pedidoemartigo->idArtigo->nome;?></td>
                        <td>  <?= $pedidoemartigo->idArtigo->idTipoArtigo->nome;?></td>
                        <td>  <?= $pedidoemartigo->idPedidos->idMesa->numero;?></td>
                        <td id="estado_<?=$pedidoemartigo->id_pedidos?>">
                            <?php
                            if ($pedidoemartigo->idPedidos->idEstado->tipo == "Por fazer")
                                echo "Por fazer";
                            else
                                echo "A fazer";
                            ?>
                        </td>
                        <td>  <?= $pedidoemartigo->idPedidos->hora_pedido;?></td>
                        <td>
                            <button href="javacript:" class="mudar-afazer btn btn-lg" data-link="<?=Url::toRoute(['pedidos-em-artigo/mudarafazer'])?>"
                                    data-id="<?= $pedidoemartigo->id_pedidos?>">A fazer</button>
                            <button href="javacript:" class="mudar-acabado btn btn-lg" data-link="<?=Url::toRoute(['pedidos-em-artigo/mudaracabado'])?>"
                                    data-id="<?= $pedidoemartigo->id_pedidos?>"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            </button>
                        </td>

                    </tr>
                <?php }?>
            </table>
        </div>
    </div>
</div>
