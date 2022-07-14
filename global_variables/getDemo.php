<?php
// ------------------Accesssing data using $_GET and $_POST----------------------

// echo $_GET['user_name'];

// echo $_GET['user_email'];

// $username=$_POST['user_name'];
// echo $username;

// echo $_POST['user_email'];



// ---------------------------isset() function-------------------------------------
if(isset($_POST['register'])){
$username=$_POST['user_name'];
$email=$_POST['user_email'];

// --------------------------header() function-------------------------------------
if($username==="suprava" && $email==="suprava@gmail.com")
{
  header("location:home.php?id=10");
}
else{
  echo "something wrong....try again!!!!!!";
}
}
else{
   echo "Register first......thank you.";
}
?>