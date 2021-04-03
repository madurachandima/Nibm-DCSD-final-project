<?php  
$con = mysqli_connect('localhost', 'root','', 'projectdb');
$delete_comment_id='';
if (isset($_POST['delete_comment'])) {
    $delete_comment_id = mysqli_real_escape_string($con, $_POST['delete_value']);
    echo $delete_comment_id;
    

    $query = "DELETE FROM tbl_comment WHERE comment_id='$delete_comment_id' ";
    mysqli_query($con, $query);
    $query1="DELETE FROM tbl_comment WHERE  parent_comment_id='$delete_comment_id'";
    mysqli_query($con, $query1);
    header('location: admin_comment.php');

}



?>