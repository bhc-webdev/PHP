<?php

$name = "Anthony Reyna";
echo "<p>" . $name . "'s PHP Web Page" . "</p>";

echo "<p>Hello, and welcome to my page.</p>";
echo "<p>My name is Anthony Reyna. I am 21 years old, and I am currently a college student.</p>"
"<p>I like palying video games, plauing D&D, and watching videos on the interent.</p>";
echo "<p>I am taking this class to learn more programming lanugages, and to complete my Web Design degree.</p>";

$myString = "<p>I know the moon, and this is an alien city - Amy Lowell, A London Throughfare. 2 A.M.</p>";
echo $myString;

$brookhavenName = "Dallas College Brookhaven Campus ";
$brookhavenStreet = "3939 Valley View Lane ";
$brookhavenCity = "Farmers Branch ";
$brookhavenState = "Texas ";
$brookhavenPostal = "75244 ";

$brookhavenAddress = $brookhavenName . $brookhavenStreet . $brookhavenCity . $brookhavenState . $brookhavenPostal;

echo "<p>" . $brookhavenAddress . "</p>";

$x = 37;
$y = 6;

$sum = $x + $y;
$difference = $x - $y;
$product = $x * $y;
$quotient = $x / $y;
$modulus = $x % $y;

echo "<p>" . $x . " + " . $y . " = " . $sum . "</p>";
echo "<p>" . $x . " - " . $y . " = " . $difference . "/<p>";
echo "<p>" . $x . " * " . $y . " = " . $product . "/<p>";
echo "<p>" . $x . " / " . $y . " = " . $quotient . "</p>";
echo "<p>" . $x . " % " . $y . " = " . $modulus . "</p>";

$currentPage= $_SERVER['SCRIPT_NAME'];
echo "<p>" . $currentPage . "</p>";

//This is a comment for the assignment.
//This is the first version of the file.
//I will add more comments to show more updates.
//Update One: Forgot to add semicolons to certain lines, and added them where needed.
//Update Two: Added line breaks to sperate everything.
//Update: Testing paragraph tags.