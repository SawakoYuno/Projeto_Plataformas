<?php

namespace common\tests\unit\models;

use common\models\Artigo;
use common\models\Reserva;
use Yii;
use common\models\LoginForm;
use common\fixtures\UserFixture;


class ReservaTest extends \Codeception\Test\Unit
{
    protected $tester;

    protected function _before()
    {

    }

    protected function _after()
    {
    }

    public function testReservaSucesso()
    {
        //Adicionar
        $reserva = new Reserva();
        $reserva->nome = "Reserva XPTO";
        $reserva->numeroTelefone = '919191919';
        $reserva->quantidade_pessoas = '5';
        $reserva->horario = "12h51";
        $reserva->id_mesa = '1';

        $this->assertTrue($reserva->save());

        //Procura
        $this->tester->seeRecord('common\models\Reserva', ["nome" => "Reserva XPTO"]);

        $Res = Reserva::findOne(['nome' => "Reserva XPTO"]);

        //Atualiza
        $Res->nome = "Reserva XPTOV2";
        $Res->save();

        $this->tester->seeRecord('common\models\Reserva', ["nome" => "Reserva XPTOV2"]);

        //Eliminar
        Reserva::deleteAll("id=" . $Res->id);

        $this->tester->dontSeeRecord('common\models\Reserva', ["nome" => "Reserva XPTOV2"]);


    }

    public function testReservaErro()
    {
        //Adicionar
        $reserva = new Reserva();
        $reserva->nome = '1234578';
        $reserva->numeroTelefone = "abc";
        $reserva->quantidade_pessoas = "a";
        $reserva->horario = '5';
        $reserva->id_mesa = "b2";

        $this->assertFalse($reserva->save());
    }

    public function testReservaVazios()
    {
        //Adicionar
        $reserva = new Reserva();

        $this->assertFalse($reserva->save());
    }
}