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
 * @property string $nome
 *
 * @property User $idUser
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
            [['id_user', 'email', 'nome'], 'required'],
            [['id_user'], 'integer'],
            [['email'], 'string', 'max' => 45],
            [['numeroTelefone'], 'string', 'max' => 25],
            [['morada', 'nome'], 'string', 'max' => 60],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
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
            'nome' => 'Nome',
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
     * @inheritdoc
     * @return ClienteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ClienteQuery(get_called_class());
    }
}
