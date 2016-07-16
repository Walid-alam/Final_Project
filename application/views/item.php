<!DOCTYPE html>   <!-- Men page -->
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="/Fahim/vendores/css/node_modules/normalize.css/">
        <link rel="stylesheet" type="text/css" href="/Fahim/vendores/css/grid.css"> 
        <link rel="stylesheet" type="text/css" href="/Fahim/Resourse/css/style.css">
        <link rel="stylesheet" type="text/css" href="/Fahim/vendores/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="/Fahim/Resourse/css/query.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        <title>Welcome TO Our Site</title>
    </head>   
    <body>
        <div>        
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
                        <li><a href="<?php echo base_url()?>index.php/view_cart"><i class="ion-ios-cart"></i></a></li>
                    </ul>
                </div>    
        </div>


       
        <!-- end of header-for-men part---------->
        <section></section>
        <section>
            <div class="row">
                <div class="content-border">
                    <div class="col span-1-of-2">
                        <div class="box-medium">
                            <img src="/Fahim/Resourse/img/tshirt.jpeg" width="500px" height="497px" data-zoom-image="Resourse/img/tshirt.jpeg">   
                        </div>                     
                    </div>
                    
                    <div class="col span-1-of-2">
                        <div>&nbsp;</div>
                        <h1 class="caption">Fashionable T shirt</h1>
                        <h1 class="caption">Cat's Eye</h1>
                        <div>&nbsp;</div>
                        <h2>$310</h2>
                        
                        <div class="product-size">
                            <h2 class="size">Size</h2>
                            <ul class="product-size default-nav box">
                                <li class="box"><a href="#">7</a></li>
                                <li class="box"><a href="#">7.5</a></li>
                                <li class="box"><a href="#">8</a></li>
                                <li class="box"><a href="#">8.5</a></li>
                                <li class="box"><a href="#">9</a></li>
                                <li class="box"><a href="#">9.5</a></li> 
                                <li class="box"><a href="#">10</a></li>
                            </ul>
                        </div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        
                        <div class="cart-position"><a class="btn btn-full" href="#">Add to cart</a></div>
                        
                          <!--problem probaility -->
                        
                        <div class="text-box box">
                            <p>
                                The Mesabi Iron Range lies in northern Minnesota, a rugged and remote area known for its iron mines. The local residents who work these mines are proudly known as Iron Rangers, individuals with a sense of adventure and a determined personality. Originally designed to be worn in the iron mines, Iron Ranger work boots had to be as tough as the people who wore them in demanding conditions. 
                            </p>

                            <div class="icone-box">
                                <div class="col span-1-of-4 box">
                                    <div class="social-share">
                                        <i class="ion-social-facebook small-icone"></i>
                                        <a href="#">Share</a>
                                    </div>    
                                </div>         
                                <div class="col span-1-of-4 box">
                                    <div class="social-share">
                                        <i class="ion-social-twitter small-icone"></i>
                                        <a href="#">tweet</a>
                                    </div>    
                                </div>
                                <div class="col span-1-of-4 box">
                                    <div class="social-share">
                                        <i class="ion-social-pinterest-outline small-icone"></i>
                                        <a href="#">Pin it</a>
                                    </div>    
                                </div>
                                <div class="col span-1-of-4 box">
                                    <div class="social-share">
                                        <i class="ion-social-facebook small-icone"></i>
                                        <a href="#">Fancy</a>
                                    </div>    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
                    
        
        
        <!--- end of header ------------->
        <script src="/Fahim/vendores/js/jquery-1.12.4.min%20.js"></script>
        <script src="/Fahim/vendores/js/isotope.pkgd.min.js"></script>
        <script src="/Fahim/vendores/js/jquery.elevateZoom-3.0.8.min.js"></script>
        <script src="/Fahim/vendores/js/jquery.elevatezoom.js"></script>
        <script src="/Fahim/Resourse/js/main.js"></script>    
    </body>
</html>
        