<?php
include "CC.php";
$id=$_POST['id'];
$cname=$_POST['cname'];
$model=$_POST['model'];
$query="INSERT into car Values ('$id', '$cname','$model')";
$result=mysqli_query($conn,$query);
header('location:pacc.php');
mysqli_close($conn);
?>