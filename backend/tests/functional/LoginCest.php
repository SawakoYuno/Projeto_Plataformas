<?php

namespace backend\tests\functional;

use backend\tests\FunctionalTester;
use common\fixtures\UserFixture;

/**
 * Class LoginCest
 */
class LoginCest
{
    public function _before(FunctionalTester $I)
    {
//        Serve para carregar um ficheiro com dados para usar nos testes (pasta tests > _data)
        $I->haveFixtures([
            'user' => [
                'class' => UserFixture::className(),
                'dataFile' => codecept_data_dir() . 'login_data.php'
            ]
        ]);

    }
    /**
     * @param FunctionalTester $I
     */
    public function loginUser(FunctionalTester $I)
    {
        $I->am('guest');
        $I->amOnPage('/site/login');

        $I->fillField('#loginform-username', 'admin');
        $I->fillField('#loginform-password', 'password_0');

        $I->click('Entrar');

        $I->see('VANILLA');
    }
}
