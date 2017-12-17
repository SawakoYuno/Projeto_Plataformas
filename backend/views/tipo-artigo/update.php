<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TipoArtigo */

$this->title = 'Update Tipo Artigo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Artigos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-artigo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
