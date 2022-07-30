<?php
include "dbconfig.php";
session_start();

if(isset($_POST['status_submit'])){
  $end_date=$_POST['end_date'];
  $status=$_POST['status'];

$sql="update task_info set end_date='$end_date',status='$status' where emp_id=$_SESSION[session_id]";
if($con->query($sql)){
  header("location:my_task.php");
}
else{
  echo "something wrong";
}
}

?>