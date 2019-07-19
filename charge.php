<?php
require_once('vendor/autoload.php');

\Stripe\Stripe::setApiKey('sk_test_UqbYcqyb1MhZbYxq8XvuXn7h00imeKMLGE');

// Sanitize POST
$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$first_name = $POST['first_name'];
$last_name = $POST['last_name'];
$email = $POST['email'];
$token = $POST['stripeToken'];
