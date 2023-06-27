<?php
    include ('connection.php');
    $id=$_POST['id'];
    $name=$_POST['name'];
    $marks=$_POST['marks'];
    $query="INSERT INTO student (id,name,marks) values ('$id','$name','$marks')";
    $result=mysqli_query($conn,$query);
    header('location:postanadd.php');
    mysqli_close($conn);
?>