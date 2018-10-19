<?php
/**
 * Created by PhpStorm.
 * User: iangoodrich
 * Date: 10/19/18
 * Time: 11:18 AM
 */

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Calculate things!</title>
</head>
<body>
<div class="container">
    <h1>Calculate Shipping Cost</h1>

    <form action="calculator_results.php" method="get">
        <div class="form-group">
            <label for="weight">Package Weight:</label>
            <input id="weight" name="weight" class="form-control" type="number">
        </div>
        <div class="form-group">
            <label for="dist">Shipping Distance</label>
            <input id="dist" name="dist" class="form-control" type="number">
        </div>
        <button type="submit" class="btn-success btn-lg">SHIP</button>
    </form>

</div>
</body>
</html>
