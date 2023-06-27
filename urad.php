<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<style>
 form
  {
  background-color:brown;
  color:black;

  }
  body
  {
  background-color:black;
  color:brown;
  }
</style>
<?php
include"connection.php";
echo '<br>';

echo '<h2 style="color:brown">Your Ad :</h2>';
echo "<br>";
$sql=" SELECT *  FROM student";
$result = $conn->query($sql);
echo '<table  style="text-align:center;margin-left:4cm">
<tr>
<th> <b> ID  | </b> </th> 
<th> <b>Car Name  | </b> </th>
<th> <b> Model   | </b> </th>
<th> <b> Delete Ad | </b> </th>
<th> <b> Update Ad |   </b> </th>
</tr>';


if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
   // echo "Name: " . $row["name"]. " -Marks: " . $row["marks"]. "<br>";
    $id = $row["id"];
    $name = $row["name"];
    $marks = $row["marks"];
    echo '<tr> 
              <td>'.$id.'</td>
              <td>'.$name.'</td>
              <td>'.$marks.'</td>
              <td><a class="btn btn-info btn-sm" href="delete.php?id='.$id.'"><b> DELETE </b></button></a></td>
              <td><a class="btn btn-danger btn-sm" href="update.php?id='.$id.'"><b> UPDATE </b></a></td>
              <tr>';             
  }
} else {
  echo "0 results";
}
$conn->close();



