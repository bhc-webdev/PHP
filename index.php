<?php

$name = "Anthony Reyna";
echo $name . "'s PHP Web Page";

echo "<br>Hello, and welcome to my page.";
echo "<br>My name is Anthony Reyna. I am 21 years old, and I am currently a college student.<br>I like playing video games, playing D&D, and watching videos on the interent.";
echo "<br>I am taking this class to learn more programming lanugages, and to complete my Web Design degree.";

$myString = "I know the moon, and this is an alien city - Amy Lowell, A London Throughfare. 2 A.M.";
echo "<br>" . $myString;

$brookhavenName = "Dallas College Brookhaven Campus";
$brookhavenStreet = " 3939 Valley View Lane";
$brookhavenCity = " Farmers Branch";
$brookhavenState = " Texas";
$brookhavenPostal = " 75244";

$brookhavenAddress = $brookhavenName . $brookhavenStreet . $brookhavenCity . $brookhavenState . $brookhavenPostal;

echo "<br>" . $brookhavenAddress;

$x = 37;
$y = 6;

$sum = $x + $y;
$difference = $x - $y;
$product = $x * $y;
$quotient = $x / $y;
$modulus = $x % $y;

echo "<br>" . $x . " + " . $y . " = " . $sum;
echo "<br>" . $x . " - " . $y . " = " . $difference;
echo "<br>" . $x . " * " . $y . " = " . $product;
echo "<br>" . $x . " / " . $y . " = " . $quotient;
echo "<br>" . $x . " % " . $y . " = " . $modulus;

$currentPage= $_SERVER['SCRIPT_NAME'];
echo "<br>" . $currentPage;

//This is a comment for the assignment.
//This is the first version of the file.
//I will add more comments to show more updates.
//Update One: Forgot to add semicolons to certain lines, and added them where needed.
//Update Two: Added line breaks to sperate everything.

?>