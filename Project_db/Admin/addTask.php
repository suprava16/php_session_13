<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="sidenavbar.css">
  <style>
    .main_content{
      width: 100%;
      margin-left: 230px ;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <div class="sidebar">
      <h2>Welcome Admin</h2>
      <ul>
        <li><a href="all_employee.php">Employees</a></li>
        <li><a href="#">All Tasks</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    <div class="main_content">
      <div class="header"> 
        <div style="width:600px;margin:auto"> 
        <h1>ADD TASK HERE</h1>
           <form action="" method="post">
            <span>Task Title</span>
            <input type="text" name="task_title" placeholder="enter task title"><br/><br/>
            <span>Task description</span>
            <input type="text" name="task_description" placeholder="enter task description"><br/><br/>
            <span>Assigned date</span>
            <input type="date" name="start_date"><br/><br/>
            <button type="submit" name="add_task">SUBMIT</button>
           </form>
  </div>
    </div>
    </div>
  </div>
  </div>
 
</body>

</html>

<?php
include "dbconfig.php";
if(isset($_POST['add_task'])){
  $title=$_POST['task_title'];
  $description=$_POST['task_description'];
  $start_date=$_POST['start_date'];
  echo "$title-$description-$start_date";
  $sql="insert into task_info values(0,'$title','$description','$start_date','',$_GET[eid],'0')";
  if($con->query($sql)){
    header("location:all_employee.php");
  }
  else{
    echo "not insterted";
  }
}

?>