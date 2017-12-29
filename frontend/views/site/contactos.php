<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contactos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <div class="col-lg-4">
        <h1><?= Html::encode($this->title) ?></h1>
    <p>
        Morada: R.Gen. Norton de Matos, 2411-901
    </p>
    <p>
        Telefone: 249555666
    </p>
    <p><strong>Sócio 1: Joaquim Rodrigues</strong></p>
    <p>
        Email: 2160442@my.ipleiria.pt
    </p>
    <p><strong>Sócio 2: João Filipe Vieira</strong></p>
    <p>
        Email: 2160451@my.ipleiria.pt
    </p>
    <p><strong>Sócio 3: Jéssica Grácio</strong></p>
    <p>
        Email: 2160475@my.ipleiria.pt
    </p>
    </div>
    <div class="row">
        <div id="map"></div>
            <script>
                function initMap() {
                    var uluru = {lat: 39.73440, lng: -8.820847};
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 15,
                        center: uluru
                    });
                    var marker = new google.maps.Marker({
                        position: uluru,
                        map: map
                    });
                }
            </script>
            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNPatn7Z5HYyP9jyVBa-eS47WjS3e5DZQ&callback=initMap">
            </script>


        </div>
    </div>

</div>
