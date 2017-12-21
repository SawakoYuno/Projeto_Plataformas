<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Empregado */

$this->title = 'Update Empregado: ' . $model->id_user;
$this->params['breadcrumbs'][] = ['label' => 'Empregados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_user, 'url' => ['view', 'id' => $model->id_user]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="empregado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
