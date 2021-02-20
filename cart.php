
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>cart</title>
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
        include 'comman.php';
        ?>

        <div class="container ">
            <div class="row">
                <div style="margin-top:100px;">
                    <div class="table-responsive">
                        <table class="table table-bordered ">

                            <thead>
                                <tr>
                                    <th>Item id</th>
                                    <th>Item name</th>
                                    <th>price</th>
                                    <th>order</th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php
                                $sum = 0;
                                $user_id = $_SESSION['user_id'];

                                $query = "select items.price as price,items.id as id,items.name as name from users_items inner join items  on items.id=users_items.item_id where users_items.user_id='$user_id'and status='Added_to_cart'";

                                $result = mysqli_query($con, $query) or die(mysqli_error($con));
                                $mysqli_num_rows = mysqli_num_rows($result);

                                if ($mysqli_num_rows == 0) {
                                    echo 'Add items to the cart first!';
                                } else {
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <tr><td><?php echo $row['id']; ?></td> 
                                            <td><?php echo $row['name']; ?></td>

                                            <td><?php echo $row['price']; ?></td>
                                            
                                            <?php echo $sum;$sum = $sum + $row['price']; ?>
                                            <?php
                                            echo"<td> <a href='cart-remove.php?id={$row['id']}' class='remove_item_link'>Remove</a></td></tr>";
                                          
                                            
                                            
                                        }
                                        ?>


                                        <?php
                                    }
                                    ?>
                                    <?php
                                    echo "<tr>
  <td> </td>
  <td>Total </td>
  <td>Rs" . $sum . "</td>
  <td> <a href='success.php?user_id=" . $user_id . "' class='btn btn-primary'> Confirm Order</a></td>
  </tr>";
                                    ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <?php
        include "footer.php";
        ?>
    </body>
</html>   


