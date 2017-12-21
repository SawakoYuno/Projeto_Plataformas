<?php

use yii\db\Migration;

/**
 * Class m171218_165201_foreign_keys
 */
class m171218_165201_foreign_keys extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createIndex(
            'idx-tipo-artigo-id',
            'artigo',
            'id_tipo_artigo'
        );
        $this->addForeignKey(
            'fk-tipo-artigo-id',
            'artigo',
            'id_tipo_artigo',
            'tipo_artigo',
            'id'
        );

        $this->createIndex(
            'idx-user-cliente-id',
            'cliente',
            'id_user'
        );
        $this->addForeignKey(
            'fk-user-cliente-id',
            'cliente',
            'id_user',
            'user',
            'id'
        );


        $this->createIndex(
            'idx-user-empregado-id',
            'empregado',
            'id_user'
        );
        $this->addForeignKey(
            'fk-user-empregado-id',
            'empregado',
            'id_user',
            'user',
            'id'
        );

        $this->createIndex(
            'idx-equipa-id',
            'empregado',
            'id_equipa'
        );
        $this->addForeignKey(
            'idx-equipa-id',
            'empregado',
            'id_equipa',
            'equipa',
            'id'
        );
        $this->createIndex(
            'idx-tipo-equipa-id',
            'equipa',
            'id_tipo_equipa'
        );
        $this->addForeignKey(
            'fk-tipo-equipa-id',
            'equipa',
            'id_tipo_equipa',
            'tipo_equipa',
            'id'
        );

        $this->createIndex(
            'idx-meio-pagamento-id',
            'fatura',
            'id_meio_pagamento'
        );
        $this->addForeignKey(
            'fk-meio-pagamento-id',
            'fatura',
            'id_meio_pagamento',
            'meio_pagamento',
            'id'
        );

        $this->createIndex(
            'idx-pedidos-id',
            'fatura',
            'id_pedidos'
        );
        $this->addForeignKey(
            'fk-pedidos-id',
            'fatura',
            'id_pedidos',
            'pedidos',
            'id'
        );

        $this->createIndex(
            'idx-pedidos_arigo-artigo-id',
            'pedidos_em_artigo',
            'id_artigo'
        );
        $this->addForeignKey(
            'fk-pedidos_arigo-artigo-id',
            'pedidos_em_artigo',
            'id_artigo',
            'artigo',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-pedidos_arigo-pedidos-id',
            'pedidos_em_artigo',
            'id_pedidos'
        );
        $this->addForeignKey(
            'fk-pedidos_arigo-pedidos-id',
            'pedidos_em_artigo',
            'id_pedidos',
            'pedidos',
            'id',
            'CASCADE'
        );

    }

    public function down()
    {
//        $this->dropForeignKey(
//            'fk-tipo-artigo-id',
//            'artigo'
//        );
//
//        $this->dropIndex(
//            'idx-tipo-artigo-id',
//            'artigo'
//        );

    }
}
