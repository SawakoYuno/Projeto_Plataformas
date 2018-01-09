<?php
namespace frontend\tests\acceptance;

use frontend\tests\AcceptanceTester;
use yii\helpers\Url;

class HomeCest
{
    public function checkHome(AcceptanceTester $I)
    {
        $I->amOnPage('site/index');
        $I->see('Prato do dia');
//uklk
        $I->seeLink('Sobre');
        $I->click('Sobre');
        $I->wait(2);

        $I->see('Sobre nós');
    }
}
