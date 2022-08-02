<?php
 include "dbconfig.php";
session_start();
if(isset($_SESSION['session_id'])){

  $sql="select * from emp_table where id=$_SESSION[session_id]";
  $result=$con->query($sql);
  if($result->num_rows>0){
    $data=$result->fetch_assoc();
    $username=$data['username'];
    $email=$data['email'];
    $designation=$data['designation'];
    $salary=$data['salary'];
    $phone=$data['phone'];
    $profile_image=$data['profile_image'];

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
<div class="card" style="width:400px;margin:auto;margin-top:100px;padding:20px">
<img src="<?php echo $profile_image;?>" style="height:200px;width:200px;border-radius:50%;margin:auto" class="card-img-top" alt="">
  <!-- <a href="<?php echo $profile_image;?>" target="_blank">PDF LINK</a> -->
  <div class="card-body">
    <h1>Profile Details</h1>
    <h5 class="card-title"><?php echo "Hello  $username";?></h5>
   <h6><?php echo "Your Email: ",$email;?></h6>
   <h6><?php echo "Your Phone: ",$phone;?></h6>
   <h6><?php echo "Your Designation: ",$designation;?></h6>
   <h6><?php echo "Your Salary: ",$salary;?></h6>
   <form action="fileupload.php" method="post" enctype="multipart/form-data">
   <div class="input-group mb-3">
       <input type="file" name="profile_image" class="form-control" id="inputGroupFile02">
       <button class="btn btn-outline btn-primary" type="submit" id="inputGroupFileAddon04">Button</button>
  </div>
   </form><br/>
   <button class="btn btn-outline btn-success"><a href="UpdateProfile.php">Update</a></button>
   <button class="btn btn-outline btn-danger"><a href="home.php">Back</a></button>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>