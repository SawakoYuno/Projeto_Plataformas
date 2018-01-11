<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PedidosEmArtigo */

$this->title = $model->id_artigo;
$this->params['breadcrumbs'][] = ['label' => 'Pedidos Em Artigos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedidos-em-artigo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_artigo' => $model->id_artigo, 'id_pedidos' => $model->id_pedidos], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_artigo' => $model->id_artigo, 'id_pedidos' => $model->id_pedidos], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_artigo',
            'id_pedidos',
            'obs',
        ],
    ]) ?>

</div>
