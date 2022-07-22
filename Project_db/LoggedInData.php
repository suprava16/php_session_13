<?php
if(isset($_POST['login'])){
  // fetch the data
  $email=$_POST['email'];
  $password=md5($_POST['password']);

  // database connection
  $con=new mysqli("localhost","root","","emp_data");
 if($con->connect_error){
  die("something wrong in database connection..............Please Check.");
 }

//  sql command
$sql="select * from emp_table where email='$email' and password='$password'";

$result=$con->query($sql);
if($result->num_rows==1){
  $data=$result->fetch_assoc();
  $user_email=$data['email'];
  $user_name=$data['username'];
  $user_id=$data['id'];

  // add data in session--------------
  session_start();
  $_SESSION['session_email']=$user_email;
  $_SESSION['session_name']=$user_name;
  $_SESSION['session_id']=$user_id;

  header("location:home.php");

}


}

?>