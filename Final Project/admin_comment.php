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
    <!-- <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">-->
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

        .panel-footer {

            padding: 0px 15px;

        }

        #display_comment {
            border: 1px solid #a1a1a1;
            margin: 10px auto 10px auto;
            background: #c7c7c7;
        }


        .btn-primary {
            margin: 5px 5px 5px 5px;
            float: right;
            color: #fff;
            background-color: #b30000;
            border-color: #4d0000;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #800000;
            border-color: #330000;
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
                    <li ><a href="admin_home.php">Home</a></li>
                    <li><a href="adminsingin.php ">Register</a></li>
                    <li class="active"><a href="admin_comment.php">Q & A</a></li>
                    <li><a href="admin_file_delete.php">Delete File</a></li>
                    <li><a href="index.php ?logout='1' ">Log out</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Report <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="register_data.php">Register Data</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="feedback_data.php">FeedBack Data</a></li>
                        

                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <br /><br>
    <h2 align="center"><a href="#">Subject Matter Section </a></h2>
    <br />
    <div class="container">
        <form method="POST" id="comment_form">
            <div class="form-group">
                <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" value="<?php echo $_SESSION['name'] ;?>"  readonly/>
            </div>
            <div class="form-group">
                <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"  readonly></textarea>
            </div>
            <div class="form-group">
                <input type="hidden" name="comment_id" id="comment_id" value="0" />
                <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
            </div>
        </form>
        <span id="comment_message"></span>
        <br />
        <div id="display_comment"></div>
    </div>


</body>
<footer class="footer-distributed">

    <div class="footer-left">

        <h3>NIBM<span>V L E</span></h3>

        <p class="footer-links">
            <a href="admin_home.php">Home</a>
            ·
            <a href="adminsingin.php">Register</a>
            ·
            <a href="admin_comment.php">Comment</a>
            ·
            <a href="admin_file_delete.php">Delete File</a>
            ·
            <a href="register_data.php">Register ata</a>
            ·
            <a href="feedback_data.php">FeedBack Data</a>
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

<script>
    $(document).ready(function() {
        load_comment();
        
        function load_comment() {
            $.ajax({
                url: "admin_fetch_comment.php",
                method: "POST",
                success: function(data) {
                    $('#display_comment').html(data);
                }
            })
        }

        $(document).on('click', '.reply', function() {
            var comment_id = $(this).attr("id");
            $('#comment_id').val(comment_id);
            $('#comment_content').focus();
        });


        
        $('#comment_form').on('submit', function(event) {
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                url: "add_comment.php",
                method: "POST",
                data: form_data,
                dataType: "JSON",
                success: function(data) {
                    if (data.error != '') {
                        $('#comment_form')[0].reset();
                        $('#comment_message').html(data.error);
                        $('#comment_id').val('0');
                        load_comment();
                    }
                }
            })
        });

    });
</script>