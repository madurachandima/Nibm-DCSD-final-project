<?php
$con = mysqli_connect('localhost', 'root', '', 'projectdb');



if(isset($_POST['upload'])){

    $file_name= $_FILES['file']['name'];
    $file_type=$_FILES['file']['type'];
    $file_tem_Loc=$_FILES['file']['tmp_name'];

    $file_store="media/".$file_name;

    move_uploaded_file($file_tem_Loc, $file_store);
       
    $query = "INSERT INTO newfiles(filename,type)
    VALUES ('$file_name','$file_type')";
    $result = mysqli_query($con, $query);

}

?>
<html>
    <head>
         <title>Uploadind File</title>
   </head>
   <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <label>Uploading Files</label>
            <p><input type="file" name="file"/></p>
            <p><input type="submit" name="upload" value="Upload"></p>

        </form>    

   </body>

</html>