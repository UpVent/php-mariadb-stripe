<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,
                    initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible">
        <link rel="stylesheet" href="css/styles.css">
        <title> Pay Page </title>
    </head>
    <body>
        <form action="/charge">
            <div class="form-row">
                <label for="card-element">
                    Credit or debit card
                </label>
                <div id="card-element">
                    <!-- A Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display form errors -->
                <div id="card-errors" role="alert"></div>
            </div>
            <button>Submit Payment</button>
        </form>

        <script src="https://js.stripe.com/v3/"></script>
        <script src="js/charge.js"></script>
    </body>
</html>
