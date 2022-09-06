<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Admin Homepage</title>
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
	$query=mysqli_query($conn, "SELECT * FROM `houses`");
	echo "<h1> All Listings </h1>";
	while($fetch=mysqli_fetch_array($query)){
            echo"
            <div class='container'>
                <div class='left' >
                    <img src='".rand(1,10).".png' class='house'>
                </div>
                <div class='right'>
                   <p> <h3> House ID: ".$fetch['id']."</h3> </p>
                    <p> <h3> Address: ".$fetch['address']."</h3> </p>
                    <p> Price: ".$fetch['price']. "</p>
                    <p> Year Built: ".$fetch['age']. " </p>
                    <p> Square Footage: " .$fetch['footage']. "  </p>
                    <p> Description of Home: ".$fetch['description']. "</p>
                    <p> Seller ID: ".$fetch['sellerid']. "</p>
                </div>
            </div>";
        }

    $query=mysqli_query($conn, "SELECT * FROM `sellers`");
    echo "<h1> Sellers and amount of Properties</h1>";
    while($fetch=mysqli_fetch_array($query)){
    	$test=(int)$fetch['id'];
    	$val;
    	 foreach($conn->query('SELECT sellerid,COUNT(*)
		FROM houses WHERE sellerid="$test" GROUP BY sellerid;') as $row) {
    	 	$val= $row['COUNT(*)'];
    	 }
    	 echo"
    	 <div class='container'>
            <div class='left' >
                <img src='user.png' class='house'>
            </div>
            <div class='right'>
	    	 	<p>  Seller ID: ".$fetch['id']." </p>
	    	 	<p>  Seller Username: ".$fetch['username']." </p>
	    	 	
    	 	</div>
        </div>";	
    }
    echo "<table>
    		<tr>
    			<td> Seller Id </td>
    			<td> Listings </td>
    		</tr>";
    foreach($conn->query('SELECT sellerid,COUNT(*)
		FROM houses  GROUP BY sellerid;') as $row) {
		echo "<tr>";
		echo "<td>" . $row['sellerid'] . "</td>";
		echo "<td>" . $row['COUNT(*)'] . "</td>";
		echo "</tr>";
	}
	echo"</table>";
	?>
		<h2>Want to Delete A Seller and their Listings?</h2>
	<form action="deleteSeller.php" method="POST">
		<p>Enter Seller Id: <input type="number" name="sellerid"></p>
		<input type="submit" id="deleteSeller" value="submit">
	</form>
	<?php
	$query=mysqli_query($conn, "SELECT * FROM `buyers`");
    echo "<h1> Buyers</h1>";
    while($fetch=mysqli_fetch_array($query)){
    	
    	 echo"
    	 <div class='container'>
            <div class='left' >
                <img src='user.png' class='house'>
            </div>
            <div class='right'>
	    	 	<p>  Buyer ID: ".$fetch['id']." </p>
	    	 	<p>  Buyer Username: ".$fetch['username']." </p>
	    	 	
    	 	</div>
        </div>";	
    }
    ?>
</div>
</div>
</body>
</html>
