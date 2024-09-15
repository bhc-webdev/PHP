<?php

$name = "Anthony Reyna"
echo $name . "'s PHP Web Page";

echo "Hello, and welcom to my page.";
echo "My name is Anthony Reyna. I am 21 years old, and I am currently a college student.
I like palying video games, plauing D&D, and watching videos on the interent.";
echo "I am taking this class to learn more programming lanugages, and to complete my Web Design degree.";

$myString = "I know the moon, and this is an alien city - Amy Lowell, A London Throughfare. 2 A.M.";
echo $myString

$brookhavenName = "Dallas College Brookhaven Campus"
$brookhavenStreet = "3939 Valley View Lane"
$brookhavenCity = "Farmers Branch"
$brookhavenState = "Texas"
$brookhavenPostal = "75244"

$brookhavenAddress = $brookhavenName . $brookhavenStreet . $brookhavenCity . $brookhavenState . $brookhavenPostal;

echo $brookhavenAddress;

$x = 37;
$y = 6;

$sum = $x + $y;
$difference = $x - $y;
$product = $x * $y;
$quotient = $x / $y;
$modulus = $x % $y;

echo $x . " + " . $y . " = " . $sum
echo $x . " - " . $y . " = " . $difference;
echo $x . " * " . $y . " = " . $product;
echo $x . " / " . $y . " = " . $quotient;
echo $x . " % " . $y . " = " . $modulus;

$currentPage= $_SERVER['SCRIPT_NAME'];
echo $currentPage;

//This is a comment for the assignment.
//This is the first version of the file.
//I will add more comments to show more updates.



?>