<?php
include "dbconfig.php";
session_start();

if(isset($_SESSION['session_email'])){
  $sql="select * from task_info where emp_id=$_SESSION[session_id]";
  $result=$con->query($sql);
  if($result->num_rows>0){
    $data=$result->fetch_assoc();
    
    $title=$data['task_title'];
    $description=$data['task_description'];
    $start_date=$data['start_date'];
    $end_date=$data['end_date'];
    $status=$data['status'];
  
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table border="1">
    <tr>
      <th>Title</th>
      <th>Description</th>
      <th>Assigned Date</th>
      <th>Completed Date</th>
      <th>Status</th>
    </tr>
    <tr>
      <td><?php echo $title;?></td>
      <td><?php echo $description;?></td>
      <td><?php echo $start_date;?></td>
      <td><?php echo $end_date;?></td>
      <td><?php
      if($status==="1"){
        echo "inprogress";
      }
      elseif($status==="2"){
        echo "completed";
      }
      else{
        echo "incomplete";
      }
      ?></td>
      </tr>
      <tr>
  <td colspan="5">
    <form method="post" action="insert_status.php">
      <input type="date" name="end_date"/>
      <select name="status">
        <option>Select Status</option>
        <option value="0">Incomplete</option>
        <option value="1">Inprogress</option>
        <option value="2">Completed</option>
      </select>
      <button type="submit" name="status_submit">Submit</button>
    </form>
<td>
  </tr>
  </table><br/>
  <br/>
</body>
</html>