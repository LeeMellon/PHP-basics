<?php
/**
 * Created by PhpStorm.
 * User: iangoodrich
 * Date: 10/19/18
 * Time: 1:25 PM
 */
$string_one = strtoupper($_GET["string_one"]);
$string_two = str_word_count($_GET["string_two"]);
$string_three = str_shuffle($_GET["string_three"]);
$string_four =  stripos($_GET["string_four"], $_GET["string_four_target"]);

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>SFUnction Output</title>
</head>
<body>
<div class="container">
    <div class="result">
        <h1>Function 1 To Upper</h1>
        <h3><?php echo $string_one; ?></h3>
    </div>
    <div class="result">
        <h1>Function 2 Word Count</h1>
        <h3><?php echo $string_two; ?></h3>
    </div>
    <div class="result">
        <h1>Function 3 Shuffle</h1>
        <h3><?php echo $string_three; ?></h3>
    </div>
    <div class="result">
        <h1>Function 4 Word Index</h1>
        <h3><?php echo $string_four; ?></h3>
    </div>
</div>
</body>
</html>

