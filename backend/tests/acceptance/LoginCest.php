<?php
namespace backend\tests\acceptance;

use backend\tests\AcceptanceTester;
use yii\helpers\Url;
use common\fixtures\UserFixture as UserFixture;


class HomeCest
{
    public function _before(AcceptanceTester $I)
    {

    }

    public function checkHome(AcceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/site/login'));
        $I->see('Entrar');

        $I->fillField('#loginform-username', 'admin');
        $I->wait(2);
        $I->fillField('#loginform-password', 'joao_1428');
        $I->wait(2);
        $I->click('Entrar');
        $I->wait(5); 

        $I->see('VANILLA');
    }
}
