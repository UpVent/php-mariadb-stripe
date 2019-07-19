<?php
require_once('vendor/autoload.php');

\Stripe\Stripe::setApiKey('sk_test_UqbYcqyb1MhZbYxq8XvuXn7h00imeKMLGE');

// Sanitize POST
$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$first_name = $POST['first_name'];
$last_name = $POST['last_name'];
$email = $POST['email'];
$token = $POST['stripeToken'];

// Crear un cliente en Stripe
$customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token
));

$charge = \Stripe\Charge::create(array(
    "amount" => 3102,
    "currency" => USD,
    "description" => "My Arms Your Hearse",
    "customer" => $customer -> id
));

// Si el cliente pagó correctamente
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);
