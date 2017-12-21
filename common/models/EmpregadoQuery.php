<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Empregado]].
 *
 * @see Empregado
 */
class EmpregadoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Empregado[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Empregado|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
