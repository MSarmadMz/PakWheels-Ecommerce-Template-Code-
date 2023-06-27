<?php
//this file can simply upadte the data
include('connection.php');
$id = $_POST['id'];
$marks=$_POST['marks'];
$dis = "UPDATE student SET marks ='$marks' where id = '$id'";
$result = mysqli_query($conn, $dis) or die("eror 4040");
header("location:postanadd.php");
?>