<?php
$pageContent = "Favorite Albums";

$albumRatings = ["Mama's Gun" => "9", "Introspection" => "8", "Stereotype A" => "10", "Marble" => "7", "This is the One" => "8"];
$albumRatings["Abbey Road"] = "10";
  
ksort($albumRatings)
foreach ($albumRatings as $albumTilte => $rating) {
    echo "\n<p>$albumTitle is a $rating out of 10.</p>";
}

$beatles = ["A Hard Day's Night"=>"1964", "Help!"=>"1965", "Rubber Soul"=>"1965", "Abbey Road"=>"1969"];
$ledZepplin = ["Led Zepplin IV"=>"1971"]; 
$rollingStones = ["Let It Bleed"=>"1969", "Sticky Fingers"=>"1971"];
$theWho = ["Tommy"=>"1969", "Quadrophenia"=>"1973", "The Who by Numbers"=>"1975"];

$band = ["The Beatles" => $beatles, "Led Zepplin" => $ledZepplin, "Rolling Stones" => $rollingStones, "The Who" => $theWho];

foreach ($band as $bandName => $albumList) {
    echo "\n<h2>$band</h2><ul>";
    foreach ($albumList as $songTitle => $songYear) {
        echo "\n<li>$songTitle - $songYear</li>";
    }
    echo "\n</ul>";
}





/*$value = $band ["The Who"] ["1969"];
. "$albumRatings" . "<p>$value</p>"

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



ksort($movies); 37 echo '<tr><td colspan="2"><strong> Sorted by title:</strong></td></tr>'; 38 foreach ($movies as $title => $rating) { 39 echo "<tr><td>$rating</td> 40 <td>$title</td></tr>\n"; 41 }

}
    */

echo "\n<p>$pageContent</p>";

//First Test
//Second Test

?>