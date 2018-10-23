<?php
/**
 * Created by PhpStorm.
 * User: iangoodrich
 * Date: 10/23/18
 * Time: 10:11 AM
 */
$iceCreamList = ["Cookies'n Cream",
    "Double Bourbon Happy Hour",
    "Pralines and Cream",
    "Essence of Sunday Crossword"];

$moviesList = ["The Meg",
    "Sam Hell Goes to Frog Town",
    "Meet The Feebles",
    "Gods of Egypt",
    "Fair Game"];

$booksList = [ "The Hitchhiker's Guide to the Galaxy",
    "Dune",
    "All The President's Men",
    "Good Omens",
    "A Canticle for Leibowitz",
    "Catch-22",
    "Hat Full of Stars",
    "The Hippopotamus"];



if (isset($_GET["iceCreamPseudoFunction"]))
{
   $iceCreamList = [$iceCreamList[1]];
}

if (isset($_GET["moviesPseudoFunction"]))
{
    array_push($moviesList, "Anaconda", "Lake Placid");
}

if (isset($_GET["booksPseudoFunction"]))
{
//    $newArray = evens($booksList);
    $booksList = evens($booksList);
}

function evens($booksList)
{
    $size = count($booksList);
    $evenArray = array();
    for($x=0; $x<$size; $x++){
        if($x % 2 != 0){
            $thisBook = $booksList[$x];
            $evenArray[] = $thisBook;
        }
    }
    return $evenArray;
}


?>



<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>SFUnction Output</title>
</head>
<body>



<div class="container">
    <div>
        <h1>Welcome to exercises in needless functionality!</h1>
        <h3>A website dedicated to doing things that nobody carese about</h3>
        <h3>to random bits of data that no one knows about</h3>
        <h3><strong>simply because you can!</strong></h3>
    </div>
    <br>
    <div>
        <h2><strong>Today's Contenders</strong></h2>
        <h3>A bunch of lists of...stuff</h3>

        <div class="form-group">
            <h1>THE FAVORITE FLAVORS OF ICE CREAM LIST</h1>
            <p>Give me just number 2!</p>
            <?php
            foreach ($iceCreamList as $flavor){
                echo "<h4> $flavor </h4>";
            }
            ?>
            <form action="GET">
                <input type="hidden" value="fire" name="iceCreamPseudoFunction">
                <button type="submit" class="btn-lr btn-danger">DOOOO IT!</button>
            </form>
        </div>

        <div class="form-group">
        <h1>THE BAD MOVIES LIST</h1>
        <p>Add TWO MORE movies to the list!</p>
            <?php
            foreach ($moviesList as $movie){
                echo "<h4> $movie </h4>";
            }
            ?>
            <form action="GET">
                <input type="hidden" value="fire" name="moviesPseudoFunction">
                <button type="submit" class="btn-lr btn-success">DOOOO IT!</button>
            </form>
        </div>

        <div class="form-group">
        <h1>THE FAVORITE BOOKS LIST</h1>
        <p>Just list the EVEN NUMBERSSSSSS! OH YEAAAAH!</p>
            <?php
            foreach ($booksList as $book){
                echo "<h4> $book </h4>";
            }
            ?>
            <form action="GET">
                <input type="hidden" value="fire" name="booksPseudoFunction">
                <button type="submit" class="btn-lr btn-primary">DOOOO IT!</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
