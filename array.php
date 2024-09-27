<?php

$albumRatings = ["Mama's Gun" => "9", "Introspection" => "8", "Stereotype A" => "10", "Marble" => "7", "This is the One" => "8"];
$albumRatings["Abbey Road"] = "10";
ksort($albumRatings);

$pageContent = "<h1>Favorite Albums</h1>" . "<p>$value</p>";

$band = array (
    "The Beatles" = array("A Hard Day's Night,"=>"1964","Help!,"=>"1965","Rubber Soul,"=>"1965","Abbey Road,"=>"1969");
    "Led Zepplin" = array("Led Zepplin IV,"=>"1971");
    "Rolling Stones" = array("Let It Bleed,"=>"1969","Sticky Fingers,"=>"1971");
    "The Who" = array("Tommy"=>"1969","Quadrophenia"=>"1973","The Who by Numbers"=>"1975");
);

$value = $band ["The Who"] ["1969"];

foreach ($band as $subArray => $band) {
    $pageContent . "\n<p>The band " . $subArray . " released:<br>";
    foreach ($band as $albumName => $albumYear) {
        echo "\n$albumName in $albumYear<br>";
    }

    echo "\n</p>"
}

$rowArray = array("Tommy,"=>"1969","Quadrophenia,"=>"1973","The Who by Numbers,"=>"1975");
$who = array("The Who" = $rowArray);

foreach ($who as $subArray => $who) {
	if ($subArray == "The Who") {
		$pageContent . "\n<p>The band" . $subArray . " released:<br>\n";
		foreach ($rowArray as $albumName => $albumYear) {
			echo "\n$albumName in $albumYear<br>";
		}
		echo "</p>";
	}
}

$seventyArray1 = array("Led Zepplin IV" => "1971");
$seventyArray2 = array("Sticky Fingers" => "1971");
$seventyArray3 = array("Quadrophenia" => "1973", "The Who by Numbers" => "1975");
$band70s = array("Led Zepplin" = $seventyArray1, "Rolling Stones" = $seventyArray2, "The Who" = $seventyArray3);

foreach ($band70s as $subArray => $band70s) {
    $pageContent . "\n<p>The band " . $subArray . " released:<br>";
    foreach ($band70s as $albumName => $albumYear) {
        echo "\n$albumName in $albumYear<br>";
    }

    echo "</p>";
}

echo "\n<p>$pageContent</p>";

//First Test
//Second Test

?>