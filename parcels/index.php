<?php
/**
 * Created by PhpStorm.
 * User: iangoodrich
 * Date: 10/24/18
 * Time: 10:53 AM
 */

class Parcel
{
    private $height;
    private $length;
    private $width;
    private $weight;
    private $volume;
    private $price;


    function __construct($height, $weight, $length, $width)
    {
        $this->weight = $weight;
        $this->height = $height;
        $this->length = $length;
        $this->width = $width;
    }

    function getPrice()
    {
        return $this->price;
    }

    function setPrice()
    {
        $this->price = $this->calcPrice();
    }

    function getHeight()
    {
        return $this->height;
    }

    function setHeight($height)
    {
        $this->height = $height;
    }

    function getWeight()
    {
        return $this->weight;
    }

    function setWeight($weight)
    {
        $this->weight = $weight;
    }

    function getLength()
    {
        return $this->length;
    }

    function setLength($length)
    {
        $this->length = $length;
    }

    function getWidth()
    {
        return $this->width;
    }

    function setWidth($width)
    {
        $this->width = $width;
    }

    function getVolume()
    {
        return $this->volume;
    }

    function setVolume()
    {
        $this->volume = $this->length * $this->width * $this->height;
    }

    function calcPrice()
    {
        if(!($this->volume)){
            $this->getVolume();
        }else {
            if($this->volume > 1728 ){
                return round((($this->weight + ($this->volume * .1)) * .7),2);
            } else {
                return $this->weight * 2;
            }
        }
    }

}

if (isset($_GET["callPseudoCreate"])){
    $height = $_GET["height"];
    $length = $_GET["length"];
    $width = $_GET["width"];
    $weight = $_GET["weight"];

    $newParcel= new Parcel($height, $weight, $length, $width);

    $newParcel->setVolume();
    $volume = $newParcel->getVolume();
    $volumeFeet = round($volume/1728, 2);

    $newParcel->setPrice();
    $cost = $newParcel->getPrice();
}






?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Shipping Calculator</title>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Enter the dimensions and weight of your parcel</h1>
        <h2>then we'll determine the one-size-fits-all price to ship it anywhere in the world</h2>
        <h2>because...magic?</h2>
    </div>
    <form action="GET" >
        <div class="form-group">
            <label for="height">Height</label>
            <input type="number" step="0.01" name="height" class="form-field" placeholder="Number in Inches">
        </div>
        <div class="form-group">
            <label for="length">Length</label>
            <input type="number" step="0.01" name="length" class="form-field" placeholder="Number in Inches">
        </div>
        <div class="form-group">
            <label for="width">Width</label>
            <input type="number" step="0.01" name="width" class="form-field" placeholder="Number in Inches">
        </div>
        <div class="form-group">
            <label for="weight">Weight</label>
            <input type="number" step="0.01" name="weight" class="form-field" placeholder="Number in Ounces">
        </div>
        <div class="form-group">
            <input type="hidden" name="callPseudoCreate" value="fire">
        </div>
        <button type="submit">Push</button>
    </form>


    <div>
        <?php if (isset($_GET["callPseudoCreate"])): ?>
            <div>
                <div class="card">
                    <h3><?php echo "Your parcel's volume is $volume cubic inches, or $volumeFeet cubic feet. "?></h3>
                    <h3><?php echo "Your cost to ship is $ $cost" ?></h3>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
</body>
</html>



