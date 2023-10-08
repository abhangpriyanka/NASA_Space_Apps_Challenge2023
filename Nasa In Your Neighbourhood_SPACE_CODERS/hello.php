<html>
<body>
<?php
$id=$_POST['name'];
$servername="localhost";
$username="root";
$password="";
$database="info";
$con= new mysqli($servername,$username,$password,$database);


if(!$con)
{

die("error are there".mysqli_error($con));

}

$query="SELECT Answer FROM spaceinfo WHERE Question='$id' ";
$result=$con->query($query);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
echo"<br><h2>Answer:-</h2>".$row["Answer"]."<br>";

}

}
?>
</body>
</html>
