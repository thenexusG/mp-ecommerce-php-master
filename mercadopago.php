<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>

<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-8058997674329963-062418-89271e2424bb1955bc05b1d7dd0977a8-592190948');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = $_POST['title'];
$item->quantity =  $_POST['unit'];
$item->unit_price =  $_POST['price'];
$preference->items = array($item);
$preference->save();

//prueba de actualizacion en git
?>
