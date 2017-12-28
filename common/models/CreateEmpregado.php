<?php
namespace common\models;

use function Couchbase\basicDecoderV1;
use yii\base\Model;
use common\models\User;
use common\models\Empregado;
use Yii;

class CreateEmpregado extends Model
{
    public $username;
    public $email;
    public $nome;
    public $password;
    public $id_equipa;
    public $n_empregado;
    public $salario;
    public $horas;
    public $horario;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Este Empregado já existe'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Este email já existe'],

            ['nome', 'trim'],
            ['nome', 'required'],
            ['nome', 'string', 'max' => 60],

            ['id_equipa', 'required'],
            ['id_equipa', 'integer'],

            ['n_empregado', 'trim'],
            ['n_empregado', 'integer', 'min' => 0, 'max' =>9999],
            ['n_empregado', 'unique', 'targetClass' => '\common\models\Empregado', 'message' => 'Este numero de empregado já existe'],

            ['salario', 'required'],
            ['salario', 'integer', 'min' => 580, 'max' =>2000],

            ['horas', 'trim'],
            ['horas', 'integer', 'max' =>12],

            ['horario', 'trim'],
            ['horario', 'required'],
            ['horario', 'string', 'max' =>35],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     */
    public function CriarEmpregado()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        $user->save();

        $empregado = new Empregado();
        $empregado->id_user = $user->id;
        $empregado->email = $user->email;
        $empregado->nome = $this->nome;
        $empregado->id_equipa = $this->id_equipa;
        $empregado->n_empregado = $this->n_empregado;
        $empregado->salario = $this->salario;
        $empregado->horas = $this->horas;
        $empregado->horario = $this->horario;

        $empregado->save();

        $auth = Yii::$app->authManager;
        $empregadoRole = $auth->getRole('empregado');
        $auth->assign($empregadoRole, $user->getId());

        return $user;

    }
}