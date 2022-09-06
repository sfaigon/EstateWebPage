<?php 
	$servername = "localhost";
	$username = "anguyen123";
	//username = password = dbname
	$password = "anguyen123";
	$dbname = "anguyen123";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
	} 

	// to create houses
$sql = "CREATE TABLE houses (id INT(7) unsigned auto_increment primary key, address varchar(150) not null, price Int(9) not null, age int(3) not null, footage int(8) not null, sellerid int(7),description varchar(800))";
if ($conn->query($sql) === TRUE) {
} else {
//table already exists
	echo "Error creating table: " . $conn->error;
}




?>