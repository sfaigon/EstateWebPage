<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Adding Home Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div class="center"> 
		<img src="Logo.png" class="center">
		<div>
			<form action="addHtoDB.php" method="post">
				<h3>New Home</h3>
				<p> Address: <input type="text" name="address"></p>
				<p> Price : <input type="number" name="price"></p>
				<p> Year Built : <input type="number" name="age"></p>
				<p> Square Footage : <input type="number" name="footage"></p>
				<p> Description : <input type="text" name="description"></p>
				<input type="submit" id= "btnhome" value="submit">
				<a href="sellerHpage.php"> <input type="button" id= "btncan" value="cancel"></a>
			</form>
		</div>
	
	</div>

</body>

</html>
