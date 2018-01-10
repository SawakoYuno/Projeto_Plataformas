<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "reserva".
 *
 * @property integer $id
 * @property string $nome
 * @property string $numeroTelefone
 * @property integer $quantidade_pessoas
 * @property string $horario
 * @property integer $id_mesa
 *
 * @property Mesa $idMesa
 */
class Reserva extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reserva';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quantidade_pessoas', 'id_mesa'], 'integer'],
            [['nome'], 'string', 'max' => 60],
            [['numeroTelefone'], 'string', 'max' => 25],
            [['horario'], 'string', 'max' => 10],
            [['id_mesa'], 'exist', 'skipOnError' => true, 'targetClass' => Mesa::className(), 'targetAttribute' => ['id_mesa' => 'id']],
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
            'numeroTelefone' => 'Numero Telefone',
            'quantidade_pessoas' => 'Quantidade Pessoas',
            'horario' => 'Horario',
            'id_mesa' => 'Id Mesa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMesa()
    {
        return $this->hasOne(Mesa::className(), ['id' => 'id_mesa']);
    }

    /**
     * @inheritdoc
     * @return ReservaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ReservaQuery(get_called_class());
    }
}
