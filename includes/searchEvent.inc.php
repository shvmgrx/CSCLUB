<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "csclub";

// Create connection
$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM eventj";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Event Name: ". $row["eventname"]. " - Event Date: ". $row["eventdate"]."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 