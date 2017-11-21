<?php

namespace console\controllers;

use yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        $cliente = $auth->createRole('cliente');
        $auth->add($cliente);

        $empregado = $auth->createRole('empregado');
        $auth->add($empregado);
        $auth->addChild($empregado, $cliente);

        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $cliente);

        $auth->assign($cliente, 3);
        $auth->assign($empregado, 2);
        $auth->assign($admin, 1);
    }
}