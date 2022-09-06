
<?php
    $servername = "localhost";
    $username = "anguyen123";
    //username = password = dbname
    $password = "anguyen123";
    $dbname = "anguyen123";

$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "SELECT * FROM houses WHERE price > 50000";
	if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>address</th>";
                echo "<th>price</th>";
                echo "<th>age</th>";
                echo "<th>footage</th>";
                echo "<th>description</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['footage'] . "</td>";
                 echo "<td>" . $row['description'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
$conn->close();

?>