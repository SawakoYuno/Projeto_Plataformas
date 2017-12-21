<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[TipoArtigo]].
 *
 * @see TipoArtigo
 */
class TipoArtigoQuery extends \yii\db\ActiveQuery
{
    public function active()
    {
        $TipoArtigos = TipoArtigo::find()
            ->where(['status' => 1])
            ->all();

        return $TipoArtigos;

    }

    /**
     * @inheritdoc
     * @return TipoArtigo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TipoArtigo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
