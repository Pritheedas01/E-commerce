<?php
$con= mysqli_connect("localhost","root","","user") or die(mysqli_error($con));
session_start();
if (isset($_GET['id'])) {
    $item_id = $_GET["id"]; 
    $user_id = $_SESSION['id'];
    $query = "delete from user_item where item_id='$item_id' AND user_id='$user_id' ";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
    header("location:cart.php");
}
?>