<?php
$menuArray = array( 
    array(" ", 0),
    array("Pineapple Boron Surprise",1, "Pineapple", "Boron"),
    array("Tasty Things a la Shrimp", 2,"Shrimp", "Cheese", "LSD"),
    array("Pineapple Shell-fish Capote", 3, "Pineapple", "Shrimp", "True Crime"),
    array("Peanuts", 4, "Peanuts"), 
    array("Fleck of Seagulls", 5, "80's New Wave", "Aquanet", "Shallots"),
    array("Crap", 6, "Contemporary Country"));

$allergyArray = array("No Allergies", "Pineapple", "Shrimp", "Peanuts", "Boron", "80's New Wave", "Contemporary Country", "Cheese");

if (isset($_GET["menuItem"]))
{
    $allergy1 = $_GET["allergy1"];
    $allergy2 = $_GET["allergy2"];
    $menuItem = $_GET["menuItem"];
    $menuLine = $menuArray[$menuItem];
    $message = allergyCheck ($allergy1, $allergy2, $menuLine);
}

function allergyCheck($allergy1, $allergy2, $menuLine)
{
    if ($menuLine[0] == " "){
        return " ";
    }
    elseif (in_array($allergy1, $menuLine) || in_array($allergy2, $menuLine)){
        return "You really shouldn't eat this.";
    }
    else {
        return "You're good. Go to town!";
    }
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
        <form action="" >
            <div class="form-group">
                <label for="menuItem">Menu Items</label>
                <select id="menuItem" name="menuItem" type="text">
                    <?php
                    foreach ($menuArray as $item){
                        echo "<option value=$item[1]>$item[0]</option> ";
                    }
                    ?>
                </select>

            </div>
            <div class="form-group">
                <label for="allergy1">Allergy 1</label>
                <select name="allergy1" type="text">
                    <?php
                    foreach ($allergyArray as $allergy){
                        echo "<option value='$allergy'>$allergy</option> ";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="allergy2">Allergy 2</label>
                <select name="allergy2" type="text">
                    <?php
                    foreach ($allergyArray as $allergy){
                        echo "<option value='$allergy'>$allergy</option> ";
                    }
                    ?>
                </select>

            </div>
            <button type="submit">Push</button>
        </form>


    <div>
        <?php if(isset($message)): ?>
            <div>
                <p><?php echo $message; ?></p>
            </div>
        <?php endif; ?>
    </div>
</div>
</body>
</html>
