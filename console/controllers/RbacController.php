<?php

namespace console\controllers;

use yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();

        // add "createPost" permission
        $createPost = $auth->createPermission('createPost');
        $createPost->description = 'Create a post';
        $auth->add($createPost);

        // add "updatePost" permission
        $updatePost = $auth->createPermission('updatePost');
        $updatePost->description = 'Update post';
        $auth->add($updatePost);

        // add "deletePost" permission
        $deletePost = $auth->createPermission('deletePost');
        $deletePost->description = 'Delete post';
        $auth->add($deletePost);

        // add "$cliente" role and give this role the "createPost" permission
        $cliente = $auth->createRole('cliente');
        $auth->add($cliente);
        $auth->addChild($cliente, $createPost);

        // add "$empregado" role and give this role the same permissions of the "cliente" role
        $empregado = $auth->createRole('empregado');
        $auth->add($empregado);
        $auth->addChild($empregado, $cliente);

        // add "admin" role and give this role the "updatePost" permission
        // as well as the permissions of the "cliente" and "empregado" roles
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $updatePost);
        $auth->addChild($admin, $deletePost);
        $auth->addChild($admin, $cliente);
        $auth->addChild($admin, $empregado);

        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        /*
        $auth->assign($author, 2);
        $auth->assign($admin, 1);
        */

        $auth->assign($cliente, 3);
        $auth->assign($empregado, 2);
        $auth->assign($admin, 1);
    }
}

