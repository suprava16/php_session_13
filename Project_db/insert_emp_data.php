<?php
// fetching data from registration.php file
if(isset($_POST['register'])){
$name=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$designation=$_POST['designation'];
$salary=$_POST['salary'];
$password=$_POST['password'];



// database connection
$con=new mysqli("localhost","root","","emp_data");
 if($con->connect_error){
  die("something wrong in database connection..............Please Check.");
 }

// inserting data into table
$sql="insert into emp_table values(0,'$name','$email','$phone','$designation',$salary,'$password')";
if($con->query($sql)){


  // <!-- echo "data inserted successfully"; -->
  // <script>
  //   alert("data inserted successfully");
  // </script>
  // header("location:login.php");

  header("location:Registration.php?msg=success");

}
else{
  echo "something wrong in insertion....try again";
}

}
else{
  echo "something wrong....please try again!!";
}

?>