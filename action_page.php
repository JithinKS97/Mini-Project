<?php
include 'connection.php';
$myarray = [];
$sql="SELECT * FROM Course;";
$sql1="SELECT * FROM Course_code;";
$result1 = $con->query($sql1);


$result = $con->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc())
{
	
  // Append only the `player` column rather than the whole $row (which is an array)
  
  array_push($myarray,$row['Courses']);
}
}
print_r($myarray);




/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " RegisterNumber" . $row["RegisterNumber"]. "MA101  " . $row["MA101"]. " CY100 " . $row["CY100"]. "<br>";
    }
} else {
    echo "0 results";
}*/
$con->close();
?>
