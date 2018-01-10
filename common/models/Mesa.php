<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mesa".
 *
 * @property integer $id
 * @property integer $numero
 * @property string $condicao
 * @property integer $quantidade_pessoas
 * @property integer $id_user
 *
 * @property User $idUser
 * @property Pedidos[] $pedidos
 * @property Reserva[] $reservas
 */
class Mesa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mesa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numero', 'id_user'], 'required'],
            [['numero', 'quantidade_pessoas', 'id_user'], 'integer'],
            [['condicao'], 'string', 'max' => 15],
            [['id_user'], 'unique'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'numero' => 'Numero',
            'condicao' => 'Condicao',
            'quantidade_pessoas' => 'Quantidade Pessoas',
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedidos::className(), ['id_mesa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservas()
    {
        return $this->hasMany(Reserva::className(), ['id_mesa' => 'id']);
    }

    /**
     * @inheritdoc
     * @return MesaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MesaQuery(get_called_class());
    }
}
