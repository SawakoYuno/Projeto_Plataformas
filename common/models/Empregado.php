<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "empregado".
 *
 * @property integer $id_user
 * @property integer $id_equipa
 * @property integer $n_empregado
 * @property integer $salario
 * @property integer $horas
 * @property string $horario
 * @property string $email
 * @property string $nome
 *
 * @property User $idUser
 * @property Equipa $idEquipa
 */
class Empregado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empregado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'id_equipa', 'n_empregado', 'email', 'nome'], 'required'],
            [['id_user', 'id_equipa', 'n_empregado', 'salario', 'horas'], 'integer'],
            [['horario'], 'string', 'max' => 35],
            [['email'], 'string', 'max' => 45],
            [['nome'], 'string', 'max' => 60],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_equipa'], 'exist', 'skipOnError' => true, 'targetClass' => Equipa::className(), 'targetAttribute' => ['id_equipa' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'id_equipa' => 'Id Equipa',
            'n_empregado' => 'N Empregado',
            'salario' => 'Salario',
            'horas' => 'Horas',
            'horario' => 'Horario',
            'email' => 'Email',
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
     * @return \yii\db\ActiveQuery
     */
    public function getIdEquipa()
    {
        return $this->hasOne(Equipa::className(), ['id' => 'id_equipa']);
    }

    /**
     * @inheritdoc
     * @return EmpregadoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EmpregadoQuery(get_called_class());
    }
}
