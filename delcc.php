<?php
include "CC.php";
$id=$_GET['id'];
$del="DELETE FROM car WHERE id='$id'";
$result=mysqli_query($conn,$del)
or 
die("Query Unsuccessful");
header("location:pacc.php");
