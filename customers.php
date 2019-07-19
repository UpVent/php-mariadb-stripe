<?php
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/customer.php');


// Instanciar un cliente
$customer = new Customer();

// Obtener un cliente
$customers = $customer->getCustomers();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/css/mdb.min.css" rel="stylesheet">
        <title> Ver Clientes </title>
    </head>
    <body>
        <div class="container mt-4">
            <h2>Clientes</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID del cliente</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
            </table>
        </div>
    </body>
</html>
