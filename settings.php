<?php
include 'comman.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>setting</title>
        <link rel="icon" type="image.png" href="pa.jpg">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <div class="container">
            <div class="row" style="width:500px;margin-top:55px;margin-left:auto;margin-right:auto;">
                <h1>Change password</h1>
                <form action="settings_script.php" method="post">
                    
                   <div class="form-group ">
                            <input  type="password" class=form-control placeholder="old password" name="old_password">
                    </div>
                    
                   <div class="form-group">
                        <input   type="password" class=form-control  placeholder="new password" name="new_password">
                    </div>
                    
                    <div class="form-group">
                         <input  type="password" class=form-control placeholder="Re-type New password" name="Re-type_New_password">
                    </div>
                           
                   <div class="form-group">
                       <button type="submit"class="btn btn-primary">change</button>
                    </div>
                </form>
            </div>
        </div> 
        <?php
        include 'footer.php';
        ?>
    </body>
</html>


