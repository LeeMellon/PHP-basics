<?php
    $purchase = $_GET["purchase"];
    $first_name =$_GET["first_name"];
    $last_name = $_GET["last_name"];
    $street = $_GET["street"];
    $city = $_GET["city"];
    $zip = $_GET["zip"];
    $state = $_GET["state"];
/**
 * Created by PhpStorm.
 * User: iangoodrich
 * Date: 10/18/18
 * Time: 4:35 PM
 */
?>



<!DOCTYPE html>
<html>
<head>
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

    <title>Success!</title>
</head>
<body>
    <div class="container">
        <div class="confirmation">
            <div class="confirmation_header">
                <h2>Thankyou for your purchase of <?php echo $purchase; ?></h2>
                <p>Oh,  <?php echo $first_name ?> <?php echo $last_name; ?>,</p>
                <p>You have made us <em>so</em> happy with your patronage.</p>
                <p>We are <em>literally</em> dancing with joy! </p>
            </div>
            <div class="confirmation_info">
                <p>Just to confirm, we're sending your package of: </p>
                <h3 class="confimation_item"> <?php echo $purchase; ?></h3>
                <p>And we're sending it to: </p>
                <div class="confirmation_address">
                    <h3><?php echo $first_name ?> <?php echo $last_name; ?></h3>
                    <h3><?php echo $street ?></h3>
                    <h3><?php echo $city, $state, $zip ?></h3>
                </div>
            </div>
            <div class="confirmation_signoff">
                <p>Looking forward to some sunny day when we'll meet again. </p>
                <p>Your compatriot clothiers at,</p>
                <p>The Sartorially Left Handed</p>
            </div>
        </div>

    </div>
</body>
</html>