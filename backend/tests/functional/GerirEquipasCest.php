<?php

namespace backend\tests\functional;

use backend\tests\FunctionalTester;
use common\fixtures\UserFixture;

class GerirEquipasCest
{



    public function _before(FunctionalTester $I)
    {
        $I->haveFixtures([
            'user' => [
                'class' => UserFixture::className(),
                'dataFile' => codecept_data_dir() . 'login_data.php'
            ]
        ]);

        $I->am('guest');
        $I->amOnPage('/site/login');

        $I->fillField('#loginform-username', 'admin');
        $I->fillField('#loginform-password', 'password_0');

        $I->click('Entrar');

        $I->see('Vanilla');


    }

    public function GerirEquipas(FunctionalTester $I)
    {
        $I->amOnPage('equipa/index');

        $I->click('Create Equipa');
        $I->see('Create Equipa');

        $I->fillField('#equipa-nome','XPTO Equipa');
        $I->selectOption('#equipa-id_tipo_equipa', 'empregado de cozinha');

        $I->click('Create');
        $I->dontSee('Create Equipa');


    }
}
