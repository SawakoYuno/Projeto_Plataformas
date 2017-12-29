<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<?php
echo Carousel::widget([
    'items' => [

        ['content'=>  Html::img('@web/001.jpeg')],
        ['content'=>  Html::img('@web/images/slideshow/002.jpeg')],
        ['content'=>  Html::img('@web/images/slideshow/003.jpeg')],
        ['content'=>  Html::img('@web/images/slideshow/004.jpeg')],
        ['content' => Html::img('@web/images/slideshow/005.jpeg'),
        ],
    ],
]);
?>