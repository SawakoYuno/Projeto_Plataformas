<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">


<div class="container">
    <?php $form = ActiveForm::begin(['id'=> 'backend-login','options' => ['class' => 'login-form']]); ?>
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
                <?= $form->field($model, 'username')
                    ->textInput(['class' => 'form-control', 'placeholder' => 'Utilizador'])
                    ?>
                <?= $form->field($model, 'password')
                    ->passwordInput(['class' => 'form-control', 'placeholder' => 'Palavra-passe'])
                    ?>
                <div class="form-group">
                    <?= Html::submitButton('Entrar', ['class' => 'btn btn-info btn-lg btn-block', 'name' => 'login-button']) ?>
                </div>
        </div>
    <?php ActiveForm::end(); ?>
</div>
</div>





