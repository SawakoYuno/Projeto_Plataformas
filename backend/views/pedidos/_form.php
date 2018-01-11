<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Pedidos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedidos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'id_mesa')->textInput() ?>

    <?= $form->field($model, 'id_estado')->textInput() ?>

    <?= $form->field($model, 'data_pedido')->textInput() ?>

    <?= $form->field($model, 'hora_pedido')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
