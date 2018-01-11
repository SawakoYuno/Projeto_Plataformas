<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PedidosEmArtigo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedidos-em-artigo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_artigo')->textInput() ?>

    <?= $form->field($model, 'id_pedidos')->textInput() ?>

    <?= $form->field($model, 'obs')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
