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
    </style>

    <title>Home Services</title>
</head>

<body>
    <nav class="nav bg-dark">
        <?php if (!isset($_SESSION['user'])): ?>
            <a class="navbar-brand active" href="indexpage.php">Find Service Provider</a>
        <a class="navbar-brand" href="signin.php">Login</a>
        <a class="navbar-brand" href="register.php">Register Service Provider</a>
        <a class="navbar-brand" href="sign.php"><strong><i class="glyphicon glyphicon-list-alt "></i> Chat Box - Main Menu</strong></a>
       
        <a class="navbar-brand" href="about.php">About</a>

        <?php elseif ($_SESSION['user']->name == 'admin'): ?>

          
        <a class="navbar-brand" href="managehall.php">Manage Providers</a>
        <a class="navbar-brand" href="admin.php">Manage Booking</a>
        <a class="navbar-brand" href="invoice.php">Billing System</a>
       

        <?php else: ?>
        <a class="nav-link" href="signout.php">Log Out</a>
        <?php endif; ?>

    </nav>
        </body>
        </html>
