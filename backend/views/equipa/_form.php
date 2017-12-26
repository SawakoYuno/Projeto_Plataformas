<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\TipoEquipa;


/* @var $this yii\web\View */
/* @var $model common\models\Equipa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equipa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?=
        $form->field($model, 'id_tipo_equipa')->dropDownList(ArrayHelper::map(TipoEquipa::find()->all(),
        'id','tipo'),['prompt'=>'Selecione um tipo']);
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
