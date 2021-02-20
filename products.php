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
        include 'header.php';
        include 'check-if-added.php';
        ?>
        <div class="container" style="margin-top:55px;">
            <div class="row">
                <div class="jumbotron">
                    <h1>Welcome to our lifestyle store</h1>
                    <p>we have the best cameras,watches and shirts for you.No need to hunt around 
                        and we have all in one place</p>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="5.jpg" alt="">
                        <div class="caption">
                            <center>
                                
                                <h3>cannon EOS</h3>
                                <p>price:Rs.36000.00/-</p>
                            </center>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">
                                            BuyNow
                                        </a>
                                       
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(1)) {
                                        echo '<a href="#"class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        ?>
                                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                                
                            

                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="2.jpg" alt="">
                        <div class="caption">
                            <center>
                                <h3>Nikon DSLR</h3>
                                <p>price:Rs.40000.00/-</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block"> BuyNow</a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(2)) {
                                        echo '<a href="#"class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        ?>
                                        <a href="cart-add.php?id=2" name="add"value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                               
                            </center>

                        </div>
                    </div>

                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="3.jpg" alt="">
                        <div class="caption">
                            <center>
                                <h3>sony DSLR</h3>
                                <p>price:Rs.45000.00/-</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" role="button"class="btn btn-primary btn-block">
                                            BuyNow
                                        </a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(3)) {
                                        echo '<a href="#"class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        ?>
                                        <a href="cart-add.php?id=3" name="add"value="add "class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                               
                            </center>

                        </div>
                    </div>

                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="4.jpg" alt="">
                        <div class="caption">
                            <center>
                                <h3>Olympus DSLR</h3>
                                <p>price:Rs.50000.00/-</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php"role="button"class="btn btn-primary btn-block">
                                            BuyNow
                                        </a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(4)) {
                                        echo '<a href="#"class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        ?>
                                        <a href="cart-add.php?id=4" name="add"value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                                
                            </center>
                        </div>
                    </div>

                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="9.jpg" alt="">
                        <div class="caption">
                            <center>
                                <h3>Titan model#301</h3>
                                <p >price:Rs.13000.00/-</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php"role="button"class="btn btn-primary btn-block">
                                            BuyNow
                                        </a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(5)) {
                                        echo '<a href="#"class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        ?>
                                        <a href="cart-add.php?id=5" name="add"value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                               
                            </center>

                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="10.jpg" alt="">
                        <div class="caption">
                            <center>
                                <h3>Titan model#201</h3>
                                <p >price:Rs.3000.00/-</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php"role="button"class="btn btn-primary btn-block">
                                            BuyNow
                                        </a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(6)) {
                                        echo '<a href="#"class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        ?>
                                        <a href="cart-add.php?id=6" name="add"value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                             
                            </center>

                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="11.jpg" alt="">
                        <div class="caption">
                            <center>
                                <h3>HMT milan</h3>
                                <p >price:Rs.8000.00/-</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">
                                            BuyNow
                                        </a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(7)) {
                                        echo '<a href="#"class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        ?>
                                        <a href="cart-add.php?id=7" name="add"value="add "class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                           
                            </center>

                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="4.jpg" alt="">
                        <div class="caption">
                            <center>
                                <h3>Faber luba #111</h3>
                                <p>price Rs.18000.00/-</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php"role="button"class="btn btn-primary btn-block">
                                            BuyNow
                                        </a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(8)) {
                                        echo '<a href="#"class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        ?>
                                        <a href="cart-add.php?id=8" name="add"value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                            
                            </center>

                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="8.jpg" alt="">
                        <div class="caption">
                            <center>
                                <h3>H&W</h3>
                                <p >price:Rs.800.00/-</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php"role="button"class="btn btn-primary btn-block">
                                            BuyNow
                                        </a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(9)) {
                                        echo '<a href="#"class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        ?>
                                        <a href="cart-add.php?id=9" name="add"value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                             
                            </center>

                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="6.jpg" alt="">
                        <div class="caption">
                            <center>
                                <h3>Luis Phil</h3>
                                <p >price:Rs.1000.00/-</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php"role="button"class="btn btn-primary btn-block">
                                            BuyNow
                                        </a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(10)) {
                                        echo '<a href="#"class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        ?>
                                        <a href="cart-add.php?id=10" name="add"value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                             
                            </center>

                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="13.jpg" alt="">
                        <div class="caption">
                            <center>
                                <h3>John Zok </h3>
                                <p >price:Rs.1500.00/-</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">
                                            BuyNow
                                        </a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(11)) {
                                        echo '<a href="#"class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        ?>
                                        <a href="cart-add.php?id=11" name="add"value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                               
                            </center>

                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="14.jpg" alt="">
                        <div class="caption">
                            <center>
                                <h3>Jhalsani</h3>
                                <p >price:Rs.1300.00/-</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">
                                            BuyNow
                                        </a></p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(12)) {
                                        echo '<a href="#"class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        ?>
                                        <a href="cart-add.php?id=12" name="add"value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                                
                            </center>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php
        include"footer.php";
        ?>
    </body>
</html>

