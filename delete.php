<?php
include('connection.php'); //first make connection
$id = $_GET['id'];
    $del = "DELETE FROM student WHERE id='$id'"; //query to delete the person
    $result = mysqli_query($conn, $del) 
    or die("Query unsuccessful") ; //run query
    header("location:postanadd.php"); //then go back to main page
?>

