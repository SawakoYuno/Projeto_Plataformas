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
 * @property string $imagem_artigo
 *
 * @property TipoArtigo $idTipoArtigo
 * @property PedidosEmArtigo[] $pedidosEmArtigos
 * @property Pedidos[] $idPedidos
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
            [['imagem_artigo'], 'string', 'max' => 200],
            [['id_tipo_artigo'], 'exist', 'skipOnError' => true, 'targetClass' => TipoArtigo::className(), 'targetAttribute' => ['id_tipo_artigo' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_tipo_artigo' => 'Id Tipo Artigo',
            'nome' => 'Nome',
            'detalhes' => 'Detalhes',
            'preco' => 'Preco',
            'quantidade' => 'Quantidade',
            'imagem_artigo' => 'Imagem Artigo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoArtigo()
    {
        return $this->hasOne(TipoArtigo::className(), ['id' => 'id_tipo_artigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidosEmArtigos()
    {
        return $this->hasMany(PedidosEmArtigo::className(), ['id_artigo' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPedidos()
    {
        return $this->hasMany(Pedidos::className(), ['id' => 'id_pedidos'])->viaTable('pedidos_em_artigo', ['id_artigo' => 'id']);
    }

    /**
     * @inheritdoc
     * @return ArtigoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ArtigoQuery(get_called_class());
    }
}
