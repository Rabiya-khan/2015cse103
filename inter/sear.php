 <?php
include("db.php");

session_start(); 
$sql =  "SELECT * FROM data WHERE username ='kumar' OR password = 'hello'";
 $result=$conn->query($sql);

    while($row = $result->fetch_assoc())
 {
   echo 'Name: '.$row['name']; 
   echo '<br /> age: ' .$row['age'];
  echo '<br /> contact: '.$row['contact'];
   echo '<br /> address: '.$row['address'];
 }

$sql = "DELETE FROM data WHERE name='kumar'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$sql = "SELECT name, age, adddress FROM data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " - age: " . $row["age"]. " " . $row["address"]. "<br>";
    }
} else {
    echo "0 results";
}


mysql_close($con);
