<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\TipoArtigo;

/* @var $this yii\web\View */
/* @var $model common\models\Artigo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="artigo-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?=
        $form->field($model, 'id_tipo_artigo')->dropDownList(ArrayHelper::map(TipoArtigo::find()->all(),
            'id','nome'),['prompt'=>'Selecione um tipo']);
    ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detalhes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'preco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quantidade')->textInput() ?>

    <?= $form->field($model, 'imagem_artigo')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
