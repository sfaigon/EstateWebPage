<?php
	session_start();
    $servername = "localhost";
    $username = "anguyen123";
    //username = password = dbname
    $password = "anguyen123";
    $dbname = "anguyen123";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    } 



//Wishlist
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query(
$conn,
"SELECT * FROM `houses` WHERE `code`='$code'"
);
$row = mysqli_fetch_assoc($result);
$name = $row['address'];
$code = $row['id'];
$price = $row['price'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price)
);

if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your wishlist!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your wishlist!</div>";	
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your wishlist!</div>";
	}

	}
}

$conn->close();


?>


<html>
<head>
	<link type="text/css" href="cart.css" rel="stylesheet" />
</head>
<body>
	<?php
		if(!empty($_SESSION["shopping_cart"])) {
			$cart_count = count(array_keys($_SESSION["shopping_cart"]));
	?>
			<div class="cart_div">
				<a href="cart.php"><img src="wishlist_icon.png" /> Cart<span>
				<?php echo $cart_count; ?></span></a>
			</div>
		<?php
		}
		?>
		
	<?php
		$result = mysqli_query($conn,"SELECT * FROM `houses`");
		while($row = mysqli_fetch_assoc($result)){
			echo "<div class='product_wrapper'>
			<form method='post' action=''>
			<input type='hidden' name='code' value=".$row['id']." />
			<div class='name'>".$row['address']."</div>
			<div class='price'>$".$row['price']."</div>
			<button type='submit' class='buy'>Buy Now</button>
			</form>
			</div>";
        }
		mysqli_close($con);
	?>

	<div style="clear:both;"></div>

	<div class="message_box" style="margin:10px 0px;">
	<?php echo $status; ?>
	</div>
</body>
</html>