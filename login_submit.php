<?php
include'comman.php';

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>product</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        $email =filter_input(INPUT_POST,"email");
        $password =filter_input(INPUT_POST,"password");

        $select_query = "SELECT *  FROM users WHERE email='$email' and password='$password'";
        $mysqli_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
        
        $mysqli_num_rows = mysqli_num_rows($mysqli_query_result);
        if ($mysqli_num_rows == 0) {
            echo " <span class='red'>Enter Correct email</span>";
        } else {
            $row = mysqli_fetch_array($mysqli_query_result);
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            
                
            header('location:products.php');
     
        }
        ?>
      /body>
</html>
