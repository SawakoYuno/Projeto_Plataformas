<?php

namespace common\tests\unit\models;

use common\models\Empregado;
use common\models\Equipa;
use Yii;
use common\fixtures\UserFixture;


class EquipaTest extends \Codeception\Test\Unit
{
    protected $tester;

    protected function _before()
    {

    }

    protected function _after()
    {
    }

    public function testEquipaSucesso()
    {
        //Adicionar
        $Equipa = new Equipa();
        $Equipa->nome = "XPTO Equipa" ;
        $Equipa->id_tipo_equipa = 3;

        $this->assertTrue($Equipa->save());

        //Procura
        $this->tester->seeRecord('common\models\Equipa', ["nome" => "XPTO Equipa"]);

        $eqp = Equipa::findOne(['nome' => "XPTO Equipa"]);

        //Atualiza
        $eqp->nome = "XPTO Equipa2";
        $eqp->save();

        $this->tester->seeRecord('common\models\Equipa', ["nome" => "XPTO Equipa2"]);

        //Eliminar
        Equipa::deleteAll("id=" . $eqp->id);

        $this->tester->dontSeeRecord('common\models\Equipa', ["nome" => "XPTO Equipa2"]);


    }

    public function testEquipasErro()
    {
      //Adicionar
        $Equipa = new Equipa();
        $Equipa->nome = "XPTO Equipa" ;
        $Equipa->id_tipo_equipa = 0;


        $this->assertFalse($Equipa->save());
    }

    public function testEmpregadoVazios()
    {
        //Adicionar
        $Equipa = new Equipa();

        $this->assertFalse($Equipa->save());
    }
}