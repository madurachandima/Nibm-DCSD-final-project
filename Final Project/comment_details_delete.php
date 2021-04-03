<?php
 include ('php/set.php'); 
    $comment_id = $_POST['comment_id'];

    $sql_del = "DELETE FROM registertbl WHERE id = $comment_id";
    $stmt = $con->prepare($sql_del);
    $stmt->execute();

?>

<?php
//$connect = mysqli_connect("localhost", "root", "", "projectdb");
//if (isset($_POST['deletdb'])) {
  //$query = "DELETE FROM registertbl WHERE userid = '" . $row['userid'] . "'";
  //if (mysqli_query($con, $query)) {
    //echo 'Data Deleted';
  //}
//}
?>