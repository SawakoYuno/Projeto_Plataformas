<?php
namespace frontend\tests\acceptance;

use frontend\tests\AcceptanceTester;
use yii\helpers\Url;

class HomeCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function checkHome(AcceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/site/index'));
        $I->wait(5);
        $I->see('Especialidades');

        $I->seeLink('Sobre');
        $I->click('Sobre');
        $I->wait(2);

        $I->see('Sobre nós');
    }
}
