<!DOCTYPE html>
<html lang="en">
    <head>
        <script type="text/javascript" src="/Fahim/vendores/js/jquery-1.12.4.min%20.js"></script>
        <script type="text/javascript" src="/Fahim/Resourse/js/main.js"></script>
        <link rel="stylesheet" type="text/css" href="/Fahim/vendores/css/node_modules/normalize.css/">
        <link rel="stylesheet" type="text/css" href="/Fahim/vendores/css/grid.css"> 
        <link rel="stylesheet" type="text/css" href="/Fahim/Resourse/css/style.css">
        <link rel="stylesheet" type="text/css" href="/Fahim/vendores/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="/Fahim/Resourse/css/query.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/Fahim/Resourse/css/bootstrap.min.css">
        <title>Welcome To Our Site</title>
        
    </head>   
    <body>
        <header> 
            <div id="slider">
                <img src="/Fahim/Resourse/img/Awesome%20Mountain.jpeg" > 
                <!--<img src="Resourse/img/beach-sunset-landscape-1.jpg" >-->
             </div>
            
                <div class="logo">
                    <h3 class="box ">HODDY</h3>
                    
                    <ul class="main-nav box option ">
                        <li>
                            <form action="/Fahim/index.php/user_auth/search_result" method="post">
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

                        <!--<li><a href="<?php echo base_url()?>index.php/user_auth/womens">Womens</a></li>-->
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
            
            <div class="row">
                <div class="content-border">
                    <div id="header_text">
                        <div class="shopping-text">
                            <h3 class="fast-text">American's finest</h3><br>
                            <h1 id="main">Rugged Outerware</h1><br>
                            <div class="fast-text"><a class="btn btn-full" href="Mens.html">Shop mens </a></div>
                        </div>

                        <div class="shopping-text">
                            <h3 class="fast-text">New for 2015</h3><br>
                            <h1 id="main">Spring Collection</h1><br>
                            <div class="fast-text"><a class="btn btn-full" href="#">Shop womens </a></div>
                        </div>
                    </div>
                </div>    
            </div>
        </header>
        
        
        
        
        
        <section class="section-text">
            <div class="row">
                <div class="text-para">
                    <p>Brooklyn is a modern responsive theme for your Shopify store.<br>Product photography provided by the fine folks at</p>   
                </div>
            </div>
        </section>
        
        <section  class="featured-collaction">
            <div class="row">
                <h2> Featured Category</h2>
            </div>
            <div class="row">
                <div class="content-border">
                    <ul>
                        <li>
                            <figure class="fast-row check">
                                <p class="text-width">Womens</p>
                                <img src="/Fahim/Resourse/img/women.jpeg" height="270" width="300">
                            </figure>
                        </li>
                        
                        <li>
                            <figure class="fast-row check">
                                <p class="text-width">Mens</p>
                                <img src="/Fahim/Resourse/img/men.jpg" height="290" width="350"> 
                            </figure>
                        </li>
                        
                       <li>
                            <figure class="box-2 check">
                                <p class="text-width">Gadgets</p>
                                <img src="/Fahim/Resourse/img/gadgets.jpeg" height="270" width="300"> 
                            </figure>
                        </li>  
                        
                        <li>
                            <figure class="box-2 check">
                                <p class="text-width">Accesories-Man</p>
                                <img src="/Fahim/Resourse/img/accesories-man.jpg" height="270" width="300"> 
                            </figure>
                        </li>  
                        
                        <li>
                            <figure class="box-2 check">
                                <p class="text-width">Accesories-Woman</p>
                                <img src="/Fahim/Resourse/img/accesories-woman.jpeg" height="270" width="300">    
                            </figure>
                        </li>              
                    </ul>
                </div>
            </div>
        </section>
        
              
        <section class="featured-product">
            <div class="row">
                <b><h2>Featured Product</h2></b>    
            </div>
            <div class="row">
                <div class="content-border">
                    <div class="box-container">
                        <div class="box-big check-2">
                            <img src="/Fahim/Resourse/img/tshirt.jpeg" height="500" width="500"> 
                        </div>
                        <div class="product-name">
                            <p style="font-size: 25px;">T-Shirts</p>
                        </div>
                    </div>
                    <div class="box-container">
                    <ul>
                        <li>
                            <figure class="box-small check-2">
                                <img src="/Fahim/Resourse/img/punjabi.jpg" height="250" width="400">
                            </figure>
                            <div class="product-name">
                                <p style="font-size: 25px;">Panjabi</p>
                            </div>
                        </li>
                    </ul>
                        <br>
                    <ul>
                        <li>
                            <figure class="box-small check-2">
                                <img src="/Fahim/Resourse/img/mobile.jpg" height="230" width="320">
                            </figure>
                            <div class="product-name">
                                <p style="font-size: 25px;">Mobile</p>
                            </div>
                        </li>
                    </ul>           
                </div>            
            </div>
                <div class="content-border">
                    <div class="box-container_2 check-2">
                        <div class="box-big">
                            <img src="/Fahim/Resourse/img/turf.jpg" height="400" width="600">
                        </div>
                        <div>
                            <p align="center" style="font-size: 25px;">Turf</p>
                        </div>
                    </div>
                    <div class="box-container_2">
                        <ul>
                            <li>
                                <figure class="box-small check-2" >
                                    <img src="/Fahim/Resourse/img/laptop.gif" height="227" width="330" >
                                </figure>
                                <div class="product-name">
                                    <p style="font-size: 25px;">Laptop</p>
                                </div>
                            </li>
                        </ul>
                        <br>
                    <ul>
                        <li>
                            <figure class="box-small check-2">
                                <img src="/Fahim/Resourse/img/shoe.jpg" height="227" width="330">
                            </figure>
                            <div class="product-name">
                                <p style="font-size: 25px;">Shoe</p>
                            </div>
                        </li>
                    </ul>           
                </div>            
            </div>
        </section>
            

            <section class="subscribe">
                <div class="row">
                    <div cla class="total-group-sub">
                        <div id="subs-email">
                            <input type="email" name="email" id="subs-email">           
                        </div>
                        <a class="btn btn-success" href="#">Subscribe</a>
                    </div>        
            </section>
            
            
            <div>&nbsp;</div> 
            <div>&nbsp;</div> 
            <h2></h2>
            <div>&nbsp;</div>    
            <div>&nbsp;</div>    
         
            
           <footer class="last-part">
                <div class="row">
                    <div class="content-border">
                        <div class=" col span-1-of-4">
                            <ul class="policy">
                                <li class="policy-item">Shipping rates</li>
                                <li class="policy-item">Return Policy</li>
                                <li class="policy-item">Our store</li>
                            </ul> 
                        </div>
                        <div class=" col span-1-of-4">
                            <ul class="policy">
                                <li class="policy-item">Blog</li>
                                <li class="policy-item">Contant us</li>
                                <li class="policy-item">About us</li>
                            </ul> 
                        </div>
                        <div class=" col span-1-of-4">
                            <ul class="policy">
                                
                                <div class="policy-item">
                                    <i class="ion-social-facebook small-icone"></i>
                                    <a href="#" class="fb">facebook</a>           
                                </div>
                                <div class="policy-item">
                                    <i class="ion-social-twitter small-icon"></i>
                                    <a href="#">twitter</a>
                                </div> 
                                <div class="policy-item">
                                    <i class="ion-social-instagram small-icon"></i>
                                    <a href="#">instagram</a>     
                                </div>      

                            </ul> 
                        </div>
                        <div class=" col span-1-of-4">
                            <ul class="policy">
                                <li class="policy-item">Shipping rates</li>
                                <li class="policy-item">Return Policy</li>
                                <li class="policy-item">Our store</li>
                            </ul> 
                        </div>      
                    </div>
                </div>    
            </footer>
            
    </body>
</html>
