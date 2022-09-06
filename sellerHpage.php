<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Seller Homepage</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
<div class="center">
	<img src="Logo.png" class="center">
</div>
<div class="center">
<div>
	<p><a href="addHome.php"> Add a Home to your listings</a> </p>
	<?php 
	$servername = "localhost";
	$username = "anguyen123";
	//username = password = dbname
	$password = "anguyen123";
	$dbname = "anguyen123";

	$sellerid = 5;

	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "SELECT * FROM houses WHERE sellerid= $sellerid";
	if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
       
        while($row = mysqli_fetch_array($result)){
            echo"
            <div class='container'>
                <div class='left' >
                    <img src='".rand(1,10).".png' class='house'>
                </div>
                <div class='right'>
                	<p> Id: ".$row['id']."</p>
                    <p> <h3> Address: ".$row['address']."</h3> </p>
                    <p> Price: ".$row['price']. "</p>
                    <p> Year Built: ".$fetch['age']. " </p>
                    <p> Square Footage: " .$row['footage']. "  </p>
                    <p> Description of Home: ".$row['description']. "</p>
                </div>
            </div>";
        }
      	
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


	?>
</div>
<div>
	<p>Want to Delete a listing?</p>
	<form action="deleteHouse.php" method="post">
		<h3>Home Id's</h3>
		<p>Enter Home ID: <input type="number" name="id"></p>
		<input type="submit" id="deleteHouse" value="submit">
	</form>
</div>
</div>
</body>

</html>
