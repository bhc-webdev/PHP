<?php

$name = "Anthony Reyna";
echo "<p>" . $name . "'s PHP Web Page" . "<br></p>";

echo "<p>Hello, and welcome to my page.<br></p>";
echo "<p>My name is Anthony Reyna. I am 21 years old, and I am currently a college student.<br>I like playing video games, playing D&D, and watching videos on the interent.</p>";
echo "<p>I am taking this class to learn more programming lanugages, and to complete my Web Design degree.<br></p>";

$myString = "I know the moon, and this is an alien city - Amy Lowell, A London Throughfare. 2 A.M.";
echo $myString;

$brookhavenName = "Dallas College Brookhaven Campus";
$brookhavenStreet = " 3939 Valley View Lane";
$brookhavenCity = " Farmers Branch";
$brookhavenState = " Texas";
$brookhavenPostal = " 75244";

$brookhavenAddress = $brookhavenName . $brookhavenStreet . $brookhavenCity . $brookhavenState . $brookhavenPostal;

echo "<p>" . $brookhavenAddress . "<br></p>";

$x = 37;
$y = 6;

$sum = $x + $y;
$difference = $x - $y;
$product = $x * $y;
$quotient = $x / $y;
$modulus = $x % $y;

echo "<p>" . $x . " + " . $y . " = " . $sum . "<br></p>";
echo "<p>" . $x . " - " . $y . " = " . $difference . "<br></p>";
echo "<p>" . $x . " * " . $y . " = " . $product . "<br></p>";
echo "<p>" . $x . " / " . $y . " = " . $quotient . "<br></p>";
echo "<p>" . $x . " % " . $y . " = " . $modulus . "<br></p>";

$currentPage= $_SERVER['SCRIPT_NAME'];
echo "<p>" . $currentPage . "<br></p>";

//This is a comment for the assignment.
//This is the first version of the file.
//I will add more comments to show more updates.
//Update One: Forgot to add semicolons to certain lines, and added them where needed.
//Update Two: Added line breaks to sperate everything.

?>