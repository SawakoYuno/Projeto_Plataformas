<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PedidosEmArtigo */

$this->title = 'Update Pedidos Em Artigo: ' . $model->id_artigo;
$this->params['breadcrumbs'][] = ['label' => 'Pedidos Em Artigos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_artigo, 'url' => ['view', 'id_artigo' => $model->id_artigo, 'id_pedidos' => $model->id_pedidos]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pedidos-em-artigo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
