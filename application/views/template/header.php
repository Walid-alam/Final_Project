<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title><?php echo $title; ?></title>


    <!-- Bootstrap -->
       <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
       <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">

    <script type="text/javascript" src="/Fahim/vendores/js/jquery-1.12.4.min%20.js"></script>
    <script type="text/javascript" src="/Fahim/Resourse/js/main.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyDxBaqf9bKLVsBVOYMe1C5VE2wTQ7jXa0A" async="" defer="defer" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="/Fahim/vendores/css/node_modules/normalize.css/">
        <link rel="stylesheet" type="text/css" href="/Fahim/vendores/css/grid.css"> 
        <link rel="stylesheet" type="text/css" href="/Fahim/Resourse/css/style.css">
        <link rel="stylesheet" type="text/css" href="/Fahim/vendores/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="/Fahim/Resourse/css/query.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/Fahim/Resourse/css/bootstrap.min.css">

           
    </head>
    <body>
        <div class="menu">
                   <i><a href="<?php echo base_url()?>"> <h3 class="box ">HODDY</h3></i>


                    
                    <ul class="main-nav box option">

                       <!-- <li>
                            <div class="col-sm-12 col-md-12">
                                <form class="navbar-form" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type Product Name" name="q">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </li>-->
                        <li>
                            <form action="<?php echo base_url()?>index.php/user_auth/search_result" method="post">
                                <input type="text" name="search" placeholder="Search..">
                            </form>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropbtn">Mens</a>
                                <div class="dropdown-content">
                                    <a href="<?php echo base_url()?>index.php/user_auth/mens">Products</a>
                                    <a href="<?php echo base_url()?>index.php/user_auth/mens_acc">Accesories</a>
                                </div>
                        </li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropbtn">Womens</a>
                                <div class="dropdown-content">
                                    <a href="<?php echo base_url()?>index.php/user_auth/womens">Products</a>
                                    <a href="<?php echo base_url()?>index.php/user_auth/womens_acc">Accesories</a>
                                </div>
                        </li>
                        <li><a href="<?php echo base_url()?>index.php/user_auth/gadgets">Gadgets</a></li>
                        <li><a href="<?php echo base_url()?>index.php/user_auth">Login</a></li>
                        <?php if (isset($this->session->userdata['logged_in'])) { ?>
                           <li> hi <?php echo ($this->session->userdata['logged_in']['username']);?></li>

                                <li><a href="<?php echo base_url()?>index.php/user_auth/logout">Logout</a></li> 
                                <li><a href="<?php echo base_url()?>index.php/shoppingcart/view_cart"><i class="ion-ios-cart"></i></a></li>
                            <?php } else { ?>
                                <li><a href="<?php echo base_url()?>index.php/user_auth/user_registration_show">Sign Up</a></li>

                              
                            <?php } ?>
                        

                    </ul>
        </div>
    </body>
</html>