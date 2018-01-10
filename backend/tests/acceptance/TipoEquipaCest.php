<?php
namespace backend\tests\acceptance;

use backend\tests\AcceptanceTester;
use yii\helpers\Url;
use common\fixtures\UserFixture as UserFixture;


class HomCest
{
    public function _before(AcceptanceTester $I)
    {

        $I->amOnPage('site/login');

       /* $I->submitForm('#login-form',  [
            'LoginForm[username]' => 'admin',
            'LoginForm[password]' => 'joao_1428',
        ]);*/

        $I->fillField('#loginform-username', 'admin');
        $I->wait(2);
        $I->fillField('#loginform-password', 'joao_1428');
        $I->wait(2);

        $I->click('Entrar');
        $I->wait(5);

        $I->see('VANILLA');

        $I->click('Equipas');
        $I->wait(2);

        $I->click('Tipo de Equipas');
        $I->wait(2);

    }

    public function checkHome(AcceptanceTester $I)
    {
        //$I->amOnPage(Url::toRoute('/tipo-equipa/index'));
        $I->see('Tipo Equipas');

        $I->click('Criar Tipo Equipa');
        $I->wait(5);

        $I->fillField('#tipoequipa-tipo', 'empregado de cozinha');
        $I->wait(2);
        $I->fillField('#tipoequipa-detalhes', 'cozinha 1');
        $I->wait(2);
        $I->click('Create');
        $I->wait(5); 

    }
}
