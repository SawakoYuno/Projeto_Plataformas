<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TipoEquipa */

$this->title = 'Update Tipo Equipa: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Equipas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-equipa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
