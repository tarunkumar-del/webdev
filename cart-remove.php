<?php

include 'comman.php';
if(isset($_GET['id'])){
    $item_id=$_GET['id'];
    $user_id=$_SESSION['user_id'];
    $query="DELETE FROM store.users_items WHERE  users_items.user_id='$user_id' and  users_items.item_id='$item_id'";
    $result=  mysqli_query($con, $query)or die(mysqli_error($con));
    header("location:cart.php");
}
?>
