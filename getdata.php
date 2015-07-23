<?php
$data_array = getdate();
foreach($data_array as $key => $val){
	echo "$key = $val";
	echo "<br/>";
}
?>
