<?php
echo '<b><hr>Showing Data</hr></b>';
echo "<br>";
echo "<br>";
$sql=" SELECT *  FROM student";
$result = $conn->query($sql);
echo '<table  style="text-align:center;margin-left:4cm">
<tr>
<th> <b> ID </b> </th>
<th> <b> Name </b> </th>
<th> <b> Marks </b> </th>
<th> <b> Deletion </b> </th>
<th> <b> Updation </b> </th>
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
?>