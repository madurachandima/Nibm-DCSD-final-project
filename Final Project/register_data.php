<?php
include('php/set.php');
if (empty($_SESSION['name'])) {
    header('location: index.php');

}

$connect = mysqli_connect("localhost", "root", "", "projectdb");
$query = "SELECT * FROM registertbl ORDER BY userid DESC";
$result = mysqli_query($connect, $query);
?>
<html>
<head>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="jquery.tabledit.min.js"></script>

   
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
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
                    <li ><a href="admin_comment.php">Q & A</a></li>
                    <li><a href="admin_file_delete.php">Delete File</a></li>
                    <li><a href="index.php ?logout='1' ">Log out</a></li>

                    <li class="dropdown">
                        <a href="#" class="active" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Report <span class="caret"></span></a>
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

    <div class="container">
        <br />
        <br />
        <br />
        <div class="table-responsive">
            <h3 align="center">Admin , Student & Tutor Details Report </h3><br />
            <table id="editable_table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th> User ID </th>
                        <th> First Name </th>
                        <th> Last Name </th>
                        <th> Email </th>
                        <th> Branch </th>
                        <th> Username </th>
                        <th> Type </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php while ($row = mysqli_fetch_array($result)) {?>
                    
      <tr>
       <td><?php echo $row["userid"] ?> </td>
       <td><?php echo $row["firstname"] ?></td>
       <td><?php echo $row["lastname"]?> </td>
       <td><?php echo $row["email"];?></td>
       <td><?php echo $row["branch"]; ?></td>
       <td><?php echo $row["username"] ?></td>
       <td><?php echo $row["type"] ?>  </td>

       <td> <form method="POST" action="delete.php">
              <input type="submit" class="btn btn-danger"" name="delete" value="Delete">
              <input type="hidden" name="deleteid" value="<?php echo $row["userid"] ; ?>">
            </form></td>
      </tr>
      
                  <?php  }?>
                   
                </tbody>
            </table>
        </div>
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
