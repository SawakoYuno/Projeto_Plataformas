<?php

namespace backend\tests\functional;

use backend\tests\FunctionalTester;
use yii\helpers\Url;
use common\fixtures\UserFixture;

/**
 * Class LoginCest
 */
class AdicionarArtigoCest
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

        $I->click('Entrar');;
        $I->see('Vanilla');

        $I->click('Artigos');

        $I->click('Artigo');

        //$I->click('Create Artigo');


    }
    /**
     * @param FunctionalTester $I
     *//**/
    public function adicionar(FunctionalTester $I)
    {
        //$I->amOnPage('artigo/create');
        /*
        $I->click('#artigo-id_tipo_artigo');
        $I->click('Entradas');
        $I->fillField('#artigo-nome', 'xixinha');
        $I->fillField('#artigo-detalhes', 'xpto');
        $I->fillField('#artigo-preco', '15.25€');
        $I->fillField('#artigo-quantidade', '2');
        $I->click('#artigo-imagem_artigo', 'artigo_Azeitonas.jpg');

        $I->click('Create');
        */
        //$I->see('Destalhes');
    }
}
