<?php
        require 'comman.php';
        if(isset($_SESSION['email'])){
            header('location:products.php');
        }
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
        <title>TODO supply a title</title>
        <link rel="icon" type="image.png" href="pa.jpg">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        
        
           <div class="container">
            <div class="row">
                <div style="width:400px;margin:auto;margin-top:100px;">
                    <h1>SIGN UP</h1>
                    <form method="post" action="signup_script.php">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="name" name ="name"
                                    required="true">
                        </div>
                        <div class="form-group">     
                            <input class="form-control" type="email" placeholder="email "name="email"
                               
                                   required="true" >

                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="password" name="password"
                                  required="true">
                        </div>
                        <div class="form-group"> 
                            <input class="form-control" type="text" placeholder="contact" name="contact"
                                   required="true">
                        </div>
                        <div class="form-group"> 
                            <input class="form-control"type="text" placeholder="city "name="city" required="true">
                        </div>
                         <div class="form-group"> 
                             <input class="form-control" type="text" placeholder="address"name="address" required="true">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary " style="font-size:20px;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
