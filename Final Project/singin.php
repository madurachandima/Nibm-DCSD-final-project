
<?php
include ('php/set.php');



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
    <script src="bootstrap-3.3.7/dist/js/google.js"></script>
    <script src="bootstrap-3.3.7/dist/js/main2.js"></script>
    <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    <script src="bootstrap-3.3.7/dist/js/npm.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">




    <style>
        body {
            background-image: url(imge/form-bg.jpg);
            background-size: cover;
            background-attachment: fixed;

        }

        .form {
            position: relative;
            padding-right: 115px;

        }

        .col-md-5 {
            margin-top: 80px;
            box-shadow: -1px 1px 60px 10px black;
            background: rgba(0, 0, 0, 0.658);
            position: absolute;
            top: 100px;
            right: 0px;



        }

        .label {
            font-weight: normal;
            margin-top: 15px;
            color: white;
            font-size: 19px;
            padding: 10px;


        }

        .form-control {
            background: transparent;
            border-radius: 0px;
            border: 0px;
            border-bottom: 1px solid white;
            margin-top: 18px;
        }

        ::placeholder {
            text-align: center;
        }

        .col-md-10 {
            padding-left: 90px;
        }

        select .form-control {
            color: aliceblue;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        .checkbox {
            color: aliceblue;
        }

        option {
            color: rgba(0, 0, 0, 0.658);
        }

       footer{
           position: absolute;
           bottom: -627px;
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li class="active"><a href="singin.php">Sgin up</a></li>
                </ul>

            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>



    <br>
    <br><br><br>
<?php include('php/error.php');?>

    <form action="" method="POST">
        <div class="container form">
            <div class="col-md-5">

                <div class="row">
                    <label class=" label col-md-2 control-label  ">First Name :</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                    </div>
                </div>

                <div class="row">
                    <label class=" label col-md-2 control-label  ">Last Name :</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                    </div>
                </div>

                <div class="row">
                    <label class=" label col-md-2 control-label  ">NIBM email :</label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" name="nibmemail" placeholder="NIBM Email address" required>
                    </div>
                </div>

                <div class="row">
                    <label class=" label col-md-2 control-label  ">Branch <br> Location :</label>
                    <div class="col-md-10">
                        <select class="form-control checkbox" name="branch" id="">
                            <option value="0">Select Branch</option>
                            <option value="Colombo">Colombo</option>
                            <option value="Galle">Galle</option>
                            <option value="Matara">Matara</option>
                            <option value="Kandy">Kandy</option>
                            <option value="Kurunagala">Kurunagala</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <label class=" label col-md-2 control-label  ">User Name :</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="username" placeholder="User Name" required>
                    </div>
                </div>

                <div class="row">
                    <label class=" label col-md-2 control-label  ">Password :</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" name="password1" placeholder="Password" required>
                    </div>
                </div>

                <div class="row">
                    <label class=" label col-md-2 control-label  "> Conform <br> Password :</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" name="password2" placeholder=" Re-Enter Password" required>
                    </div>
                </div>
                <div class="row reg-button">
                    <div class="col-md-10">
                        <button type="submit" name="insert" id="sumitbtn" class="btn btn-danger">Submit</button>

                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </form>






    </div>

</body>
<footer class="footer-distributed">

    <div class="footer-left">

        <h3>NIBM<span>V L E</span></h3>

        <p class="footer-links">
            <a href="index.php">Home</a>
            ·
            <a href="singin.php">Register</a>
            ·
            <a href="about.php">About</a>
           
           
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

