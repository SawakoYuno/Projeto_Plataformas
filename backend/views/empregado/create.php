<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Empregado */

$this->title = 'Create Empregado';
$this->params['breadcrumbs'][] = ['label' => 'Empregados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empregado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
