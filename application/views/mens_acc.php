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
                        <li><a href="<?php echo base_url()?>index.php/user_auth/mens">Mans</a></li>
                        <li><a href="<?php echo base_url()?>index.php/user_auth/womens">Womens</a></li>
                        <li><a href="<?php echo base_url()?>index.php/user_auth/gadgets">Gadgets</a></li>
                        <li><a href="<?php echo base_url()?>index.php/user_auth">Login</a></li>
                        <?php if (isset($this->session->userdata['logged_in'])) { ?>
                            <li> hi <?php echo ($this->session->userdata['logged_in']['username']);?></li>
                            
                                <li><a href="<?php echo base_url()?>index.php/user_auth/logout">Log Out</a></li> 
                            <?php } else { ?>
                                <li><a href="<?php echo base_url()?>index.php/user_auth/user_registration_show">Sign Up</a></li>
                              
                            <?php } ?>
                        <li><a href="<?php echo base_url()?>index.php/shoppingcart/view_cart"><i class="ion-ios-cart"></i></a></li>
                    </ul>
                </div>       
        </header>


        <!-- end of header-for-men part---------->
        
        
        <section class="all-men-product">
            <div class="row">
                <h2>Mens</h2>        
            </div>
<?php foreach ($cat as $c){?>
    </section>
        
        <!--end of LINK ------>

        <div class="row">
            <div class="content-border">
                <div class="protfolio-item">          <!--portfolio-item need just once for multiple div-->
                    <div class="box-container single-item accessories">
                        <a href="/Fahim/index.php/users/product_info?product_id=<?php echo $c->p_id ?>"><div class="box-big"><img src="<?php echo $c->p_image?>" height="507" width="585"></div></a>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
    </body>
</html>