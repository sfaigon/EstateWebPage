<!doctype html>

<html>

<head lang="en">
    <meta charset="UTF-8">
    
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<div class="center">
<?php
    $servername = "localhost";
    $username = "anguyen123";
    //username = password = dbname
    $password = "anguyen123";
    $dbname = "anguyen123";


    $conn = new mysqli($servername, $username, $password, $dbname);
    if(ISSET($_POST['filter'])){
        $price=$_POST['price'];
        $footage=$_POST['footage'];
        $age=$_POST['age'];
 
        $query=mysqli_query($conn, "SELECT * FROM `houses` WHERE `price`<'$price' && `footage` < '$footage' && `age` > '$age'") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){
            echo"
            <div class='container'>
                <div class='left' >
                    <img src='".rand(1,10).".png' class='house'>
                </div>
                <div class='right'>
                    <p> <h3> Address: ".$fetch['address']."</h3> </p>
                    <p> Price: ".$fetch['price']. "</p>
                    <p> Year Built: ".$fetch['age']. " </p>
                    <p> Square Footage: " .$fetch['footage']. "  </p>
                    <p> Description of Home: ".$fetch['description']. "</p>
                </div>
            </div>";
        }


    }else if(ISSET($_POST['reset'])){
        $query=mysqli_query($conn, "SELECT * FROM `houses`") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){
            echo"<tr>
                    <td>".$fetch['id']."</td>
                    <td>".$fetch['address']."</td>
                    <td>".$fetch['price']."</td>
                    <td>".$fetch['age']."</td>
                    <td>".$fetch['footage']."</td>
                    <td>".$fetch['description']."</td>
                </tr>";
        }
    }else{
        $query=mysqli_query($conn, "SELECT * FROM `houses`") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){
            echo"<tr>
                    <td>".$fetch['id']."</td>
                    <td>".$fetch['address']."</td>
                    <td>".$fetch['price']."</td>
                    <td>".$fetch['age']."</td>
                    <td>".$fetch['footage']."</td>
                    <td>".$fetch['description']."</td>
                </tr>";
        }
    }
?>
</div>
</html>