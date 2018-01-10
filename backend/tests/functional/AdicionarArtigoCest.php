<?php

namespace backend\tests\functional;

use backend\tests\FunctionalTester;
use common\fixtures\UserFixture;

/**
 * Class LoginCest
 */
class AdicionarArtigoCest
{
    public function _before(FunctionalTester $I)
    {

        $I->amOnRoute('site/login');

        $I->fillField('#loginform-username', 'admin');
        $I->fillField('#loginform-password', 'joao_1428');

        $I->click('Entrar');;

        $I->see('VANILLA');

        $I->click('Artigos');

        $I->click('Artigos');

        $I->click('Create Artigo');


    }
    /**
     * @param FunctionalTester $I
     */
    public function adicionar(FunctionalTester $I)
    {
        $I->am('guest');
        $I->amOnPage('artigo/create');
        $I->see('Signup');

        $I->fillField('#artigo-id_tipo_artigo', 'Entradas');
        $I->fillField('#artigo-nome', 'xinha');
        $I->fillField('#artigo-detalhes', 'xpto');
        $I->fillField('#artigo-preco', '15.25€');
        $I->fillField('#artigo-quantidade', '2');
        $I->click('#artigo-imagem_artigo', 'jessica123');

        $I->click('Signup');

        $I->see('Pretende');


    }
}
