<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Adding Home to Database</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>

<body>
<div class="center">
	<img src="Logo.png" class="center">
	<p><a href="sellerHpage.php">Back to your Listing</a></p>
<?php
	
	$servername = "localhost";
	$username = "anguyen123";
	$password = "anguyen123";
	$dbname = "anguyen123";

$sellerid = 5;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$address= htmlspecialchars($_REQUEST['address']);
	$price= htmlspecialchars($_REQUEST['price']);
	$age= htmlspecialchars($_REQUEST['age']);
	$footage= htmlspecialchars($_REQUEST['footage']);
	$description= htmlspecialchars($_REQUEST['description']);

}

$sql = "INSERT INTO houses (address, price, age, footage, sellerid, description) VALUES ('$address','$price','$age','$footage', '$sellerid', '$description')";
if ($conn->query($sql) === TRUE) {
    echo "New House successfully saved";
} else {
    echo "Error: New House failed to be saved";
}
$conn->close();
?>	
</div>
</body>

</html>