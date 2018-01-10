<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;
use common\fixtures\UserFixture;

class SignupCest
{



    public function _before(FunctionalTester $I)
    {

    }

    public function signupUser(FunctionalTester $I)
    {
        $I->am('guest');
        $I->amOnPage('/site/signup');
        $I->see('Signup');

        $I->fillField('#signupform-username', 'jessicaaa');
        $I->fillField('#signupform-nome', 'jessica');
        $I->fillField('#signupform-email', 'jessica1243@vanilla.pt');
        $I->fillField('#signupform-numerotelefone', '918456732');
        $I->fillField('#signupform-morada', 'ilha das floress');
        $I->fillField('#signupform-password', 'jessica123');

        $I->click('Signup');

        $I->see('Pretende');
    }
}
