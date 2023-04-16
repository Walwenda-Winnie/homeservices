
 <!DOCTYPE html>
<html>
	<head>
        <meta http-equiv="refresh" content=""/>	
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Chat Box - Main Menu</title>
        <link rel="stylesheet" href="chatbox/css/bootstrap.min.css"/>
        <script src="chatbox/js/jquery_library.js"></script>
		<script src="chatbox/js/bootstrap.min.js"></script>
        <style>
         @font-face{
                font-family: "gotham-pro";
                src: url('chatbox/fonts/gotham-pro-regular.eot');
                src: url('chatbox/fonts/gotham-pro-regular.eot?#iefix') format('embedded-opentype'),
                url('chatbox/fonts/gotham-pro-regular.svg#Gotham Pro') format('svg'),
                url('chatbox/fonts/gotham-pro-regular.woff') format('woff'),
                url('chatbox/fonts/gotham-pro-regular.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
            }   
            body{
			font-family: "gotham-pro";
			direction: ltr;
            background-image: url("images/431784812.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            <style>
        
            }
footer{
    color: #fff;
    padding: 15px 0px;
    font-size: 17px;
    background-color: #222;
}
            .panel-body{
                padding-bottom: 10px;
            }

            
    
        nav a.nav-link {
            color: white !important;
        }
        
         body {
            background-color: white;
         }
         
    a{
      text-indent: 1.0cm;
    }
    body {
  font-family: Helvetica;
  margin: 0;
}
a {
  text-decoration: none;
  color: #000;
}
.site-header { 
  border-bottom: 2px solid white;
  padding: .5em 1em;
}

.site-header::after {
  content: "";
  display: table;
  clear: both;
}

.site-identity {
  float: left;
}

.site-identity h1 {
  font-size: 1.5em;
  margin: .7em 0 .3em 0;
  display: inline-block;
}

.site-identity img {
  max-width: 40px;
  float: top left;
  margin: 0 0px 0 0;
}

.site-navigation {
  float: right;
}

.site-navigation ul, li {
  margin: 0; 
  padding: 0;
}

.site-navigation li {
  display: inline-block;
  margin: 1.0em 1em 1em 1em;
}
  
      
        </style>
    </head>
	<body style="background-color:white;">
<div class="site-identity">
    <a href="#"><img src="images/images.png" alt="Home Services" /></a>
  </div>  
    <nav class="nav bg-white">
        <?php if (!isset($_SESSION['user'])): ?>
            
          <a class="navbar-brand active" href="slider.php" ><font color="white">Home</font color></a>
            <a class="navbar-brand" href="about.php"><font color="white">About us</font color></a>
            <a class="navbar-brand" href="register.php"><font color="white">Register as service provider</font color></a>
            <a class="navbar-brand" href="signin.php"><font color="white">Login</font color></a>
            <a class="navbar-brand active" href="indexpage.php" ><font color="white"> Find Service provider</font color></a>
        <a class="navbar-brand" href="sign.php"><i class="glyphicon glyphicon-list-alt "></i><font color="white"> Chatbot</font color></a>
        <a class="navbar-brand" href="last.html"><font color="white">Contact Us</font color></a>
        

        <?php elseif ($_SESSION['user']->name == 'admin'): ?>
        <a class="navbar-brand" href="managehall.php"><font color="white">Manage providers</font color></a>
        <a class="navbar-brand" href="admin.php"><font color="white">Manage booking</font color></a>
        <a class="nav-brand" href="admin/login.php"><font color="white">Manage transactions<font color></a>
        <a class="navbar-brand" href="upload.html"><font color="white">Upload website images</font color></a>
        <a class="nav-brand" href="signout.php"><font color="white">Log Out</font color></a>
        <?php endif; ?>

    </nav>
        </body>
                </div>
			</div>
		</nav>	
		<!-- navbar ends-->
		<div class="container-fluid" style="background: #f3f3f3; margin-top:50px;">
			<br/><div class="row">
				<!-- Main Menu -->
            <div class="col-sm-3"></div>
				<div class="col-sm-3">
                    <div class="panel" style="border-radius:0px; box-shadow:2px 2px 4px 0px">
                        <div class="panel-heading" id="signin_panel_header">
                            <p align="center"> <img src="chatbox/admin/user.png" style="width: 50%;border-radius: 50%;text-align: center;margin-top: 20px;"/> </p>
                            <h4 align="center" style="padding-top:5px;">ChatBox Login</h4><hr/>
                        </div>
                        <div class="panel-body" style="margin-top:-30px;">
                           <center>
                                  <a class="btn btn-success" style="padding:15px 20px;" href="chatbox/login.php"><i class="glyphicon glyphicon-log-in"></i>  Visit</a>
                         </center>
                        </div>
                    </div>
                </div>
                <!-- Admin Menu -->
				<div class="col-sm-3">
                    <div class="panel" style="border-radius:0px; box-shadow:2px 2px 4px 0px">
                        <div class="panel-heading" id="signin_panel_header">
                            <p align="center"> <img src="chatbox/admin/user.png" style="width: 50%;border-radius: 50%;text-align: center;margin-top: 20px;"/> </p>
                            <h4 align="center" style="padding-top:5px;">Admin Login</h4><hr/>
                        </div>
                        <div class="panel-body" style="margin-top:-30px;">
                           <center>
                               <a class="btn btn-success" style="padding:15px 20px;" href="chatbox/admin/login.php"><i class="glyphicon glyphicon-log-in"></i>  Visit</a>
                            </center>
                        </div>
                    </div>
                </div>
            <div class="col-sm-3"></div>
			</div>
		</div>
		<!-- Main div end -->
		<footer 
        style="border-top: 1px solid #333;width: 100%; position: fixed; bottom: 0px;text-align: center;height: 40px; line-height: 40px; background: white; ">
    <font color="black"><strong> Home Based Service Provider &copy; <?= date("Y") ?></strong>
        </footer>
		<!-- footer end-->
	</body>
</html>