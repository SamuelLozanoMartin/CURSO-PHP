<?php
function familyName($fname, $year) {
	$edad=date("Y")-$year;
    echo "$fname Refsnes nacio en $year y tiene la edad de $edad años<br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");
?> 

