<?php

namespace common\tests\unit\models;

use Codeception\Module\Cli;
use common\models\Cliente;
use common\models\User;
use Yii;
use common\models\LoginForm;
use common\fixtures\UserFixture;


class ClientesTest extends \Codeception\Test\Unit
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

    public function testClienteSucesso()
    {

        $id_user = User::findOne(["username" => "bayer.hudson"])-> id;

        Cliente::deleteAll("id_user=".$id_user);

        //Adicionar
        $cliente = new Cliente();
        $cliente->id_user = $id_user;
        $cliente->email = "admin2@admin.pt";
        $cliente->nome = "Sasuke Uchiha";
        $cliente->numeroTelefone = '987654321';
        $cliente->morada = "ilha das flores nº17";


        $this->assertTrue($cliente->save());

        //Procura
        $this->tester->seeRecord('common\models\Cliente', ["nome" => "Sasuke Uchiha"]);

        $cli = Cliente::findOne(['nome' => "Sasuke Uchiha"]);

        //Atualiza
        $cli->nome = "Sanji Kun";
        $cli->save();

        $this->tester->seeRecord('common\models\Cliente', ["nome" => "Sanji Kun"]);

        //Eliminar
        Cliente::deleteAll("id_user=" . $cli->id_user);

        $this->tester->dontSeeRecord('common\models\Cliente', ["nome" => "Sanji Kun"]);


    }

    public function testClienteErro()
    {
        $id_user = User::findOne(["username" => "bayer.hudson"])-> id;

        Cliente::deleteAll("id_user=".$id_user);

        //Adicionar
        $cliente = new Cliente();
        $cliente->id_user = $id_user;
        $cliente->email = "admin2@admin.pt";
        $cliente->nome = "Sasuke Uchiha";
        $cliente->numeroTelefone = 982132489564189562341985634213863534231396532431365343156323343189356332412835623;
        $cliente->morada = "ilha das flores nº17";

        $this->assertFalse($cliente->save());
    }

    public function testClienteVazios()
    {
        $id_user = User::findOne(["username" => "bayer.hudson"])-> id;

        Cliente::deleteAll("id_user=".$id_user);

        //Adicionar
        $cliente = new Cliente();

        $this->assertFalse($cliente->save());
    }
}