<?php
        require 'comman.php';
        include 'header.php';
        ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title></title>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    
    </head>
    <body>
        
        <div class="container" style=" width:500px;
                margin:auto;
            height:auto;">
            <div class="row"  style="margin-top:90px;">
                <div class="panel panel-primary">

                    <div class="panel-heading">
                        <h1>Login</h1>
                    </div>
                    <br>
                    <p class="text-warning ">Login to make purchase</p>
                    
                    <div class="panel body">
                        <form method="post" action="login_submit.php">
                            <div class="form-group">

                                <input  type="email" class="form-control" placeholder="email" name="email"required="true"> 
                            </div>
                            <div class="form-group">
                                <input  type="password" class="form-control" placeholder="password" name="password" required="true">
                            </div>
                            <button type="submit" class="btn btn-primary " style="font-size:20px;">Login </button>
                        </form>
                    </div>
                    <div style="margin-top:40px;padding:10px;" class="panel-footer">
                        <p>Don't have an account<span><a style="text-decoration:none;" href='signup.php'>Register</a></span></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>




