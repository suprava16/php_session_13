<?php
include "dbconfig.php";
session_start();

if(isset($_POST['edit'])){
  $user=$_POST['username'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $desig=$_POST['designation'];
 $salary=$_POST['salary'];
 
 $qry="update emp_table set username='$user',email='$email',phone='$phone',designation='$desig',salary='$salary' where id=$_SESSION[session_id]";
 if($con->query($qry)){
  header("location:Profile.php");
}
else{
  echo "failed";
}

}
// fetch data from database
$sql="select * from emp_table where id=$_SESSION[session_id]";
$result=$con->query($sql);
if($result->num_rows>0){
  $data=$result->fetch_assoc();
  $username=$data['username'];
  $email=$data['email'];
  $phone=$data['phone'];
  $desig=$data['designation'];
  $salary=$data['salary'];
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
  <h1>update employee form</h1>
  <form action="" method="post">
    <span>name:</span>
      <input type="text" value="<?php echo $username;?>" name="username" placeholder="enter username" id="" required><br><br>
      <span>Email::</span>
      <input type="email" value="<?php echo $email;?>" name="email" placeholder="enter email" id="" required><br><br>
      <span>PHone number:</span>
      <input type="text" value="<?php echo $phone;?>" name="phone" placeholder="enter phone" id="" required><br><br>
      <span>Designation:</span>
      <input type="text" value="<?php echo $desig;?>" name="designation" placeholder="enter designation" id="" required><br><br>
      <span>Salary:</span>
      <input type="text" value="<?php echo $salary;?>" name="salary" placeholder="enter salary" id="" required><br><br>
      <button type="submit" name="edit">UPDATE</button>
  </form>
</body>
</html>
