<?php
include'comman.php';
if(!isset($_SESSION['email'])){
    header("location:index.php");   
}
$user_id=$_SESSION['user_id'];
$query="UPDATE users_items SET status='Confirmed' WHERE user_id=$user_id and status='Added_to_cart'";
mysqli_query($con, $query)or die(mysqli_error($con));
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>success</title>
        <link rel="icon" type="image.png" href="pa.jpg">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container text-center">
            <div class="alert alert-success" role="alert">
                <br> <br>
                <p style="font-size:25px;">Your order is confirmed.Thank you for shopping with us.
                <span><a href="products.php">Click here</a></span>
            to purchase any other item
        </p>
            </div>
          
        </div>
        
        </body>
</html>   




