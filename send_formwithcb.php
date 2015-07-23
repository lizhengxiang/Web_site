<!DOCTYPE html>
<html>
<head>
<title> A simple response</title>
</head>
<body>
<p><h1>welcome, <strong><?php echo $_POST['user']; ?><strong>!</h1></p>

<?php
if(!empty($_POST['products'])){
	echo "<ul>";
	foreach($_POST['products'] as $value){
		echo "<h1><li>$value</li></h1>";
	}
	echo "</ul>";	
}else{
	echo "NONE";
}
?>
</body>
</html>
