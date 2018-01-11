<?php

namespace common\tests\unit\models;

use common\models\Empregado;
use common\models\User;
use Yii;
use common\fixtures\UserFixture;


class EmpregadoTest extends \Codeception\Test\Unit
{
    protected $tester;

    protected function _before()
    {
        $this->tester->haveFixtures([
            'user' => [
                'class' => UserFixture::className(),
                'dataFile' => codecept_data_dir() . 'user.php'
            ]
        ]);
    }

    protected function _after()
    {
    }

    public function testEmpregadoSucesso()
    {
        $id_user = User::findOne(["username" => "bayer.hudson"])-> id;

        Empregado::deleteAll("id_user=".$id_user);

        //Adicionar
        $empregado = new Empregado();
        $empregado->id_user = $id_user;
        $empregado->id_equipa = '1';
        $empregado->n_empregado = '1';
        $empregado->salario = '700';
        $empregado->horas = '5';
        $empregado->horario = "10h - 15h";
        $empregado->email = "luffy@vanilla.pt";
        $empregado->nome = "Luffy";

        $this->assertTrue($empregado->save());

        //Procura
        $this->tester->seeRecord('common\models\Empregado', ["nome" => "Luffy"]);

        $emp = Empregado::findOne(['nome' => "Luffy"]);

        //Atualiza
        $emp->nome = "Luffy XPTO";
        $emp->save();

        $this->tester->seeRecord('common\models\Empregado', ["nome" => "Luffy XPTO"]);

        //Eliminar
        Empregado::deleteAll("id_user=" . $emp->id_user);

        $this->tester->dontSeeRecord('common\models\Empregado', ["nome" => "Luffy XPTO"]);


    }

    public function testEmpregadoErro()
    {
        $id_user = User::findOne(["username" => "bayer.hudson"])-> id;

        Empregado::deleteAll("id_user=".$id_user);

      //Adicionar
        $empregado = new Empregado();
        $empregado->id_user = $id_user;
        $empregado->n_empregado = "nhdjaskhdka";
        $empregado->salario = 1000000;
        $empregado->horas = 50000;
        $empregado->horario = "10h - 10h";
        $empregado->email = "luffy";
        $empregado->nome = 123456789;

        $this->assertFalse($empregado->save());
    }

    public function testEmpregadoVazios()
    {
        //Adicionar
        $empregado = new Empregado();

        $this->assertFalse($empregado->save());
    }
}