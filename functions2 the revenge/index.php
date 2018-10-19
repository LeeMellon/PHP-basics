<?php
/**
 * Created by PhpStorm.
 * User: iangoodrich
 * Date: 10/19/18
 * Time: 2:05 PM
 */
$phrase1 = $_GET["phrase1"] ?? "";
$phrase2 = $_GET["phrase2"] ?? "";
$phrase3 = $_GET["phrase3"] ?? "";

$result = makeKey($phrase1, $phrase2, $phrase3);
function makeKey($phrase1, $phrase2, $phrase3)
{
    $phrase_reverse = strrev($phrase1);
    $phrase_capitalize = strtoupper($phrase2);
    $phrase_rev_caps = strrev(strtoupper($phrase3));

    return $phrase_reverse . $phrase_capitalize . $phrase_rev_caps;
}


?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Encrypt a Message</title>
</head>
<body>
<div class="container">
    <h1>Create a useless key that you'll never remember! Because Internet.</h1>
    <form action="">
        <div class="form-group">
            <label for="phrase1">Phrase 1 to reverse.</label>
            <input id="phrase1" name="phrase1" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="phrase2">Phrase 2 to capitalize.</label>
            <input id="phrase2" name="phrase2" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="phrase3">Phrase 3 to do both.</label>
            <input id="phrase3" name="phrase3" class="form-control" type="text">
        </div>
        <button type="submit" class="btn-lg btn-success">Why Not</button>
    </form>

    <div>
        <h2><?php echo $result; ?></h2>
    </div>
</div>
</body>
</html>
