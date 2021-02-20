<?php
include 'comman.php';
$name = filter_input(INPUT_POST,"name");
$email=filter_input(INPUT_POST,"email");
$password=filter_input(INPUT_POST,"password");

$contact =filter_input(INPUT_POST,"contact");
$city=filter_input(INPUT_POST,"city");
$address=filter_input(INPUT_POST,"address");

$select_query = "SELECT * FROM users WHERE email='$email'";
$mysqli_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$mysqli_num_rows = mysqli_num_rows($mysqli_query_result);
if ($mysqli_num_rows > 0) {
    echo 'email id already exists';
} else {
    $con=mysqli_connect('127.0.0.1', 'root','root123','store')or die(mysqli_error($con));
    $user_registration_query = "insert into users(name,email,password,contact,city,address)values('$name','$email','$password','$contact','$city','$address')";
    $mysqli_result = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    
    $_SESSION['email']=$email;
   
    $_SESSION['user_id'] = mysqli_insert_id($con);
    
    header('location:products.php');
    
    
}

    


