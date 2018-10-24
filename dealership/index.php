<?php
/**
 * Created by PhpStorm.
 * User: iangoodrich
 * Date: 10/24/18
 * Time: 12:34 PM
 */



class Car
    {
        private $make;
        private $model;
        private $year;
        private $price;
        private $miles;
        private $imgUrl;

        function __construct($make, $model, $year, $miles, $imgUrl)
        {
            $this->make = $make;
            $this->model = $model;
            $this->year = $year;
            $this->miles = $miles;
            $this->imgUrl = $imgUrl;
        }

        function getMake() {
            return $this->make;
        }

        function getModel() {
            return $this->model;
        }

        function getYear() {
            return $this->year;
        }

        function getMiles() {
            return $this->miles;
        }

        function getImgUrl() {
            return $this->imgUrl;
        }

        function getPrice(){
            return $this->price;
        }

        function setMake($make){
            $this->make = $make;
        }

        function setModel($model){
            $this->model = $model;
        }

        function setYear($year){
            $this->year = $year;
        }

        function setMiles($miles){
            $this->miles = $miles;
        }

        function setImgUrl($imgUrl){
            $this->imgUrl = $imgUrl;
        }

        function setPrice(){
            $now = (int)(new DateTime)->format("Y");
            $this->price = round(100000 /  ($now - $this->year +1 ), 2);
        }


}


$newCar1 = new Car("Pontiac", "Cinder Budgie", 1978, 123000, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTf2EtIb-l_CJdSix1KT7JipCNcFmi4mTuh6lejlxcNBVqUTz9t" );
$newCar2 = new Car("Yugo", "Proletari-not", 1999, 12, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR60RbE325-TK7fyr427NcXyhYa4tufScP2kZQysYWesrZLK2SZ2A");
$newCar3 = new Car("Volvo", "Boxy", 2010, 800158, "data:image/jpeg;base64,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");
$newCar4 = new Car("Porsche", "Ennui", 2018, 0, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_LK8o5Yt6w1umTWDc-70RjeXZPItD9mTlYIN3lUGmZliHvVfK");
$newCar5 = new Car("Audi", "Meh", 1942, 567890, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKMPoDo5xsNaXO86ciwWZAw2rh8HFlzUvtGrNfPAKSo9iIKchP");

$currentStock =array($newCar1, $newCar2, $newCar3, $newCar4, $newCar5);

function getPriceRange($currentStock){
    $priceArray = array();
    $valuesArray = array();
    foreach ($currentStock as $car){
        $car->setPrice();
        $priceArray[] = $car->getPrice();
    }
    $valuesArray[] = min($priceArray);
    $valuesArray[] = max($priceArray);
    return $valuesArray;
}


function getYearsRange($currentStock){
    $yearsArray = array();
    $valuesArray = array();
    foreach ($currentStock as $car) {
        $yearsArray[]=$car->getYear();
     }
    $valuesArray[] = min($yearsArray);
    $valuesArray[] = max($yearsArray);
    return $valuesArray;
}

$minPriceFilter = $_GET["minPriceFilter"] ?? 0 ;
$maxPriceFilter = $_GET["maxPriceFilter"] ?? 0;
$minYearFilter = $_GET["minYearFilter"] ?? 0;
$maxYearFilter = $_GET["maxYearFilter"] ?? 0;

function filter($minPriceFilter, $maxPriceFilter, $minYearFilter, $maxYearFilter, $minPrice, $minYear, $currentStock) {
    if (($minPriceFilter < $minPrice) || ($minYearFilter < $minYear)){
        return "Your filter criteria are invalid";
    } else {
        $filteredSet = array();
        foreach($currentStock as $car){
            $carPrice = $car->getPrice();
            if(($carPrice >= $minPriceFilter) && ($carPrice <= $maxPriceFilter)){
                $filteredSet[] = $car;
            }

        };

        for ($x = 0; $x < count($filteredSet); $x++ ){
            $carYear = $filteredSet[$x]->getYear();
            if(($carYear < $minYearFilter) || ($carYear >$maxYearFilter )){
               unset($filteredSet[$x]);
                }

            }
        if(count($filteredSet) > 0){
        return $filteredSet;
        } else{
        return "Your search returned no results.";
        }
    }
};


$minYear = getYearsRange($currentStock)[0];
$maxYear = getYearsRange($currentStock)[1];

$minPrice = getPriceRange($currentStock)[0];
$maxPrice = getPriceRange($currentStock)[1];

$filteredSet = filter($minPriceFilter, $maxPriceFilter, $minYearFilter, $maxYearFilter, $minPrice, $minYear, $currentStock);
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
        <div class="form-group" >
            <label for="minPriceFilter">Your Minimum Price</label>
            <input type="number" name="minPriceFilter" placeholder="$ <?php echo $minPrice ?> or Higher">
        </div>
        <div class="form-group" >
            <label for="maxPriceFilter">Your MaximumPrice</label>
            <input type="number" name="maxPriceFilter" placeholder="$ <?php echo $maxPrice ?> or Lower">
        </div>
        <div class="form-group" >
            <label for="minYearFilter">From Year</label>
            <input type="number" name="minYearFilter" placeholder="<?php echo $minYear ?> or Later">
        </div>
        <div class="form-group" >
            <label for="maxYearFilter">To Year</label>
            <input type="number" name="maxYearFilter" placeholder="<?php echo $maxYear ?> or Earlier">
        </div>
        <div class="form-filed">
            <input type="hidden" name="pseudoFunction" value="click">
        </div>
        <button type="submit" >Submit</button>
    </form>
<?php if(is_array($filteredSet)): ?>
   <?php foreach ($filteredSet as $car) {
       $price = $car->getPrice();
       $year = $car->getYear();
       $make = $car->getMake();
       $model = $car->getModel();
       $miles = $car->getMiles();
       $imgUrl = $car->getImgUrl();
        echo "<div style='border: darkgray 7px solid; width: 600px; height: 400px'>
                <div>
                <img src='$imgUrl' alt='image of a $year $make $model'>
                </div>
                <div>
                <h3>$year $make $model</h3>
                <h4>Odometer: $miles mi</h4>
                <h4><strong>$ $price</strong></h4>
                </div>
            </div>";
            }
    ?>
<?php elseif (is_string($filteredSet)): {
        echo $filteredSet;
    }?>
<?php endif; ?>

</div>
</body>
</html>


