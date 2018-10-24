<?php
/**
 * Created by PhpStorm.
 * User: iangoodrich
 * Date: 10/24/18
 * Time: 9:40 AM
 */
class Triangle
{
    public $sideA;
    public $sideB;
    public $sideC;

    function __construct($sideA, $sideB, $sideC)
    {
        $this->sideA = $sideA;
        $this->sideB = $sideB;
        $this->sideC = $sideC;
    }

    function triangleTyping()
    {
        if (($this->sideA == $this->sideB) && ($this->sideA == $this->sideC)){

            return "You've got an equilateral triangle";

        } elseif (($this->sideA == $this->sideB) || ($this->sideA == $this->sideC)) {

            return "You've got an isosceles triangle";

        } else {

            return "You've got a scalene triangle";
        }

    }

    function triangleTest()
    {
        if (($this->sideA + $this->sideB > $this->sideC) &&
            ($this->sideB + $this->sideC > $this->sideA) &&
            ($this->sideC + $this->sideA > $this->sideB))
        {

            return $this->triangleTyping();

        } else {

            return "Sorry this is not a triangle";
        }
    }





}
if (isset($_GET["callPseudoFunction"])){
    $sideA = $_GET["sideA"] ?? 0;
    $sideB = $_GET["sideB"] ?? 0;
    $sideC = $_GET["sideC"] ?? 0;

    $newTriangle = new Triangle($sideA, $sideB, $sideC);


    $result = $newTriangle->triangleTest();
}


?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Triangle Calculator</title>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Enter three values for the sides of a triangle,</h1>
        <h2>then we'll determine if they make a triangle</h2>
        <h2>and if so what type it is.</h2>
    </div>
    <form action="GET" >
        <div class="form-group">
            <label for="sideA">Side A</label>
            <input type="number" step="0.01" name="sideA" class="form-field" placeholder="Enter a Number">
        </div>
        <div class="form-group">
            <label for="sideB">Side B</label>
            <input type="number" step="0.01" name="sideB" class="form-field" placeholder="Enter a Number">
        </div>
        <div class="form-group">
            <label for="sideC">Side C</label>
            <input type="number" step="0.01" name="sideC" class="form-field" placeholder="Enter a Number">
        </div>
        <div class="form-group">
            <input type="hidden" name="callPseudoFunction" value="fire">
        </div>
        <button type="submit">Push</button>
    </form>


    <div>
        <?php if(isset($result)): ?>
            <div>
                <p><?php echo $result; ?></p>
            </div>
        <?php endif; ?>
    </div>
</div>
</body>
</html>

