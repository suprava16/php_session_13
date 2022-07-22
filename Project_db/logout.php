<?php
session_start();
session_unset(); //data removed
session_destroy();//session removed
header("location:login.php");



?>