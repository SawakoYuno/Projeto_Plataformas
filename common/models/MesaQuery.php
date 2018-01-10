<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Mesa]].
 *
 * @see Mesa
 */
class MesaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Mesa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Mesa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
