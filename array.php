<?php
$name = array("lizhengxiang", "lizhengqian", "liyiying");
for($i = 0; $i < 3; $i++){
	echo "<h1> $name[$i] </h1>";
	echo "<br/>"; 
}

$character = array(
	"name" => "lizhengxiang",
	"age" => "23"
);

echo $character['name'];
?>
