<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="cruddb";
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . mysqli_connect_error());
}
else{

}
?> 