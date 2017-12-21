<?php
namespace common\models;

use yii\base\Model;
use common\models\User;
use common\models\Cliente;
use Yii;

namespace common\models;


class CriarArtigo extends model
{
    public $nome;
    public $id_tipo_artigo;
    public $TipoArtigo;
    public $detalhes;
    public $preco;
    public $quantidade;

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

    public function SaveArtigo()
    {
        if (!$this->validate()) {
            return null;
        }

        $artigo = new Artigo();
        $artigo->nome = $this->nome;
        $artigo->id_tipo_artigo = $this->id_tipo_artigo;
        $artigo->detalhes = $this->password;
        $artigo->preco = $this->preco;
        $artigo->quantidade = $this->quantidade;

        $artigo->save();

        return $artigo;
    }

}