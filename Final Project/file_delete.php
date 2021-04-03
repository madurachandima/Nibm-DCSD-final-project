<?php
$connect = mysqli_connect("localhost", "root", "", "projectdb");
if(isset($_POST["delete"]))
{
 $query = "DELETE  FROM 	newfiles WHERE id = '".$_POST["deleteid"]."'";
 mysqli_query($connect, $query);
 header('location: admin_file_delete.php');
}
?>
