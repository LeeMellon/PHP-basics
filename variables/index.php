<?php
/**
 * Created by PhpStorm.
 * User: iangoodrich
 * Date: 10/18/18
 * Time: 3:04 PM
 */
    $spec_drink_title = "Llama lassi";
    $spec_drink_tag = "Made by free-range Llamas (may include tree nuts, hay, and alpaca disdain)";
    $spec_drink_price = "$12.00";
    $spec_app_title = "Topol Tapas";
    $spec_app_tag ="Small treats that will make you wish you were a rich man. Highly entertaining. Completely inedible.";
    $spec_app_price = "$28.50";
    $spec_soup_title = "Vichy Swabs";
    $spec_soup_tag = "Cold soup made from 'Vintage' French cotton balls. Just as good as it sounds. $27.00 cup,";
    $spec_soup_price = "$5.00 bowl.";
    $spec_entree_title = "Wellington's Beefs";
    $spec_entree_tag = "Puff pastry filled with angry letters written by the 1st Duke of Wellington, because...yeah";
    $spec_entree_price = "$55.00.";
    $spec_desert_title = "Banana's Foster";
    $spec_desert_tag = "...no really, THAT Banana's Foster. Because you need something to light this dumpster fire off with right?";
    $spec_desert_price = "Complementary";

?>


<div>
    <h1>Wecome to Randos'</h1>
    <h2>Where the menu in created from sctarch every day!</h2>
    <h4>(by pulling random words out of a hat)</h4>
</div>
<br>
<h1>Today's Menu</h1>
<div class="drink">
    <h2>To Drink: <?php echo $spec_drink_title; ?></h2>
    <p><?php echo $spec_drink_tag;?></p>
    <p><?php echo $spec_drink_price; ?></p>
</div>
<div class="app">
    <h2>Starters: <?php echo $spec_app_title; ?></h2>
    <p><?php echo $spec_app_tag; ?></p>
    <p><?php echo $spec_app_price; ?></p>
</div>
<div class="soup">
    <h2>Soup du Jour: <?php echo $spec_soup_title ?></h2>
    <p><?php echo $spec_soup_tag ?></p>
    <p><?php echo $spec_soup_price ?></p>
</div>
<div class="entree">
    <h2>Mains: <?php echo $spec_entree_title ?></h2>
    <p><?php echo $spec_entree_tag ?></p>
    <p><?php echo $spec_entree_price ?></p>
</div>
<div class="desert">
    <h2>Dessert: <?php echo $spec_desert_title ?></h2>
    <p><?php echo $spec_desert_tag ?></p>
    <p><?php echo $spec_desert_price ?><p>
</div>


<h5>Closed Wednesdays in observance of Tuesday night bowling league.</h5>