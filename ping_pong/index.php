<?php
/**
 * Created by PhpStorm.
 * User: iangoodrich
 * Date: 10/24/18
 * Time: 4:34 PM
 */
 if(isset($_GET["pseudoFunction"])){
     $pingPongArray = range((int)$_GET["from"], (int)$_GET["to"], (int)$_GET["step"] ?: 1);

     $ping = $_GET["ping"] ?: 3;
     $pong = $_GET["pong"] ?: 5;

     function pingPong($pingPongArray, $ping, $pong){
     $outputArray = array();
     foreach ($pingPongArray as $num){
         if (($num % $ping == 0) && ($num % $pong == 0)){
             $outputArray[] = "Ping-Pong!";
         } elseif ($num % $ping == 0) {
             $outputArray[] = "Ping!";

         } elseif ($num % $pong == 0){
             $outputArray[] = "Pong!";

         } else {
             $outputArray[] = $num;

         }
     }
     return $outputArray;
 }

     $outputArray = pingPong($pingPongArray, $ping, $pong);
}



?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Car Dealership</title>
</head>
<body>
    <div class="container">
        <form action="GET">
            <div class="card">
                <div class="form-field">
                    <label for="from">Start at</label>
                    <input type="number" name="from" step="1">
                </div>
                <div class="form-field">
                    <label for="to">End Number</label>
                    <input type="number" name="to" step="1">
                </div>
                <div class="form-field">
                    <label for="step">Incrementing by</label>
                    <input type="number" name="step" step="1" placeholder="optional" >
                    <input type="hidden" name="pseudoFunction" value="click">
                </div>
                <div class="card">
                    <h2>Set Ping and Pong if you want:</h2>
                    <div class="form-field">
                         <label for="ping">Ping</label>
                         <input type="number" name="ping" step="0.1">
                    </div>
                    <div class="form-field">
                        <label for="pong">Pong</label>
                        <input type="number" name="pong" step="0.1">
                    </div>
                <span>Lets Play Some</span>
            </div>
                <button type="submit" class="btn-danger btn-lg">PING-PONG!</button>
        </form>
    </div>
        <?php if(isset($_GET["pseudoFunction"])): ?>
            <div>

            <?php foreach ($outputArray as $result ){
                echo"<h4>$result</h4>";
                }
            ?>
            </div>
       <?php  endif; ?>


    </div>
</body>
</html>

