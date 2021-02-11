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
   <br>
    <br>
    <br>
    <div class="container">
       <div class="panel-default">
            <div class="panel panel-heading"><h4><b>Change password</b></h4></div>
        <div class="panel-body">   
            <form method="post" action="passchange.php">
                <div class="form-group">
                    <label for="old_password">Old password:</label>
                    <input type="password" class="form-control" placeholder="enter the old password" name="old_password" required = "true" pattern="(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                </div>
                <div class="form-group">
                    <label for="new_password">New password:</label>
                    <input type="password" class="form-control" placeholder="enter the new password" name="new_password" required = "true" pattern="(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                </div>
                <div class="form-group">
                    <label for="retype_new_password">Re-type New password:</label>
                    <input type="password" class="form-control" placeholder="retype the new password" name="retype_new_password" required = "true" pattern="(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                </div>
                <button class="btn btn-primary">Change</button>
            </form>         
        </div>
       </div>
    </div>
</body>  
</html> 