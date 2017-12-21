<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "artigo".
 *
 * @property integer $id
 * @property integer $id_tipo_artigo
 * @property string $nome
 * @property string $detalhes
 * @property string $preco
 * @property integer $quantidade
 */
class Artigo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'artigo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tipo_artigo'], 'required'],
            [['id_tipo_artigo', 'quantidade'], 'integer'],
            [['preco'], 'number'],
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
            'id_tipo_artigo' => 'Tipo Artigo',
            'nome' => 'Nome',
            'detalhes' => 'Detalhes',
            'preco' => 'Preco',
            'quantidade' => 'Quantidade',
        ];
    }

}
