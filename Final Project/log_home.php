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
                    <a class="navbar-brand" href="#">Project name</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="log_home.html">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a  href="feed_back.php">Feed Back</a></li>
                        <li><a href="comment.php">Q & A</a></li>
                        <li><a href="index.php ?logout='1' ">Log out</a></li>
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
                            <h1>Example headline.</h1>
                            <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and
                                "previous"
                                Glyphicon buttons on the left and right might not load/display properly due to web
                                browser
                                security rules.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="second-slide" src="imge/2.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="third-slide" src="imge/2.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>

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
                                <input type="text" class="form-control" name="username" placeholder="Username" required="required">
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
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button HTML (to Trigger Modal) -->


    </body>

    <footer class="footer-distributed">

<div class="footer-left">

    <h3>Company<span>logo</span></h3>

    <p class="footer-links">
        <a href="#">Home</a>
        ·
        <a href="#">Blog</a>
        ·
        <a href="#">Pricing</a>
        ·
        <a href="#">About</a>
        ·
        <a href="#">Faq</a>
        ·
        <a href="#">Contact</a>
    </p>

    <p class="footer-company-name">Company Name &copy; 2015</p>
</div>

<div class="footer-center">

    <div>
        <i class="fa fa-map-marker"></i>
        <p><span>21 Revolution Street</span> Paris, France</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>+1 555 123456</p>
    </div>

    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:support@company.com">support@company.com</a></p>
    </div>

</div>

<div class="footer-right">

    <p class="footer-company-about">
        <span>About the company</span>
        Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
    </p>

    <div class="footer-icons">

        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-github"></i></a>

    </div>

</div>

</footer>


        </html>
