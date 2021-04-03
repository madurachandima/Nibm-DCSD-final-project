<?php 
include('php/set.php');
if (empty($_SESSION['name'])) {
    header('location: index.php');
}?>
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
  
 
  <link href='custom.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>





  <style>
    body {
      background-color: #222;
    }
    .form-control{
      height: 42px;
    }
    footer{
      height: 712px;
     
    }
    .footerset{
     margin: 170px 10px 10px;
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
                        <li><a href="user_home.php">Home</a></li>
                        <li ><a href="user_about.php">About</a></li>
                        <li class="active"><a  href="user_feedback.php">Feed Back</a></li>
                        <li><a href="user_comment.php">Q & A</a></li>
                        <li><a href="user_file_download.php">Download</a></li>                     
                        <li><a href="index.php ?logout='1' ">Log out</a></li>
                    </ul>

                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
  <?php //include('php/succes.php'); ?>
  <?php include('php/error.php'); ?>
<br><br><br><br>
<br><br><br><br>
<br><br><br>
  <div class="container">

            <div class="row">

                <div class="col-xl-8 offset-xl-2 py-5">
                    <form  method="post" action="send_fb.php" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="fname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="lname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control"    value="<?php echo $_SESSION['email'] ;?>">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">User Name</label>
                                        <input id="form_phone" type="text" name="username" class="form-control"  value="<?php echo $_SESSION['name'] ;?>">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="submit" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                            <div class="row">
                               
                            </div>
                        </div>

                    </form>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
        <script src="contact-2.js"></script>

</body>


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

</html>