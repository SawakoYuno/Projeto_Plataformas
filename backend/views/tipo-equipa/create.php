<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TipoEquipa */

$this->title = 'Create Tipo Equipa';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Equipas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-equipa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
