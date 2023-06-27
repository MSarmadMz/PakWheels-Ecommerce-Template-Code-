<style>
    body
    {
        background-color:black;
        margin-left:7cm;
        margin-right:7cm;
        text-align:center;
        margin-top:4cm;
    }
    form
    {
    background-color:brown;
    }
    input
    {
        background-color:transparent;
    }

</style>
<body>
<?php
include "CC.php";
$id=$_GET['id'];
$update="SELECT * FROM car where id='$id'";
$result=mysqli_query($conn,$update)
or 
die ("error");
if(mysqli_num_rows($result)>0) //if one or more row is present
{
    while($row=mysqli_fetch_assoc($result))
    {
        echo'
        <form action="upddatacc.php" method="post">
        <h1> Update AD </h1>
        <br>
        <label>Car ID :<label>
        <input type="number" value ="$row["id"] name="id" />
        <br>
        <br>
        <label>Car Model :<label>
        <input type="number" value ="$row["model"] name="model" />
        <br>
        <br>
        <input type="submit" value="Update AD Now "name="update"/>
        <br>
        </form>;';
    }
}
?>
</body>