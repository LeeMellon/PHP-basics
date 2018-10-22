<?php
/**
 * Created by PhpStorm.
 * User: iangoodrich
 * Date: 10/19/18
 * Time: 3:40 PM
 */
$answer1 = $_GET["answer1"] ?? "";
$answer2 = $_GET["answer2"] ?? "";
function weather($answer1, $answer2)
{
    if ($answer2 == "hot") {
        $text = "It's way too hot, ";
    } elseif ($answer2 == "right") {
        $text = "It's so nice, ";
    } elseif ($answer2 == "cold") {
        $text = "It's way too cold, ";
    }else {
        $text = "";
    }

    if ($answer1 == "yes") {
        $text .="and rainy.";
        $pic = "https://www.metoffice.gov.uk/binaries/content/gallery/mohippo/images/migrated-image/r/heavy_rain_splashes_shutterstock_148721882.jpg";
    } elseif ($answer1 == "no") {
        $pic = "https://news.images.itv.com/image/file/925660/stream_img.jpg";
    }else {
        $pic = "";
    }

    return array($pic, $text);
}
$result = weather($answer1, $answer2);
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Open a Window Weather Cast</title>
</head>
<body>
<div class="container">
    <h1>Want to know what the weather is like? </h1>
    <h1>Answer these <em>questions of the Ancients</em></h1>
    <form>
        <div class="form-group">
            <p><strong>Play-Dough, the first janitor at the Academy famouly asked:</strong></p>
            <label for="answer1">If you threw a rock at at passing bird...would it get wet?</label>
            <select name="answer1" class="form-control">
                <option default value=""></option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
        <p><strong>Pliny the Middling once posed this question to his students:</strong></p>
        <div class="form-group">
            <label for="answer2">If I said it was 72 degrees, would you say it was hotter or colder?</label>
            <select name="answer2" class="form-control">
                <option default value=""></option>
                <option value="hot" >It must be hotter.</option>
                <option value="right" >Yeah, that sounds about right.</option>
                <option value="cold" >No, it's totes colder!</option>
            </select>
        </div>
        <button type="submit" class="btn-lg btn-success">Why Not</button>
    </form>
    <div>
        <img src="<?php echo $result[0]; ?>" alt="<?php echo $result[1];?>">
        <h2><?php echo $result[1]; ?></h2>
    </div>
</div>
</body>
</html>