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
            <div class="logo"><a href="index.php" class="connect">SHOES STOREz  </a></div>
            <div class="header-link"><a href="contact.php"  class="connect" ><span class="glyphicon glyphicon-phone"></span> CONTACT US</a></div>
            <div class="header-link"><a href="about.php" class="connect"><span class="glyphicon glyphicon-tasks"></span> ABOUT US</a></div>
            <div class="header-link"><a href="#myModal" class="connect" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></div>
            <div class="header-link"><a href="signup.php" class="connect"><span class="glyphicon glyphicon-user"></span>  SIGNUP</a></div>
        </div>
    </div>
    <br>
    <br>
        <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">LOGIN</h4>
          </div>
          <div class="modal-body">
            <p>Don't have an account?<a href="signup.html">Register</a></p>
            <form method="post" action="login.php">
                     <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                     </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required = "true" pattern="(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                    </div>
               <div class="form-group"> <button class="btn btn-primary">Login</button></div>
                <p><a>Forget Password?</a></p>
              </form>
          </div>
        </div>
      </div>
    </div>
        <div class="container-fliud">
            <div class="backimage">
                <div class="row">
                    <div class="col-xs-8">
                   
                    </div>
                     <div class="col-xs-4 form">
                    <h2><b>SIGN UP</b></h2>
                    <form method="post" action="details.php">
                        <div class="form-group">
                            <label for="name">Name:</label>
                             <input type="text" name="name" class="form-control" placeholder="enter the name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                             <input type="text" name="email" class="form-control" placeholder="enter the email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" class="form-control" placeholder="enter the password" required = "true" pattern="(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                       </div>
                        <div class="form-group">
                            <label for="contact">Contact:</label>
                            <input type="text" name="contact" class="form-control" maxlength="10" placeholder="enter the contact"  pattern="[0-9]{5}-[0-9]{5}" required>
                        </div>
                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" name="city" class="form-control" placeholder="enter the city">
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" name="address" class="form-control" placeholder="enter the Address">
                        </div>
                        <div class="form-group">
                             <button class="btn btn-primary">submit</button>
                        </div>
                   
                    </form>
                </div>
                </div>
            </div>
        
        </div>
    <footer class="back">
        <div class="container-fliud textcolor"  >
            <div class="container">
                 <div class="row">
                       <div class="col-xs-4">
                            <div><h3><b>Information</b></h3></div>
                            <div>
                                <div><a href="about.php" class="connect">About us</a></div>
                                <div><a href="contact.php" class="connect">Contact us</a></div>
                           </div>
                       </div>
                       <div class="col-xs-4">
                            <div><h3><b>My Account</b></h3></div>
                            <div>
                                <div><a href="#myModal" class="connect" data-toggle="modal">Login</a></div>
                                <div><a href="signup.php" class="connect">Sign up</a></div>
                           </div>
                       </div>
                       <div class="col-xs-4">
                            <div><h3><b>Contact us</b></h3></div>
                            <div>
                                <div><p>Contact +91 00000 00000</p></div>       
                           </div>
                       </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </footer> 
    </body>
</html>  




