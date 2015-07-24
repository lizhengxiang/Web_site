<?php 

$mysqli = new mysqli_connect("localhost", "root", "", "user");
if(mysqli_connect_errno()){
	printf("connect failed: %s", mysqli_connect_errno());
	//echo mysqli_connect_errno();
	exit();
}else{
	printf("Host informattion: %s\n", mysql_get_host_info($mysqli));
}


/*$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

$sql = 'CREATE DATABASE LZXA_db';
if (mysql_query($sql, $link)) {
    echo "Database my_db created successfully\n";
} else {
    echo 'Error creating database: ' . mysql_error() . "\n";
}*/
$sql = "CREATE TABLE student(
		id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		name CHAR(20)
	)";
$res = mysqli_query($link, $sql);
if($res === TRUE){
	echo "OK!!";
}else{
	echo "ERROR";
}

mysql_close($link);

?>
