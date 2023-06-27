<?php
include "connectsu.php";
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $query="INSERT into uuser Values ('$fname','$lname','$email')";
    $result=mysqli_query($conn,$query);
    header('location:signiu.php');
    mysqli_close($conn);
?>