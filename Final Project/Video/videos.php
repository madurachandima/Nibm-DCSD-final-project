<?php
$con=mysqli_connect("localhost","root","","vid")  or die("not connected");
$q = "SELECT * FROM vide ORDER BY name DESC LIMIT 1";
$query = mysqli_query($con,$q);
while($row=mysqli_fetch_assoc($query))
{
	$name=$row['name'];
	echo $name;
}
?>