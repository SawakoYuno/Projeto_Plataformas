<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Equipa */

$this->title = 'Create Equipa';
$this->params['breadcrumbs'][] = ['label' => 'Equipas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equipa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
