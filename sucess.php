<?php

$con= mysqli_connect("localhost","root","","user") or die(mysqli_error($con));
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['id'];
$query = "UPDATE user_item SET selected='confirm' WHERE user_id=" . $user_id . " and selected='added'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>

<html>
    <head>
        <title>shoes trend</title>
        <link href="design.css" rel="stylesheet" type="text/css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class=" header navbar navbar-fixed-top navbar-inverse ">
        <div class="inner-header">
            <div class="logo"><a href="home.php" class="connect">SHOES STOREz  </a></div>
            <div class="header-link"><a href="logout.phpl" class="connect"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></div>
            <div class="header-link"><a href="setting.php" class="connect"><span class="glyphicon glyphicon-user"></span> SETTING</a></div>
        </div>
    </div>
        <br>
        <br>
        <br>
        <br>
    <center>
        <div class="container">
            <p>Thank you for ordering from Shoes Storez. The order shall be deliverd to you shortly</p>
            <br>
            <p>Order some more shoes <a href="home.php">here</a></p>
        </div>
    </center>
    </body>
</html>
