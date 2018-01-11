<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[PedidosEmArtigo]].
 *
 * @see PedidosEmArtigo
 */
class PedidosEmArtigoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return PedidosEmArtigo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return PedidosEmArtigo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
