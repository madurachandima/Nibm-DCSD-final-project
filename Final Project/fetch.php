
<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'projectdb');

$input = filter_input_array(INPUT_POST);

$first_name = mysqli_real_escape_string($connect, $input["firstname"]);
$last_name = mysqli_real_escape_string($connect, $input["lastname"]);
$user_id = mysqli_real_escape_string($connect, $input["userid"]);
$email = mysqli_real_escape_string($connect, $input["email"]);
$branch = mysqli_real_escape_string($connect, $input["branch"]);
$user_name = mysqli_real_escape_string($connect, $input["username"]);
$type = mysqli_real_escape_string($connect, $input["type"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE registertbl 
 SET firstname = '".$first_name."', 
 lastname = '".$last_name."' ,
 WHERE userid = '".$input["userid"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM registertbl 
 WHERE userid = '".$input["userid"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
