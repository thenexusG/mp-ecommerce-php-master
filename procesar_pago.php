<?php
    require_once 'vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("APP_USR-8058997674329963-062418-89271e2424bb1955bc05b1d7dd0977a8-592190948 ");

    $payment = new MercadoPago\Payment();
    $payment->transaction_amount = 149;
    $payment->token = "ff8080814c11e237014c1ff593b57b4d";
    $payment->description = "Enormous Marble Keyboard";
    $payment->installments = 1;
    $payment->payment_method_id = "visa";
    $payment->payer = array(
    "email" => "damien_collins@gmail.com"
    );

    $payment->save();


    echo $payment->status;

?>
