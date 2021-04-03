<?php include ('php/set.php'); 


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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>




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

        .comment-btn-holder{
          float: right;
          
          background:  #990000;
          height: 20px;
          width: 20px;
          position: relative;
          top: 9px;
         margin: 0px 10px 0px 0px;
         text-align: center;
         
           
        }
        .comment-btn-holder .delete-btn {
            position: relative;
            bottom: 8pt;
            cursor: pointer;
            line-height: 19px;
           
        }
        .comment-btn-holder .delete-btn:hover{
            color: white;
            background:  #cc0000;
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
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="about.html">About</a></li>
                    <li><a href="feed_back.php">Feed Back</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="login.html">Login</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="singin.html">Sing in</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <br /><br>
    <h2 align="center"><a href="#">Comment System using PHP and Ajax</a></h2>
    <br />
    <div class="container">
        <form method="POST" id="comment_form">
            <div class="form-group">
                <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" value="<?php echo $_SESSION['name'] ;?>"  readonly/>
            </div>
            <div class="form-group">
                <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
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

</html>

<script>
    $(document).ready(function() {
        load_comment();
        
        function load_comment() {
            $.ajax({
                url: "fetch_comment.php",
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