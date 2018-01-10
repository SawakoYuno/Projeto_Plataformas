<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\User;
use common\models\Empregado;
use common\models\Equipa;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Empregados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empregado-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Empregado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Empregados</h3>
        </div>
        <div class="panel-body">
            <table class="table">
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Nome</th>
                    <th>Equipa</th>
                    <th>Nº de Empregado</th>
                    <th>Salário</th>
                    <th>Horário</th>

                </tr>
                <?php
                foreach ($empregados as $empregado) {
                    ?>
                        <tr>
                            <td>  <?= $empregado->idUser->username;?></td>
                            <td>  <?= $empregado->email;?></td>
                            <td>  <?= $empregado->nome;?></td>
                            <td>  <?= $empregado->idEquipa->nome;?></td>
                            <td>  <?= $empregado->n_empregado;?></td>
                            <td>  <?= $empregado->salario;?></td>
                            <td>  <?= $empregado->horario;?></td>
                        </tr>
                    <?php }?>
            </table>
        </div>
    </div>
</div>
