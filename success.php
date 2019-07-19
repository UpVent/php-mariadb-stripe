<?php
if (!empty($_GET['tid']) && !empty($_GET['product'])) {
    $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

    $tid = $GET['tid'];
    $product = $GET['product'];
} else {
    header('Location: index.php');
}
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
        <title> Gracias </title>
    </head>
    <body>
        <div class="container mt-4">
            <h2>Gracias por comprar: <?php echo $product; ?></h2>
            <hr>
            <p> Tu ID de compra es: <?php echo $tid; ?></p>
            <p> Revisa tu correo para más información </p>
            <p><a class="btn btn-light mt-2" href="index.php">Regresar</a></p>
        </div>
    </body>
</html>
