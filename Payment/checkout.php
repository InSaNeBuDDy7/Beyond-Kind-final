<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Checkout</title>
    <link rel="stylesheet" type="text/css" href="payment.css">
</head>

<body>
    <div class="row" style="padding: 20px 200px;">
        <div class="col">
            <div class="container">
                <form action="payscript.php" method="post" style="padding: 10px;">
                    <div class="row">

                        <h3 style="text-align:center; margin: 20px 10px;">Checkout Form</h3>
                        <div class="mb-3">
                            <label for="fname" class="form-label">Full name</label>
                            <input type="text" class="form-control" id="fname" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <input type="hidden" value="<?php 'OID' . rand(100, 1000); ?>" name="orderid">
                        <input type="hidden" value="<?php echo 1; ?>" name="amount">
                        <div class="mb-3">
                            <label for="city" class="form-label">Mobile</label>
                            <input type="text" class="form-control" id="city" name="mobile">
                        </div>
                        <div class="mb-3">
                            <label for="adr" class="form-label">Address</label>
                            <input type="text" class="form-control" id="adr" name="address">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>