<?php
$connect = mysqli_connect("localhost", "root", "", "projectdb");
if(isset($_POST["delete"]))
{
 $query = "DELETE FROM registertbl WHERE userid = '".$_POST["deleteid"]."'";
 mysqli_query($connect, $query);
 header('location: register_data.php');
}
?>
