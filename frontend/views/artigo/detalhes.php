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


    <div class="row">
        <div class="col-6 col-md-5">.col-6 .col-md-4</div>
        <div class="col-6 col-md-5">.col-6 .col-md-4</div>


    </div>
</div>


<?php
$artigos = Artigo::find()->all();

foreach ($artigos as $artigo) {
    $tipoartigo = TipoArtigo::find()
        ->where(['id' => $artigo->id_tipo_artigo])
        ->one();
    ?>
    <tr>
        <td>  <?= $artigo->id;?></td>
        <td>  <?= $tipoartigo->nome;?></td>
        <td>  <?= $artigo->nome;?></td>
        <td>  <?= $artigo->detalhes;?></td>
        <td>  <?= $artigo->preco;?></td>
        <td>  <?= $artigo->quantidade;?></td>
        <td> <?= Html::img('/Projeto_Plataformas/images/artigos/'. $artigo->imagem_artigo, ['id' => 'imagem-teste']);?></td>



    </tr>
<?php }?>