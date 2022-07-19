<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div style="width:600px;margin:auto">
  <h1>Employee Registration Form</h1>
  <hr>
  <?php
  if(isset($_GET['msg'])){
    if($_GET['msg']==='success'){
      echo '<h3 style="color:green">data inserted successfully...</h3>';
    }
  }
  
  ?>
<form action="insert_emp_data.php" method="post">
      <input type="text" name="username" placeholder="enter username" id="" required><br>
      <input type="email" name="email" placeholder="enter email" id="" required><br>
      <input type="text" name="phone" placeholder="enter phone" id="" required><br>
      <input type="text" name="designation" placeholder="enter designation" id="" required><br>
      <input type="text" name="salary" placeholder="enter salary" id="" required><br>
      <input type="password" name="password" placeholder="password" id="" required><br>
      <button type="submit" name="register">Register</button>
  </form>
</div>
</body>
</html>