<?php
include "dbconfig.php";
session_start();
if(isset($_SESSION['session_id'])){
  $file_name=$_FILES['profile_image']['name'];
  $file_tmp_name=$_FILES['profile_image']['tmp_name'];

  if(move_uploaded_file($file_tmp_name,$file_name)){
      $sql="update emp_table set profile_image='$file_name' where id=$_SESSION[session_id]";
    if($con->query($sql)){
      header("location:Profile.php");

    }
    else{
      echo "not uploaded";
    }
  }

}

?>