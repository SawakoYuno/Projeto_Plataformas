<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property integer $id_user
 * @property string $email
 * @property string $numeroTelefone
 * @property string $morada
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'email'], 'required'],
            [['id_user'], 'integer'],
            [['email'], 'string', 'max' => 45],
            [['numeroTelefone'], 'string', 'max' => 25],
            [['morada'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'email' => 'Email',
            'numeroTelefone' => 'Numero Telefone',
            'morada' => 'Morada',
        ];
    }
}
