<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="checkout.css">
    <title>Checkout Form</title>
</head>
<body>
<div class="top-bar">
    <img src="images/logos/logo131.png" alt="StreamVerse">
</div>
    <div class="row" style="padding: 100px 300px;">
        <div class="col-50">
            <div class="container">
                <form action="payscript.php" method="post" style="padding: 25px;">
                    <div class="row">
                        <div class="col-25">
                            <h3 style="text-align: center; margin: 20px 10px; font-family: lato;">Checkout Form</h3>
                            <label for="fname"><i class="fa fa-user"></i>Full Name</label>
                            <input type="text" id="fname" name="name" placeholder="Your name">
                            <label for="email"><i class="fa fa-envelope"></i>Email</label>
                            <input type="text" id="email" name="email" placeholder="Enter email id">
                            <input for="hidden" value="<?php echo 'OID' .rand(100,1000);?>" name="orderid">
                            <input type="hidden" value="<?php echo 1;?>" name="amount">
                            <label for="city"><i class="fa fa-mobile"></i>Mobile Number</label>
                            <input type="text" id="city" name="mobile" placeholder="Mobile Number">
                            <label for="adr"><i class="fa fa-address-card-o"></i>Address</label>
                            <input type="text" id="adr" name="address" placeholder="Your address">
                        </div>
                        <input type="submit" value="Pay Now" class="btn">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

