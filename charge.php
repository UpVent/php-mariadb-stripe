<?php
require_once('vendor/autoload.php');
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/customer.php');

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

$customerData = [
    'id' => $charge->customer,
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email
];

// Instanciar el cliente
$customer = new Customer();

// Añadir cliente
$customer->addCustomer($customerData);

// Si el cliente pagó correctamente
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);
