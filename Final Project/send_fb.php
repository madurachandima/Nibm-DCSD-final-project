<?php
include('php/set.php');

$_fb_mesg='';
$_fb_type='';
$_fb_email='';
$_fb_user_name='';
$_fb_f_name='';
$_fb_l_name='';
$success=array();
$errors=array();


$_fb_type= $_SESSION['type'];

if (isset($_POST['submit'])) {
    $_fb_mesg = mysqli_real_escape_string($con, $_POST['message']);
    $_fb_f_name=mysqli_real_escape_string($con, $_POST['fname']);
    $_fb_l_name=mysqli_real_escape_string($con, $_POST['lname']);
    $_fb_email=mysqli_real_escape_string($con, $_POST['email']);
    $_fb_user_name=mysqli_real_escape_string($con, $_POST['username']);

$query = "INSERT INTO feed_back(type,user_name,email,f_name,l_name,message)
                                    VALUES ('$_fb_type','$_fb_user_name','$_fb_email','$_fb_f_name','$_fb_l_name','$_fb_mesg')";
        $result = mysqli_query($con, $query);


    if($_fb_type=="tuter"){
        header('location: tuter_home.php');
    }
    else{
        header('location: user_home.php');
    }      

}
?>
