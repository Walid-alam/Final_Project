
<section>
            <div class="row">
                <div class="content-border">
                    <div class="col span-1-of-2">
                        <div class="box-medium">
                            <img src= "<?php echo $n->p_image;?>" width=500 height=500>   
                        </div>                     
                    </div>
                    
                    <div class="col span-1-of-2">
                        <div>&nbsp;</div>
                        <h1 class="caption"><?php echo $n->p_name; ?></h1>
                        <h1 class="caption"><?php echo $n->category_name; ?></h1>
                        <div>&nbsp;</div>
                        <h2 class="caption1"><i><?php echo $n->p_price;?></i><span>tk</span></h2>
                        
                        
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        
                        <div class="cart-position"><a href="buy_user/<?php echo $n->p_id ?>"><img src="/Fahim/assets/images/cart1.png" alt="nothing to show" height="100px" width="200px"></a></div>
                        
                          <!--problem probaility -->
                        
                        <div class="text-box box">
                            <p>
                                <?php echo $n->p_description; ?> 
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