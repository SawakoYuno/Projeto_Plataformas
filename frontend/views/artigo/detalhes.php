<?php
/**
 * Created by PhpStorm.
 * User: Joaquim
 * Date: 09-01-2018
 * Time: 10:00
 */


use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Artigo;
use common\models\TipoArtigo;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Artigos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="artigo-index">

    <h1><?= Html::encode($this->title) ?></h1>
<?php
$artigos = Artigo::find()
    ->join('JOIN', 'tipo_artigo', 'tipo_artigo.id = artigo.id_tipo_artigo')
    ->where('artigo.id_tipo_artigo =1')
    ->all();



?>
    <div class="row">
<?php
foreach ($artigos as $artigo) {
    $tipoartigo = TipoArtigo::find()
        ->where(['id' => $artigo->id_tipo_artigo])
        ->one();
    ?>
        <div class="col-6 col-md-3">
            <?= Html::img('/Projeto_Plataformas/images/artigos/'. $artigo->imagem_artigo, ['id' => 'imagem-ementa'])?>



        </div>
<?php }?>
        <div class="col-6 col-md-5">
              <?= $artigo->nome;?>
              <?= $artigo->detalhes;?>
              <?= $artigo->preco;?>
        </div>


    </div>
</div>



