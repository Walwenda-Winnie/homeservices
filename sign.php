
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
        </style>
    </head>
	<body style="background: #ccc;">
		<nav class="navbar navbar-default navbar-fixed-top" style="background:">
			<div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand"><strong><i class="glyphicon glyphicon-list-alt "></i> Chat Box - Main Menu</strong></a>
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
		<footer class="container-fluid" style="background:#444; color:#fff;">
            <p align="center">Copyright &copy; 2022</p>
            <p align="center">HOME SERVICES</p>
        </footer>
		<!-- footer end-->
	</body>
</html>