<?php
   $con= mysqli_connect("localhost","root","","user") or die(mysqli_error($con));
   session_start();
   $user_check = $_SESSION['email'];
   $user_id=$_SESSION['id'];
   $ses_sql = mysqli_query($con,"select email from user_info where email = '$user_check' ") or die(mysqli_error($con));
    $row = mysqli_fetch_array($ses_sql) or die(mysqli_error($con));
   $login_session = $row['email'];
   if(!isset($_SESSION['email'])){
      header("location:index.php");
      die();
   }
   function already_added($item_id){
       $con= mysqli_connect("localhost","root","","user") or die(mysqli_error($con));
       $user_check = $_SESSION['email'];
       $user_id=$_SESSION['id'];
       $query="select * from user_item where item_id='$item_id' and user_id='$user_id' and selected='added'";
       $result=  mysqli_query($con, $query) or die(mysqli_error($con));
       if(mysqli_num_rows($result)>=1){
           return 1;
       }
        else {
           return 0;
       }   
   }
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
            <div class="header-link"><a href="logout.php" class="connect"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></div>
            <div class="header-link"><a href="setting.php" class="connect"><span class="glyphicon glyphicon-user"></span> SETTING</a></div>
            <div class="header-link"><a href="cart.php" class="connect"><span class="glyphicon glyphicon-shopping-cart"></span> CART</a></div>
        </div>
    </div>
    <div class="content">
        <div class="banner-image">
            <div class="inner-banner-image">
                <div class="container">
                        <div class="banner-content">
                            <h1>Grab Your Pairs Today</h1>
                            <p>Flat 40% OFF on premium brands</p>
                            <br>
                            <a href="#product" class=" btn-lg-active button"><b>SHOP NOW</b> </a>
                        </div> 
                </div> 
            </div>
        </div>
    </div>
        <br>
        <center><div class="border"><center><h5><b>OUR COLLECTION</b></h5></center></div></center>
        <br>
        <hr/>
    <div class="container-fluid" id="product">
       <center>
            <div class="control">
                <div class="row">
                    <div class="col-xs-4 panel panel-default">
                        <div class="panel-heading head"><h4><b>HRX</b></h4></div>
                        <div class="panel-body" >
                              <img src="pics/shoescount1.jpg" class="resize">
                            <div class="caption">
                                <h4>HRX BY Hrithik Roshan</h4>
                                <p style="color: gray">Men Black Solid Running Shoes</p>
                                <p><b>Rs.1934</b>  <s>  Rs. 4299</s><mark>(55% OFF)</mark></p>
                                <br>
                                <?php
                                    if(already_added(1)){
                                        echo '<a href="#" class=" btn-lg-active button1"><b>ADD TO CART</b> </a>';
                                    }
                                    else {
                                ?>
                                <a href="cart_add.php?item_id=1" class=" btn-lg-active button1"><b>ADD TO CART</b> </a>
                                <?php
                                    }
                                 ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 panel panel-default">
                        <div class="panel-heading head"><h4><b>SUPERDRY</b></B></h4></div>
                        <div class="panel-body"> 
                              <img src="pics/shoescoount2.jpg" class="resize">
                            <div class="caption">
                                <h4>Superdry</h4>
                                <p style="color: gray">Men Olive Green Sneakers</p>
                                <p><b>Rs.2799</b>  <s>  Rs. 3999</s><mark>(30% OFF)</mark></p>
                                <br>
                                <?php
                                    if(already_added(2)){
                                        echo '<a href="#" class=" btn-lg-active button1"><b>ADD TO CART</b> </a>';
                                    }
                                    else {
                                ?>
                                <a href="cart_add.php?item_id=2" class=" btn-lg-active button1"><b>ADD TO CART</b> </a>
                                <?php
                                    }
                                 ?> 
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 panel panel-default">
                        <div class="panel-heading head"><h4><b>ADIDAS</b></h4></div>
                        <div class="panel-body">
                              <img src="pics/shoecount3.jpg" class="resize">
                            <div class="caption">
                                <h4>ADIDAS</h4>
                                <p>Men Black Solid Running Shoes</p>
                                <p><b>Rs.1934</b>  <s>  Rs. 4299</s><mark>(55% OFF)</mark></p>
                                    <br>
                                 <?php
                                    if(already_added(3)){
                                        echo '<a href="#" class=" btn-lg-active button1"><b>ADD TO CART</b> </a>';
                                    }
                                    else {
                                ?>
                                <a href="cart_add.php?item_id=3" class=" btn-lg-active button1"><b>ADD TO CART</b> </a>
                                <?php
                                    }
                                 ?>
                            </div>
                        </div>
                    </div>
                </div>
           <div class="row">
                    <div class="col-xs-4 panel panel-default">
                        <div class="panel-heading head"><h4><b>WRONG</b></h4></div>
                        <div class="panel-body">
                              <img src="pics/shoecount4.jpg" class="resize">
                            <div class="caption">
                                <h4>WRONG</h4>
                                <p>Men White Solid Sneakers</p>
                                <p><b>Rs.2239</b>  <s>  Rs. 3199</s><mark>(30% OFF)</mark></p>
                                <br>
                                <?php
                                    if(already_added(4)){
                                        echo '<a href="#" class=" btn-lg-active button1"><b>ADD TO CART</b> </a>';
                                    }
                                    else {
                                ?>
                                <a href="cart_add.php?item_id=4" class=" btn-lg-active button1"><b>ADD TO CART</b> </a>
                                <?php
                                    }
                                 ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 panel panel-default">
                        <div class="panel-heading head"><h4><b>NIKE</b></h4></div>
                        <div class="panel-body">
                              <img src="pics/shoecount6.jpg" class="resize">
                            <div class="caption">
                                <h4>Nike</h4>
                                <p>Men Black FLEX CONTROL TR4 Trainig Shoes</p>
                                <p><b>Rs.5495</b></p>
                                <br>
                               <?php
                                    if(already_added(5)){
                                        echo '<a href="#" class=" btn-lg-active button1"><b>ADD TO CART</b> </a>';
                                    }
                                    else {
                                ?>
                                <a href="cart_add.php?item_id=5" class=" btn-lg-active button1"><b>ADD TO CART</b> </a>
                                <?php
                                    }
                                 ?>  
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 panel panel-default">
                        <div class="panel-heading head"><h4><b>MAST & HARBOUR</b></h4></div>
                        <div class="panel-body">
                              <img src="pics/shoescount5.jpg" class="resize">
                            <div class="caption">
                                <h4>Mast & Harbour</h4>
                                <p>Men white Solid Sneakers</p>
                                <p><b>Rs.1304</b>  <s>  Rs. 2899</s><mark>(55% OFF)</mark></p>
                                <br>
                                <?php
                                    if(already_added(6)){
                                        echo '<a href="#" class=" btn-lg-active button1"><b>ADD TO CART</b> </a>';
                                    }
                                    else {
                                ?>
                                <a href="cart_add.php?item_id=6" class=" btn-lg-active button1"><b>ADD TO CART</b> </a>
                                <?php
                                    }
                                 ?> 
                            </div>
                        </div>
                    </div>
             </div>
          </center>
        </div>
        <hr/> 
</body>  
</html> 

