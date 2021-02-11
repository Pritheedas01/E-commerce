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
        <div class="container">
            <div class="row-responsive">
                <div class="col-xs-9">
                   <h3><b>LIVE SUPPORT</b></h3>
            <H5>24HOURS | 7 DAYS A WEEK | 365 DAYS A YEAR LIVE TECHNICAL SUPPORT</H5>
            <p>It is long established fact that a reader will be distracted by the readable content of a page when looking at its layout.the point of using Lorem lpsum is that it has a more-or-less normal distribution of letters. threre are many variation of passages of lorem lpsum available, but the majority have sufferly attention in some form,by injection humour, or randomised words which don't look even slighty believeable.If you are going to use a passge of Lorem lpsum,you need to besure there isn't anything embarrassing hidden in the middle of text.</p> 
                </div>
                <div class="col-xs-3">
                    <img src="pics/images.png" class="resize">
                </div>
            </div>
                <div class="row">
                    <div class="col-xs-9">
                        <h4><b>CONTACT US:</b></h4>
                        <form>
                            <div class="form">
                                <form>
                                    <label>Name:</label>
                                    <input type="text" name="name" size="15" maxlength="30" class="form-control">
                                     <label>Email:</label>
                                    <input type="text" name="name" size="15" maxlength="30" class="form-control">
                                    <label>Message:</label>
                                    <textarea name="comments" cols="20" rows="4" class="form-control"></textarea>
                                </form>
                            
                            </div>
                        </form>  
                    </div>
                    <div class="col-xs-3">
                        <h4><b>Company Information:</b></h4>
                        <p>500 Lorem lpsumDolor sit,</p>
                        <p>22-56-2-9 Sit Amet,Lorem,</p>
                        <p> USA</p>
                        <p>Phone(+91)00000 00000</p>
                        <p>Fax(000)000 00 00 0</p>
                        <p>Email:info@mycompany.com</p>
                        <p>Follow on:Facebook,twitter</p>
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