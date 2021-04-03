<?php
$connect = mysqli_connect("localhost", "root", "", "projectdb");
if(isset($_POST["delete"]))
{
 $query = "DELETE  FROM 	feed_back WHERE fb_id = '".$_POST["deleteid"]."'";
 mysqli_query($connect, $query);
 header('location: feedback_data.php');
}
?>
