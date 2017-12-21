<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[TipoEquipa]].
 *
 * @see TipoEquipa
 */
class TipoEquipaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return TipoEquipa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TipoEquipa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
