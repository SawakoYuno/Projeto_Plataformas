<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;
use common\models\Cliente;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $nome;
    public $password;
    public $numeroTelefone;
    public $morada;


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

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Este email já existe'],

            ['nome', 'trim'],
            ['nome', 'required'],
            ['nome', 'string', 'max' => 60],

            ['numeroTelefone', 'trim'],
            ['numeroTelefone', 'string', 'min' => 9, 'max' =>9],
            ['numeroTelefone', 'unique', 'targetClass' => '\common\models\Cliente', 'message' => 'Este numero de telefone já existe'],

            ['morada', 'string', 'max' =>60],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
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

        $cliente = new Cliente();
        $cliente->id_user = $user->id;
        $cliente->email = $user->email;
        $cliente->nome = $this->nome;
        $cliente->numeroTelefone = $this->numeroTelefone;
        $cliente->morada = $this->morada;

        $cliente->save();

        $auth = Yii::$app->authManager;
        $clienteRole = $auth->getRole('cliente');
        $auth->assign($clienteRole, $user->getId());

        return $user;
    }
}
