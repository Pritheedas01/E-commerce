<?php
    $con= mysqli_connect("localhost","root","","user") or die(mysqli_error($con));
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myemail = $_POST['email'];
      $mypassword = $_POST['password'];
      $pattern_email="/^[_a-z0-9-]+(\[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z][2,3])$/";
    
        $pattern_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
        if (!preg_match($pattern_email, $myemail)) {
          echo "improper pattern is found";
        }
        elseif(empty ($myemail)){
            echo "enter the email";
        }
        if (strlen($mypassword) < 6) {
          echo "enter the new password";
        }
        elseif (empty ($mypassword)) {
            echo "enter the password";
    }
      $sql = "SELECT id,email,password FROM user_info WHERE email = '$myemail' and password = '$mypassword'";
      $result = mysqli_query($con, $sql) or die(mysqli_error($con));
      $row = mysqli_fetch_array($result) or die(mysqli_error($con));
      $count = mysqli_num_rows($result);	
      if($count == 1) { 
         $_SESSION['id']=  $row['id'];
         $_SESSION['email'] = $row['email'];
         header('location:home.php');
      }
      else
      {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

