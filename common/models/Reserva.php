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
            [['quantidade_pessoas'], 'integer'],
            [['nome'], 'string', 'max' => 60],
            [['numeroTelefone'], 'string', 'max' => 25],
            [['horario'], 'string', 'max' => 10],
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
        ];
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
