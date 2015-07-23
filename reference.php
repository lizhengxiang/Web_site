<?php
function addFive(&$num){
	$num += 5;
}

$orignum = 10;
addFive($orignum);
echo "<h1>$orignum<h1>";

?>
