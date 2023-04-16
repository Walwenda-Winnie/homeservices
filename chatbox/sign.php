<?php 
	include('connection.php');
	session_start();
	if(!$_SESSION['user']){
	header('location: login.php');	
	}
	else{
?>


<html>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login System | Main page</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
        <style>
            @font-face{
                font-family: "gotham-pro";
                src: url('fonts/gotham-pro-regular.eot');
                src: url('fonts/gotham-pro-regular.eot?#iefix') format('embedded-opentype'),
                url('fonts/gotham-pro-regular.svg#Gotham Pro') format('svg'),
                url('fonts/gotham-pro-regular.woff') format('woff'),
                url('fonts/gotham-pro-regular.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
            }   
            body{
			font-family: "gotham-pro";
			direction: ltr;

            background-image: url("images/chat-bot-robot-online-chatting-260nw-1155561181 (1).jpg");
            background-repeat: no-repeat;
            background-size: cover;
            }
            .user{
            margin-top:70px; 
            }
            .details{
                text-align: left;
            }   
            @media screen and (max-width:768px){
                .user{
                    margin-top:80px; 
                } 
                .details{
                text-align: center;
                }   
            }
        </style>
        <script src="js/jq.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
	</head>
	<body onload="content_load()">
		<nav class="navbar navbar-default navbar-fixed-top">
  			<div class="container">
  				<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>   
                    <a  class="navbar-brand" href="sign.php"><strong><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['name']; ?></a>
                </div>
                   <div class="collapse navbar-collapse" id="myNavbar">
				
                        <ul class="nav navbar-nav">
                            <li><a href="account.php"><strong><i class="glyphicon glyphicon-cog"></i> Accounts</strong></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="logoff.php"><strong><i class="glyphicon glyphicon-log-out"></i> Logout</strong></a></li>
                        </ul>
                    </div>
			</div>
	  	</nav>	

		


		<div class="container-fluid user" >
			<div class="row">
				<!-- chat box -->
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h4 class="lead" align="center"><i class="glyphicon glyphicon-user"></i> Registered Users </h4>
                        </div>
                        <div class="panel-body contents" align="center"	>   
                        </div>
                    </div>
                </div>
            </div>   
		</div>
<br/>
<!--Script working-->
        
                <script>
						function content_load(){
							$(function(){
								$.get("ajax/friends.php",function(data){
									$(".contents").html(data);
								});
							});
						}
						setInterval(function(){ content_load() },2000);
				</script>
        
<!-- footer-->
  <footer class="container-fluid" style="background:#444; font-size:19px; color:#fff;">
            <p align="center" style="padding-top:5px;">Copyright &copy; 2022</p>
            <p align="center">HOME SERVICES</p>
        </footer>
    

<!-- footer-->

	</body>
</html>
<?php } ?>