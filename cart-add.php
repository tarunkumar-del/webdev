<?php

include 'comman.php';
$item_id = $_GET['id'];
$user_id = $_SESSION['user_id'];
$mysqli_query = "INSERT INTO users_items(user_id,item_id,status) VALUES('$user_id','$item_id','Added_to_cart')";
$mysqli_result=mysqli_query($con, $mysqli_query) or die(mysqli_error($con));
header('location:products.php');
?>



