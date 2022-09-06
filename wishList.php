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
	<p><a href="ViewHomes.php"> Back to your homepage </a></p>
<?php
$buyerid=3;
$servername = "localhost";
	$username = "anguyen123";
	$password = "anguyen123";
	$dbname = "anguyen123";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$id= htmlspecialchars($_REQUEST['id']);
}
$address;
$price;
$footage;
$description;
$age;

	$sql = "SELECT * FROM houses WHERE id= $id";
		if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
       
        while($row = mysqli_fetch_array($result)){
            $address=$row['address'];
            $price=$row['price'];
            $footage=$row['footage'];
            $description=$row['description'];
            $age=$row['age'];


        }
      	
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

$sql="INSERT INTO wishlist (id,address, price, age, footage, buyerid, description) VALUES ('$id','$address','$price','$age','$footage', '$buyerid', '$description')";
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
