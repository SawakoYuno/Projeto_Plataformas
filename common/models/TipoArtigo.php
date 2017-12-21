<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tipo_artigo".
 *
 * @property integer $id
 * @property string $nome
 * @property string $detalhes
 *
 * @property Artigo[] $artigos
 */
class TipoArtigo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_artigo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'string', 'max' => 25],
            [['detalhes'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'detalhes' => 'Detalhes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtigos()
    {
        return $this->hasMany(Artigo::className(), ['id_tipo_artigo' => 'id']);
    }

    /**
     * @inheritdoc
     * @return TipoArtigoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TipoArtigoQuery(get_called_class());
    }
}
