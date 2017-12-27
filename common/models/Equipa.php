<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "equipa".
 *
 * @property integer $id
 * @property string $nome
 * @property integer $id_tipo_equipa
 *
 * @property Empregado[] $empregados
 * @property TipoEquipa $idTipoEquipa
 */
class Equipa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equipa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tipo_equipa'], 'required'],
            [['id_tipo_equipa'], 'integer'],
            [['nome'], 'string', 'max' => 25],
            [['id_tipo_equipa'], 'exist', 'skipOnError' => true, 'targetClass' => TipoEquipa::className(), 'targetAttribute' => ['id_tipo_equipa' => 'id']],
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
            'id_tipo_equipa' => 'Tipo Equipa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpregados()
    {
        return $this->hasMany(Empregado::className(), ['id_equipa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoEquipa()
    {
        return $this->hasOne(TipoEquipa::className(), ['id' => 'id_tipo_equipa']);
    }

    /**
     * @inheritdoc
     * @return EquipaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EquipaQuery(get_called_class());
    }
}
