<?php
include('php/set.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="footer, address, phone, icons" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--   <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">-->
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

        .footer-distributed {
            background-color: #292c2f;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: bold 16px sans-serif;
            padding: 81px 32px;
            margin-top: -21px;
        }
    </style>

    <title>V L E</title>
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
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="singin.php">Sign up</a></li>
                    <li><a href="#myModal" data-toggle="modal">Login</a></li>


                </ul>

            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="imge/1.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Teaching is only demonstrating that it is possible. 
                            Learning is making its possible for yourself.
                        </h1>
                       
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="imge/2.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Education is what surives whenwhat has been forgtten.</h1>
                        
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="imge/2.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Its is greater work to educate achild, 
                            in the true and larger sense of the world,than to rule a state.</h1>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>




    <?php include('php/error.php'); ?>

    <div id="myModal" class="modal">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="avatar">
                        <img src="imge/avatar.png" alt="Avatar">
                    </div>
                    <h4 class="modal-title">Member Login</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">


                    <form action="index.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" required="required" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="login" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
                        </div>
                    </form>
                </div>


                <div class="modal-footer">
                    <a href="reset.php">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Button HTML (to Trigger Modal) -->

</body>
<footer class="footer-distributed">

    <div class="footer-left">

        <h3>NIBM<span>V L E</span></h3>

        <p class="footer-links">
            <a href="index.php">Home</a>
            ·
            <a href="singin.php">Register</a>
            ·
            <a href="about.php">about</a>
            ·


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

</html>