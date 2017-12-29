<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>

mas aquilo nem está a encontrar o sobre....
pk nao tens controller dessa merda. acho que e isso, .
Então e preciso de controller para uma página só com palha???
utiiza esta que esta ja esta no site controller