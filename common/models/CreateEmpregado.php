<?php
namespace common\models;

use yii\base\Model;
use common\models\User;
use common\models\Empregado;
use Yii;

class CreateEmpregado extends Model
{
    public $username;
    public $password;
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
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Este utilizador já existe'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['n_empregado', 'trim'],
            ['n_empregado', 'integer', 'min' => 5, 'max' =>5],
            ['n_empregado', 'unique', 'targetClass' => '\common\models\Cliente', 'message' => 'Este numero de empregado já existe'],

            ['salario', 'trim'],
            ['salario', 'required'],
            ['salario', 'int', 'max' =>5],

            ['horas', 'trim'],
            ['horas', 'double', 'max' =>5],

            ['horario', 'trim'],
            ['horario', 'required'],
            ['horario', 'double', 'max' =>35],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function CreateEmpregado()
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
        $empregado->n_empregado = $this->numeroTelefone;
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