<?php
include 'comman.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
$email=$_SESSION['email'];
$old_pass=filter_input(INPUT_POST,'old_password');

$old_pass=  mysqli_real_escape_string($con,$old_pass);
$new_pass=$_POST['new_password'];
$new_pass= mysqli_real_escape_string($con,$new_pass);
$rep_pass=$_POST['Re-type_New_password'];
$rep_pass=  mysqli_real_escape_string($con,$rep_pass);
$query="SELECT * FROM users WHERE password='$old_pass' and email='$email'";
$result=  mysqli_query($con, $query)or die(mysqli_error($con));
$row=  mysqli_fetch_array($result);
$orig_pass=$row['password'];
$user_id=$row['id'];

if($new_pass!=$rep_pass){
    header('location:settings.php?error=THE_TWO_password_do_not_match.');
}
else{
    if($old_pass==$orig_pass){
        
        $query="UPDATE users SET password='$new_pass' WHERE email='$email' AND id='$user_id'";
        $mysqli_result=mysqli_query($con, $query)or die(mysqli_error($con));
        header('location:settings.php?error=password updated successfully');
    }else{
        header('location:settings.php?error=wrong old password.');
        
    }
}
?>