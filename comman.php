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
    </head>
    <body>
    <?php
    $con=mysqli_connect('127.0.0.1', 'root','root123','store')or die(mysqli_error($con));
    if(!isset($_SESSION['email'])){
        session_start();
    }
    
   ?>
    </body>
</html>

