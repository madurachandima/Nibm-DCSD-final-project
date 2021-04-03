<html>
<?php include('php/set.php'); ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<style>
  table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
  }

  th,
  td {
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2
  }
</style>




<div style="overflow-x:auto;">
  <table>
    <tr>
      <th> User ID </th>
      <th> First Name </th>
      <th> Last Name </th>
      <th> Email </th>
      <th> Branch </th>
      <th> Username </th>
      <th> Type </th>
    </tr>
    <?php

    $_fb_type = '';
    $_fb_email = '';
    $_fb_user_name = '';
    $_fb_f_name = '';
    $_fb_l_name = '';
    $_fb_user_id = '';
    $_fb_branch = '';

    $query = "SELECT userid,firstname,lastname,email,branch,username,type FROM registertbl ";
    $result = mysqli_query($con, $query);


    while ($row = $result->fetch_array()) {



      $_fb_type = $row['type'];
      $_fb_email = $row['email'];
      $_fb_user_name = $row['username'];
      $_fb_f_name = $row['firstname'];
      $_fb_l_name = $row['lastname'];
      $_fb_branch = $row['branch'];
      $_fb_user_id = $row['userid'];

      ?>


      <tr>
        <td><?php echo $_fb_user_id; ?></td>
        <td><?php echo $_fb_f_name; ?></td>
        <td><?php echo  $_fb_l_name; ?></td>
        <td><?php echo $_fb_email; ?></td>
        <td><?php echo  $_fb_branch; ?></td>
        <td><?php echo $_fb_user_name; ?></td>
        <td><?php echo   $_fb_type; ?></td>
        <td>
          <div class="delete" name="delete" id="delete" onclick="deletecomment(<?php echo $row["userid"];?>)">Delete</button></div>
        </td>
      </tr>
    <?php } ?>
  </table>

</html>


<script>
  function deletecomment(userid) {
    alert

   // if (confirm("Are you sure you want to delete this comment?")) {

      $.ajax({
        url: "comment_details_delete.php",
        type: "POST",
        data: 'comment_id=' + userid,
        success: function(data) {
          if (data) {
            $("#comment-" + id).remove();
           
          }
        }
      });
   //}
  }







  function myFunction() {
    var id = document.getElementById('delete').value;
    //var x = document.getElementById('po').value;
    alert(id);
  }

  /*$(document).ready(function(){
    $("button").click(function(){
      alert("The paragraph was clicked.");
    });
  });


    $(document).on('click', '.delete', function() {
              var id=document.getElementById(delete).value;
              alert(id);
          });*/
</script><input type="button" id="delete$row['userid']. class=" delete" name="deletdb" value="Delete" onclick="myFunction()">