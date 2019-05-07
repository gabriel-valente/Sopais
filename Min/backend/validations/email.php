<?php $email=$_POST["email"];if(!filter_var($email,FILTER_VALIDATE_EMAIL)||strlen($email)>256){echo"Error";exit();}else{echo"Valid";exit();} ?>
