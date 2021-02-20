<?php
include 'comman.php'
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
         <nav class="navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>


                    </button>
                    <a href="index.php" class="navbar-brand">Lifestyle</a>


                </div>
                <div class="collapse navbar-collapse" id="my">

                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if(isset($_SESSION['email'])){
                        ?>
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart">Cart</a></span></li>    
                        <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        <?php
                        }else{
                        ?>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user">Sign Up</span></a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-user">login</span></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
        </nav>
        
    </body>
</html>


