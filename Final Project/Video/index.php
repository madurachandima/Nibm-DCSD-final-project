
<!DOCTYPE html>
<body>
<a href="videos.php">video</a><br />
<form method="post" enctype="multipart/form-data">
<input type="file" name="file"/>
<input type="submit" name="submit" value="upload"/>
</form>

<?php
$con=mysqli_connect("localhost","root","","vid");

if(isset($_POST['submit']))
{
	$name = $_FILES['file']['name'];
	$temp = $_FILES['file']['tmp_name'];

	move_uploaded_file($temp, "uploaded".$name);
	
	$q = "INSERT INTO vide(name) VALUES('$name')";
	if(mysqli_query($con,$q))
	{
		echo "submitted to database";
	}
	echo"<br />" .$name. "uploaded";
}
?>

</body>
</html>