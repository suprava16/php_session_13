<?php
include "dbconfig.php";
if(isset($_POST['login'])){
  // fetch the data
  $email=$_POST['email'];
  $password=$_POST['password'];

//  sql command
$sql="select * from admin_table where email='$email' and password='$password'";

$result=$con->query($sql);
if($result->num_rows==1){
  $data=$result->fetch_assoc();
  $admin_email=$data['email'];
  $admin_id=$data['id'];

  // add data in session--------------
  session_start();
  $_SESSION['admin_email']=$admin_email;
  $_SESSION['admin_id']=$admin_id;

  header("location:admin_home.php");

}


}

?>