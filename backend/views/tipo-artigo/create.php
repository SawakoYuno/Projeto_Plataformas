<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TipoArtigo */

$this->title = 'Create Tipo Artigo';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Artigos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-artigo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
