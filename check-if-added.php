<?php

function check_if_added_to_cart($item_id){
    include 'comman.php';
    
    $user_id=$_SESSION['user_id'];

    $mysqli_query="SELECT * FROM users_items WHERE item_id='$item_id' and  user_id='$user_id' and status='Added_to_cart'";
    $mysqli_num_rows1=mysqli_query($con, $mysqli_query);
    $mysqli_num_rows= mysqli_num_rows($mysqli_num_rows1);
    if($mysqli_num_rows>=1){
        return 1;
       

    }
    else{


        return 0;
    }
}
?>
