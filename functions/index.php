<?php
/**
 * Created by PhpStorm.
 * User: iangoodrich
 * Date: 10/19/18
 * Time: 1:24 PM
 */


?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>String Repeating</title>
</head>
<body>
<div class="container">
    <h1>Welcome to the Stringulation Fun House (Mwwwahahahah!)</h1>
    <h1>Where we will do <em><strong>Terrible Things</strong></em> to your...letters?</h1>
    <p>Basically it's like SAW, but for strings</p>
    <form action="functions_output.php">
        <div class="form-group">
            <label for="string_one">Make me Important!</label>
            <input id="string_one" name="string_one" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="string_two">Make me Count.</label>
            <input id="string_two" name="string_two" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="string_three">Make me Unique ;)</label>
            <input id="string_three" name="string_three" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="string_four">Make me know my Place;</label>
            <input id="string_four" name="string_four" class="form-control" type="text" placeholder="Enter a Phrase">
            <label for="string_four_target"></label>
            <input id="string_four_target" name="string_four_target" class="form-control" type="text" placeholder="Enter a Target Word">
        </div>
        <button type="submit" class="btn-success">Submit</button><p>...to the <em>terror!</em></p>
    </form>
</div>
</body>
</html>