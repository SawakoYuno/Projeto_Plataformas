<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Equipa;

/* @var $this yii\web\View */
/* @var $model common\models\CreateEmpregado */
/* @var $form yii\bootstrap\ActiveForm */

?>

<div class="CreateEmpregado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'email') ?>

    <?=
        $form->field($model, 'id_equipa')->dropDownList(ArrayHelper::map(Equipa::find()->all(),
        'id','nome'),['prompt'=>'Selecione um tipo']);
    ?>

    <?= $form->field($model, 'n_empregado')->textInput() ?>

    <?= $form->field($model, 'salario')->textInput() ?>

    <?= $form->field($model, 'horas')->textInput() ?>

    <?= $form->field($model, 'horario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Criar Empregado', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
