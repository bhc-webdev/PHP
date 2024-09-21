<?php

$name = "Anthony Reyna";
echo $name . "'s PHP Web Page<br>";

echo "Hello, and welcom to my page.<br>";
echo "My name is Anthony Reyna. I am 21 years old, and I am currently a college student.<br>" . 
"I like palying video games, plauing D&D, and watching videos on the interent.<br>";
echo "I am taking this class to learn more programming lanugages, and to complete my Web Design degree.<br>";

$myString = "I know the moon, and this is an alien city - Amy Lowell, A London Throughfare. 2 A.M.<br>";
echo $myString;

$brookhavenName = "Dallas College Brookhaven Campus ";
$brookhavenStreet = "3939 Valley View Lane ";
$brookhavenCity = "Farmers Branch ";
$brookhavenState = "Texas ";
$brookhavenPostal = "75244";

$brookhavenAddress = $brookhavenName . $brookhavenStreet . $brookhavenCity . $brookhavenState . $brookhavenPostal . "<br>";

echo $brookhavenAddress;

$x = 37;
$y = 6;

$sum = $x + $y;
$difference = $x - $y;
$product = $x * $y;
$quotient = $x / $y;
$modulus = $x % $y;

echo $x . " + " . $y . " = " . $sum . "<br>";
echo $x . " - " . $y . " = " . $difference . "<br>";
echo $x . " * " . $y . " = " . $product . "<br>";
echo $x . " / " . $y . " = " . $quotient . "<br>";
echo $x . " % " . $y . " = " . $modulus . "<br>";

$currentPage= $_SERVER['SCRIPT_NAME'];
echo $currentPage . "<br>";

//This is a comment for the assignment.
//This is the first version of the file.
//I will add more comments to show more updates.
//Update One: Forgot to add semicolons to certain lines, and added them where needed.
//Update Two: Added line breaks to sperate everything.
//Update Three: Added paragraph tags for seperation.
//Update Four: Testing break tags

?>