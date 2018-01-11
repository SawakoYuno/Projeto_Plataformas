<?php

namespace common\tests\unit\models;

use common\models\Artigo;
use Yii;
use common\models\LoginForm;
use common\fixtures\UserFixture;


class ArtigosTest extends \Codeception\Test\Unit
{
    protected $tester;

    protected function _before()
    {

    }

    protected function _after()
    {
    }

    public function testArtigoSucesso()
    {
        //Adicionar
        $artigo = new Artigo();
        $artigo->id_tipo_artigo = 1;
        $artigo->nome = "prego no pao";
        $artigo->detalhes = "muita bom";
        $artigo->preco = 5;
        $artigo->quantidade = 1;
        $artigo->imagem_artigo = "artigo_Azeitonas.jpg";

        $this->assertTrue($artigo->save());

        //Procura
        $this->tester->seeRecord('common\models\Artigo', ["nome" => "prego no pao"]);

        $art = Artigo::findOne(['nome' => "prego no pao"]);

        //Atualiza
        $art->nome = "prego na broa";
        $art->save();

        $this->tester->seeRecord('common\models\Artigo', ["nome" => "prego na broa"]);

        //Eliminar
        Artigo::deleteAll("id=" . $art->id);

        $this->tester->dontSeeRecord('common\models\Artigo', ["nome" => "prego na broa"]);


    }

    public function testArtigoErro()
    {
        //Adicionar
        $artigo = new Artigo();
        $artigo->id_tipo_artigo = 1;
        $artigo->nome = 123456789;
        $artigo->detalhes = "muita bom";
        $artigo->preco = "jkdhajkshdka";
        $artigo->quantidade = 100000000000000000000000;
        $artigo->imagem_artigo = "nottoday.jpg";

       // $artigo->save();

        $this->assertFalse($artigo->save());
    }

    public function testArtigoVazios()
    {
        //Adicionar
        $artigo = new Artigo();

        $this->assertFalse($artigo->save());
    }
}