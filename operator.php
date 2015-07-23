<?php

$int_a = 78;
$float_b = 78.0;
if($int_a == $float_b)
	echo "true";
echo "<br/>";
if($int_a === $float_b)
	echo "true";
define("THE_YEAR", "2012", true);
echo THE_YEAR;
echo "<br/>";
$counter = 1;
while($counter < 10){
	echo $counter;
	echo "\t";
	$counter++;
}
echo "<br/>";
$new_string = strtoupper("lizhengxiang");
echo "<h1>$new_string</h1>";

function some_function($arguement_1, $arguement_2){
	//arguement_1 + arguement_2
	return $arguement_1 + $arguement_2;
}

echo some_function(3, 7);
?>
