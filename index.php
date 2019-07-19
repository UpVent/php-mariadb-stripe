<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,
                    initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible">
        <link rel="stylesheet" href="css/styles.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/css/mdb.min.css" rel="stylesheet">
        <title> Pay Page </title>
    </head>
    <body>
        <div class="container">
            <form action="/charge.php">
                <div class="form-row">
                    <label for="card-element">
                        Credit or debit card
                    </label>
                    <div id="card-element" class="form-control">
                        <!-- A Stripe Element will be inserted here. -->
                    </div>
                    <!-- Used to display form errors -->
                    <div id="card-errors" role="alert"></div>
                </div>
            <button>Submit Payment</button>
        </form>
        </div>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="js/charge.js"></script>
        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/js/mdb.min.js"></script>
    </body>
</html>
