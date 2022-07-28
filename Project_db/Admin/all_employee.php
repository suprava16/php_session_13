<!DOCTYPE html>
<html lang="en">
<head>
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

  <!-----------------all employee table-----------  -->

      <?php
         include "dbconfig.php";
         session_start();
         if(isset($_SESSION['admin_email']))
         {
           $qry="select * from emp_table";
           $result=$con->query($qry);
           if($result->num_rows>0)
           {
      ?>
         <table border="1" style="width:90%;margin:auto">
         <caption><h1>All Employees</h1></caption>
           <tr>
               <th>username</th>
               <th>email</th>
               <th>phone</th>
               <th>designation</th>
               <th>salary</th>
           </tr>
      <?php
           while($data=$result->fetch_assoc())
           {
              $username=$data['username'];
              $email=$data['email'];
              $phone=$data['phone'];
              $desig=$data['designation'];
              $salary=$data['salary'];
      ?>
           <tr>
                <td><?php echo $username;?></td>
                <td><?php echo $email;?></td>
                <td><?php echo $phone;?></td>
                <td><?php echo $desig;?></td>
                <td><?php echo $salary;?></td>
      <?php
                echo  "<td><a href='addtask.php?eid=$data[id]'>Add Task</a></td>";
                echo  "<td><a href='delete.php?uid=$data[id]'>delete</a></td>";
      ?> 
          </tr>    
          <?php
            }
          }  
        }
      ?>
        </table>
      </div>
    </div>
  </div>
</div>
 
</body>

</html>