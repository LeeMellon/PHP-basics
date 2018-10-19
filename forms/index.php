<?php
/**
 * Created by PhpStorm.
 * User: iangoodrich
 * Date: 10/18/18
 * Time: 4:13 PM
 */
?>




<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Used Right Socks for the Sartorially Left Handed </title>
</head>
<body>
    <div class="container">
        <form action="confirmation_form.php">
        <div class="form-group" hidden>
            <input id="purchase" name="purchase" class="form-control" type="text" value="3dzn Used Socks. Style: Random Paisley">
        </div>
        <h1>Almost complete</h1>
        <h2>Enter your name and shipping address</h2>

            <div class="name">
                <span> Name </span>
                <div class="form-group">
                    <label for="first_name">Enter Your First Name</label>
                    <input id="first_name" name="first_name" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="last_name">Enter Your Last Name</label>
                    <input id="last_name" name="last_name" class="form-control" type="text">
                </div>
            </div>
            <br>
            <div class="address">
                <span> Address </span>
                <div class="form-group">
                    <label for="street">Number and Street</label>
                    <input id="street" name="street" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input id="city" name="city" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <input id="state" name="state" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="zip">Zip Code</label>
                    <input id="zip" name="zip" class="form-control" type="text">
                </div>
            </div>
            <button class="btn-lg btn-success" type="submit" class="btn">Submit</button>
        </form>

    </div>
</body>
</html>