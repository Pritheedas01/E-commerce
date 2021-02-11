<?php

   $con= mysqli_connect("localhost","root","","user") or die(mysqli_error($con));
   session_start();
   $user_check = $_SESSION['email'];
   $user_id=$_SESSION['id'];
   $old_password=$_POST['old_password'];
   $new_password=$_POST['new_password'];
   $retype_new_password = $_POST['retype_new_password'];
   if (empty($old_password)) 
       {
            echo "enter the od password";
       }
       elseif (strlen($old_password)<6) {
           
           echo "enter the od password";
        }
    if (empty($new_password)) 
       {
            echo "enter the new password";
       }
       elseif (strlen($new_password)<6) {
           
           echo " new password is too short";
        }
     if (empty($retype_new_password)) 
       {
           echo "retype the new password";
       }
       elseif (strlen($password)<6) {
           
           echo "enter the password again";
        }
   if(strcmp($new_password, $retype_new_password)==0)
    {
        $reset_sql = mysqli_query($con,"UPDATE user_info SET password='$new_password' where user_info.id='$user_id'") or die(mysqli_error($con));
        header('location:home.php');
    }
    else
    {
        echo "password doesn't matched";
        header('location:setting.php');
    }
    $new_password=  mysqli_real_escape_string($con,$new_password);
    $old_password=  mysqli_real_escape_string($con,$old_password);
    $retype_new_password=  mysqli_real_escape_string($con,$retype_new_password);
    
?>