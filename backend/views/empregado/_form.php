<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\TipoEquipa;

/* @var $this yii\web\View */
/* @var $model common\models\CreateEmpregado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empregado-form">

    <?php $form = ActiveForm::begin(['id' => 'create-empregado']); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'email') ?>

    <?=
    $form->field($model, 'id_equipa')->dropDownList(ArrayHelper::map(TipoEquipa::find()->all(),
        'id','nome'),['prompt'=>'Selecione um tipo']);
    ?>

    <?= $form->field($model, 'n_empregado')->textInput() ?>

    <?= $form->field($model, 'salario')->textInput() ?>

    <?= $form->field($model, 'horas')->textInput() ?>

    <?= $form->field($model, 'horario')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
