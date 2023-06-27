<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="conncopysu";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . mysqli_connect_error());
}
else{
echo "Connected successfully "; }
echo "<br>";
?>


