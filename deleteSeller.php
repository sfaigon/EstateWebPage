<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Delete Seller</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
<div class="center">
	<img src="Logo.png" class="center">
</div>
<div class="center">
<div>
	<?php 
    	$servername = "localhost";
			$username = "anguyen123";
			//username = password = dbname
			$password = "anguyen123";
			$dbname = "anguyen123";

			$conn = new mysqli($servername, $username, $password, $dbname);

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$sellerid= htmlspecialchars($_REQUEST['sellerid']);
			}
			$sql = mysqli_query($conn,"DELETE FROM houses WHERE sellerid = $sellerid");
			
			$sql = mysqli_query($conn,"DELETE FROM sellers WHERE id = $sellerid");
			
		?>
	<h2><a href="adminHpage.php">Back to Home Page</a></h2>
</div>
</div>
</body>
</html>