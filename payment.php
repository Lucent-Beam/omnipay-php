<?php

require 'vendor/autoload.php';

use Omnipay\Common\GatewayFactory;

$gateway = GatewayFactory::create('PayPal_Express');
$gateway->setUsername('iluis.06_api1.outlook.com');
$gateway->setPassword('E727P533LGTL57R6');
$gateway->setSignature('AFcWxV21C7fd0v3bYYYRCpSSRl31AXjJgfspI5c76JPDRaLi7Wc0EQuo');
$gateway->setTestMode(true);

$response = $gateway->purchase(
  array(
      'cancelUrl' => 'http://localhost/php/omnipay/cancel.php',
      'returnUrl' => 'http://localhost/php/omnipay/success.php',
      'description' => 'Venta de Prueba',
      'amount'  => 50.00,
      'currency' => 'USD'


  ))->send();

$response->redirect();


?>
