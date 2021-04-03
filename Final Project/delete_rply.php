<?php  
$con = mysqli_connect('localhost', 'root','', 'projectdb');
$delete_reply_comment_id='';
if (isset($_POST['delete_reply_comment'])) {
    $delete_reply_comment_id = mysqli_real_escape_string($con, $_POST['delete_value']);

    

    $query = "DELETE FROM tbl_comment WHERE comment_id='$delete_reply_comment_id' ";
    mysqli_query($con, $query);
    header('location: admin_comment.php');

}



?>