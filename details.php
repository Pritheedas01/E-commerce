 <?php
    $con= mysqli_connect("localhost","root","","user") or die(mysqli_error($con));
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
    $city=$_POST['city'];
    $address=$_POST['address'];
    $pattern_email="/^[_a-z0-9-]+(\[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z][2,3])$/";
    if (!preg_match($pattern_email, $email)) {
          echo "improper pattern is found";
        }
        elseif(empty ($email)){
            echo "enter the email";
        }
    if (empty($password)) 
       {
           echo "enter the password";
       }
       elseif (strlen($password)<6) {
           
           echo "password is too short";
        }
     if (empty($name)) 
       {
           echo "enter the name";
       }
      if (empty($city)) 
       {
           echo "enter the city";
       }
       if (empty($address)) 
       {
           echo "enter the address";
       }
       if (empty($contact)) 
       {
           echo "enter the contact";
       }
       elseif (strlen($contact)>10) {
           
           echo "enter the contact number upto 10 digit";
        }
    $user_registration_query="insert into user_info(name,email,password,contact,city,address) values('$name', '$email', '$password', '$contact', '$city', '$address')" or die($user_registration_query);
    $user_registration_submit=  mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    header('location:index.php?');
?>

