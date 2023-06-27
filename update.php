<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<?php
//this file can fetch and display only those row which id u can select then u can edit this row
include('connection.php');
$id = $_GET['id'];
$dis = " SELECT * FROM student WHERE id='$id' ";
$result = mysqli_query($conn, $dis) or die("eror 4040");
if (mysqli_num_rows($result) > 0) { // if there is one row
    while ($row = mysqli_fetch_assoc($result)) { //this can fetch that row u have selected
echo 

'<center>
<form action="updatedata.php" method="post" style=" background-color:brown">
<br>
<h1 class="">UPDATE YOUR AD </h1> <br>
<label> CAR ID: </label>
<input type="number" name="id" value="$row["id"] style=" background-color:transparent"> 
<br><br>
<label>Car Name:</label>
<input type="number" name="marks" value="$row["marks"] style=" background-color:transparent">
 <br><br>
<label>Model Year:</label>
<input type="number" name="marks" value="$row["marks"] style=" background-color:transparent">
 <br><br>
<input type="submit" value="Update Ad Now " name="update" class="bg-warning bg-lg ">
<br>
<br>
</form>
</center>';
}
}
?>