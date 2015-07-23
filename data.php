<?php
$datas = array(
	array('mon' => 1, 'mday' => 25, 'year' => '2012'),
	array('mon' => 2, 'mday' => 26, 'year' => '2013'),
	array('mon' => 3, 'mday' => 27, 'year' => '2014'),
	array('mon' => 4, 'mday' => 28, 'year' => '2015')
);

$format = include("local_format.php");
foreach($datas as $data){
	printf("$format", $data['mon'], $data['mday'], $data['year']);
}
?>
