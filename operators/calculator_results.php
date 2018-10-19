<?php
/**
 * Created by PhpStorm.
 * User: iangoodrich
 * Date: 10/19/18
 * Time: 11:19 AM
 */
$weight = $_GET["weight"];
$dist = $_GET["dist"];
$class_express = ($weight / 20) + ($dist / 20);
$class_first = ($weight / 5) + ($dist / 5);
$class_overnight = ($weight / 2) + ($dist / 2);
$class_overnight_promo = $class_overnight - ($class_overnight * .2);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Estimated Shipping Costs</title>
</head>
<body>
<h1>Your Estimated Shipping Costs: </h1>
<div class="cost">
    <h2 class="cost_title"> Express: </h2>
    <h3 class="cost_price"><strong>$ <?php echo $class_express ?></strong></h3>
</div>
<div class="cost">
    <h2 class="cost_title"> First Class: </h2>
    <h3 class="cost_price"><strong>$ <?php echo $class_first ?></strong></h3>
</div>
<div class="cost">
    <h2 class="cost_title"> Overnight: </h2>
    <h3 class="cost_price"><strong>$ <?php echo $class_overnight ?></strong></h3>
</div>
<div class="cost_promo">
    <h2 class="cost_title"> Overnight <em>First Time Special</em> </h2>
    <h3 class="cost_price_special"><strong>$ <strike><?php echo $class_overnight ?></strike></strong></h3>
    <h3 class="cost_price"><strong>$ <?php echo $class_overnight_promo ?><strong></h3>
</div>

</body>
</html>
