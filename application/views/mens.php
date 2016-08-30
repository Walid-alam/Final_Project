<!DOCTYPE html>   <!-- Men page -->
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/ulbs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/Fahim/assets/js/bootstrap.min.js"></script>
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
        <title>Mens Section</title>
    </head>   
    <body>  
        <header>
             <div id="slider">
                <img src="/Fahim/Resourse/img/front_man.jpg" >
                <img src="/Fahim/Resourse/img/man2.jpeg" >
                <img src="/Fahim/Resourse/img/man3.jpg" >
                
             </div>    
                <div class="logo color">
                    <i><a href="<?php echo base_url()?>" style='margin-left: 5%' class="box nav-position"><i>HODDY.COM</i></a></i>

                <ul class="default-nav man-option">
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
                            
                                <li><a href="<?php echo base_url()?>index.php/user_auth/logout">Log Out</a></li> 
                                <li><a href="<?php echo base_url()?>index.php/shoppingcart/view_cart"><i class="ion-ios-cart"></i></a></li>
                            <?php } else { ?>
                                <li><a href="<?php echo base_url()?>index.php/user_auth/user_registration_show">Sign Up</a></li>
                              
                            <?php } ?>
                        <!--<li><a href="<?php echo base_url()?>index.php/shoppingcart/view_cart"><i class="ion-ios-cart"></i></a></li>-->
                    </ul>
                </div>       
        </header>


        <!-- end of header-for-men part---------->
       

<section>
            <div class="row">
                <div class="content-border">
                 <?php foreach ($cat as $c_key){ ?>
                    <div class="col span-1-of-2">
                        <div class="box-medium">
                            <a href='/Fahim/index.php/users/product_info?product_id=<?php echo $c_key->p_id ?>'> <img src= "<?php echo $c_key->p_image;?>" width=330 height=227></a>   
                        </div>
                        <div class='my_div'>
                            <i><?php echo $c_key->p_name ?></i>
                            <br/>
                            <b><?php echo $c_key->p_price ?></b>
                        </div>                     
                    </div>
                    <?php }?>
                    
                </div>

            </div>
            
</section>

    </body>
</html>
        