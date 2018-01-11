<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PedidosEmArtigo */

$this->title = 'Create Pedidos Em Artigo';
$this->params['breadcrumbs'][] = ['label' => 'Pedidos Em Artigos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedidos-em-artigo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
