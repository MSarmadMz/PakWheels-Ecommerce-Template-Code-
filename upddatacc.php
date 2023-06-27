<?php
//this file can simply upadte the data
include "CC.php";
$id = $_POST['id'];
$model=$_POST['model'];
$dis = "UPDATE car SET model ='$model' where id = '$id'";
$result = mysqli_query($conn, $dis) or die("eror 4040");
header("location:pacc.php");
?>