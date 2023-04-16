<?php require_once "scripts/session.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <style>
        nav a.nav-link {
            color: #fff !important;
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
  border-bottom: 2px solid #ccc;
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
    

    <title>Home Based Services</title>
</head>


<body style="background-color:white;">
<div class="site-identity">
    <a href="#"><img src="images/images.png" alt="Home Services" /></a>
  </div>  
    <nav class="nav bg-white">
        <?php if (!isset($_SESSION['user'])): ?>
            
            <a class="navbar-brand active" href="slider.php" ><font color="blue">Home</font color></a>
            <a class="navbar-brand" href="about.php"><font color="blue">About us</font color></a>
            <a class="navbar-brand" href="register.php"><font color="blue">Register as service provider</font color></a>
            <a class="navbar-brand" href="signin.php"><font color="blue">Login</font color></a>
            <a class="navbar-brand active" href="indexpage.php" ><font color="blue"> Find Service provider</font color></a>
        <a class="navbar-brand" href="sign.php"><i class="glyphicon glyphicon-list-alt "></i><font color="blue"> Chatbot</font color></a>
        <a class="navbar-brand" href="last.html"><font color="blue">Contact Us</font color></a>
        

        <?php elseif ($_SESSION['user']->name == 'admin'): ?>
        <a class="navbar-brand" href="managehall.php"><font color="blue">Manage providers</font color></a>
        <a class="navbar-brand" href="admin.php"><font color="blue">Manage booking</font color></a>
        <a class="nav-brand" href="admin/login.php"><font color="blue">Manage transactions<font color></a>
        <a class="navbar-brand" href="upload.html"><font color="blue">Upload website images</font color></a>
        <a class="nav-brand" href="signout.php"><font color="red-orange">Log Out</font color></a>
        <?php endif; ?>

    </nav>
        </body>
        </html>
