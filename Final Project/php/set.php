
<?php

$con = mysqli_connect('localhost', 'root', '', 'projectdb');

$_type="";
$_username="";
$_email="";
$_f_name="";
$_l_name="";
$_branch="";
$_password_1="";
$_password_2="";
$errors = array();
$success=array();



session_start();
//user side
if (isset($_POST['insert'])) {

    $_username = mysqli_real_escape_string($con, $_POST['username']);
    $_email = mysqli_real_escape_string($con, $_POST['nibmemail']);
    $_f_name = mysqli_real_escape_string($con, $_POST['fname']);
    $_l_name = mysqli_real_escape_string($con, $_POST['lname']);
    $_branch = mysqli_real_escape_string($con, $_POST['branch']);
    $_password_1 = mysqli_real_escape_string($con, $_POST['password1']);
    $_password_2 = mysqli_real_escape_string($con, $_POST['password2']);
  
    if ($_password_1 != $_password_2) {
        array_push($errors, "The passwords are does't matching");
        //echo '<script type="text/javascript">',
          //  'toastr.error("+$error+");',
            //'</script>';
    }

    if (count($errors) == 0) {
        $password = md5($_password_1); //encript the password

        $query = "INSERT INTO registertbl(firstname,lastname,email,branch,password,username)
                                    VALUES ('$_f_name','$_l_name','$_email','$_branch','$password','$_username')";
        $result = mysqli_query($con, $query);
      header('location: index.php');

    }
}


//admin side
if (isset($_POST['singin'])) {
    $_username = mysqli_real_escape_string($con, $_POST['name']);
    $_email = mysqli_real_escape_string($con, $_POST['email']);
    $_f_name = mysqli_real_escape_string($con, $_POST['fname']);
    $_l_name = mysqli_real_escape_string($con, $_POST['lname']);
    $_password_1 = mysqli_real_escape_string($con, $_POST['password1']);
    $_password_2 = mysqli_real_escape_string($con, $_POST['password2']);
    $_type = mysqli_real_escape_string($con, $_POST['type']);
    $_SESSION['name'] = $_username;
    $_SESSION['email'] = $_email;
    $_SESSION['type'] = $_type;

    if ($_password_1 != $_password_2) {
        array_push($errors, "The passwords are does't matching");
        //echo '<script type="text/javascript">',
          //  'toastr.error("+$error+");',
            //'</script>';
    }

    if (count($errors) == 0) {
        $password = md5($_password_1); //encript the password

        $query = "INSERT INTO registertbl(firstname,lastname,email,branch,password,username,type)
                                    VALUES ('$_f_name','$_l_name','$_email','$_branch','$password','$_username','$_type')";
        $result = mysqli_query($con, $query);

        if($_type=="admin"){
         
          header('location: admin_home.php');
        }
        elseif($_type=="tuter"){
          $_SESSION['name'];
          $_SESSION['email'];
          $_SESSION['type'];
          header('location: tuter_home.php');
        }
        else{
          $_SESSION['name'];
          $_SESSION['email'];
          $_SESSION['type'];
          header('location: user_home.php');
        }
        
      

    }
}

if (isset($_POST['login'])) {
    //session_start();
    $password="";
    $_username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $_SESSION['name'] = $_username;


   // if (empty($username)) {
     //   array_push($errors, "User name is required");
    //}
    //if (empty($password)) {
      //  array_push($errors, "Password is required");
    //}

    if (count($errors) == 0) {

        $password = md5($password);
        $query = "SELECT * FROM registertbl WHERE  username='$_username' and password='$password'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
        $_type = $row['type'];
        $_email= $row['email'];

    
        if (mysqli_num_rows($result) == 1) {
             $_SESSION['email']=$_email;
             $_SESSION['type'] = $_type;
                if($_type == "admin"){
                    $_SESSION['name'];
                    header("location: admin_home.php");
                }
                else if($_type == "tuter"){
                    $_SESSION['name'];
                    $_SESSION['type'];
                    header("location: tuter_home.php");
                }
                else{
                  $_SESSION['name'];
                  $_SESSION['type'];
                    header("location: user_home.php");
                }
                //redirect to admin 
               
            }
         else {
            array_push($errors, "wrong username or password");
        }
        //array_push($errors, "wrong username or password");
    }
}


if (isset($_GET['logout'])) {
    session_unset($_SESSION['name']);
    session_destroy();

    header('location: index.php');
}




?>
 