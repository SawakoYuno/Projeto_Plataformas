<?php
namespace backend\tests\acceptance;

use backend\tests\AcceptanceTester;
use yii\helpers\Url;
use common\fixtures\UserFixture as UserFixture;


class HomeCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->haveFixtures([
            'user' => [
                'class' => UserFixture::className(),
                'dataFile' => codecept_data_dir() . 'login_data.php'
            ]
        ]);
    }

    public function checkHome(AcceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/site/login'));
        $I->see('Entrar');

        $I->fillField('#loginform-username', 'admin');
        $I->wait(2);
        $I->fillField('#loginform-password', 'password_0');
        $I->wait(2);
        $I->click('Entrar');
        $I->wait(2);

        $I->see('Vanilla');
    }
}
