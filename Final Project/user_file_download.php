<?php
include('php/set.php');
if (empty($_SESSION['name'])) {
    header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
    <script src="bootstrap-3.3.7/dist/js/google.js"></script>
    <script src="bootstrap-3.3.7/dist/js/main2.js"></script>
    <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    <script src="bootstrap-3.3.7/dist/js/npm.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">


    <style>
        body {
            background-color: #222;
        }

        .modal-login {
            color: #636363;
            width: 350px;
        }

        .modal-login .modal-content {
            padding: 20px;
            border-radius: 5px;
            border: none;
        }

        .modal-login .modal-header {
            border-bottom: none;
            position: relative;
            justify-content: center;
        }

        .modal-login h4 {
            text-align: center;
            font-size: 26px;
            margin: 30px 0 -15px;
        }

        .modal-login .form-control:focus {
            border-color: #70c5c0;
        }

        .modal-login .form-control,
        .modal-login .btn {
            min-height: 40px;
            border-radius: 3px;
        }

        .modal-login .close {
            position: absolute;
            top: -5px;
            right: -5px;
        }

        .modal-login .modal-footer {
            background: #ecf0f1;
            border-color: #dee4e7;
            text-align: center;
            justify-content: center;
            margin: 0 -20px -20px;
            border-radius: 5px;
            font-size: 13px;
        }

        .modal-login .modal-footer a {
            color: #999;
        }

        .modal-login .avatar {
            position: absolute;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: -70px;
            width: 95px;
            height: 95px;
            border-radius: 50%;
            z-index: 9;
            padding: 0px;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
        }

        .modal-login .avatar img {
            width: 100%;
        }

        .modal-login.modal-dialog {
            margin-top: 80px;
        }

        .modal-login .btn {
            color: #fff;
            border-radius: 4px;
            background: #60c7c1;
            text-decoration: none;
            transition: all 0.4s;
            line-height: normal;
            border: none;
        }

        .modal-login .btn:hover,
        .modal-login .btn:focus {
            background: #45aba6;
            outline: none;
        }

        .trigger-btn {
            display: inline-block;
            margin: 100px auto;
        }
        .wrapper{
            background:  white;
            width: auto;
            border: 1px solid #a1a1a1;
            margin: 10px auto 10px auto;
        }
        table{
            margin: 20px 0px 0px;
        }

    </style>
    <title>Download</title>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">V &nbsp; L &nbsp; E</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="user_home.php">Home</a></li>
                    <li><a href="user_about.php">About</a></li>
                    <li><a href="user_feedback.php">FeedBack</a></li>
                    <li><a href="user_comment.php">Q & A</a></li>
                    <li class="active"><a href="user_file_download.php">Download</a></li>
                    <li><a href="index.php ?logout='1' ">Log out</a></li>
                </ul>

            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <p><br><br><br><br><br><br>
</p>
    <div class="wrapper">
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>File</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "config.php";
                $stmt = $db->prepare("SELECT * FROM newfiles");
                $stmt->execute();
                while ($row = $stmt->fetch()) {
                    ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['filename'] ?></td>
                        <td class="text-center"> <a href="download.php? id=<?php echo $row['id'] ?> " class="btn btn-primary">Download</a> </td>
                    </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>



    </div>
   

    <footer class="footer-distributed">

<div class="footer-left">

    <h3>NIBM<span>V L E</span></h3>

    <p class="footer-links">
        <a href="user_home.php">Home</a>
        .
        <a href="user_about.php">About</a>
        ·
        <a href="user_feedback.php">FeedBack</a>
        .
        <a href="user_coment.php">Q & A</a>
        .
        <a href="ser_file_download.php">Download</a>
        
        
    </p>

    <p class="footer-company-name">NIBM &copy; 2019</p>
</div>

<div class="footer-center">

    <div>
        <i class="fa fa-map-marker"></i>
        <p><span>pettigala watta</span> Galle, Sri Lanka</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>+94 555 123456</p>
    </div>

    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="nibmt@gmail.com">nibm@gmail.com</a></p>
    </div>

</div>

<div class="footer-right">

    <p class="footer-company-about">
        <span>NIBM</span>
        Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
    </p>

    <div class="footer-icons">

        <a href="www.facebook.com"><i class="fa fa-facebook"></i></a>
        <a href="www.twitter.com"><i class="fa fa-twitter"></i></a>
        <a href="www.linkedin.com"><i class="fa fa-linkedin"></i></a>
        <a href="www.github.com"><i class="fa fa-github"></i></a>

    </div>

</div>

</footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>