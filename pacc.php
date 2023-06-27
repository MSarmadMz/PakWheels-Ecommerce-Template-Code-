<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="stylepacc.css">
</head>
<body>
<?php
include "CC.php";
echo " <h2> POST YOUR AD</h2>";
echo"<br>";
echo '<form action="incc.php" method="post">
<br>
<br>
<label> Ad Id :</label>
<input style="margin-left:.5cm;" type="number" name="id" >
<br>
<br>
<label> Car Make:</label>
<input type ="text" name="cname">
<br>
<br>
<label>Car Model:</label>
<input type="number" name="model" >
<br>
<br>
<input style="font-size:.5cm;margin-left:5cm;border-radius:.6cm;color:brown;background-color:black"
type="submit" value="Post Now"/>
<br>
<br>
</form>';
echo ' <h2> YOUR AD : </h2>';
$sql="SELECT * FROM car";
$result=$conn->query($sql);
echo '<table style="text-align:center"> 
<tr>
 <th> ID   |</th>
 <th> CAR NAME  |</th>
 <th> CAR MODEL  |</th>
 <th> DELETE  AD  |</th>
 <th> UPDATE  AD   </th>
 </tr>';
 if($result->num_rows>0)
 {
    while($row=$result->fetch_assoc())
    {
        $id=$row["id"];
        $cname=$row["cname"];
        $model=$row["model"];
        echo'<tr>
        <td>'.$id.'</td>
        <td>'.$cname.'</td>
        <td>'.$model.'</td>
        <td><a class="btn btn-warning btn-md" href="delcc.php?id='.$id.'">DELETE</a></td>
        <td><a class="btn btn-primary btn-md" href="updcc.php?id='.$id.'">UPDATE</a></td>
        </tr>';
    }
 }
 else
 {
    echo'0 results';
 }
 $conn->close();
?>
</body>