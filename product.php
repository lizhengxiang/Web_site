<?php
$products = array(
	"Green " => "32",
	"candlestick" => "4",
	"coffee table" => "89"
);
echo "<pre>";
printf("%-20s%20s\n", "name", "Price");
printf("%'-40s\n", "");
foreach($products as $key => $val){
	printf("%-20s%20.2f\n", $key, $val);
}
echo "</pre>";
?>
