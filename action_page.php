<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT RegisterNumber, MA101, CY100 FROM result WHERE RegisterNumber = $_GET["id"]";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " RegisterNumber" . $row["RegisterNumber"]. "MA101  " . $row["MA101"]. " CY100 " . $row["CY100"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>