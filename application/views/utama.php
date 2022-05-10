<?php $url=base_url().'assets/frontend/'?>
<!doctype html>

<html lang="en">
   
   
    <head>
       
       
        <!-- META -->
        <meta charset="utf-8">
        <meta name="robots" content="noodp">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
       
        <!-- PAGE TITLE -->
        <title>yohana - Identity</title>
       
        <!-- FAVICON -->
        <link rel="shortcut icon" href="<?=$url?>img/favicon.png">
       
        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface%7CArapey&amp;subset=latin-ext" rel="stylesheet">
       
        <!-- STYLESHEETS -->
        <link rel="stylesheet" type="text/css" href="<?=$url?>css/plugins.css">
        <link rel="stylesheet" type="text/css" href="<?=$url?>css/main.css">
        
        
    </head>

   
    <body>
    
       
        <!-- PRELOADER -->
        <div class="preloader">
           
            <div class="spinner"></div>
            
        </div>
        <!-- /PRELOADER -->
    
        
        <!-- IMAGE CONTAINER -->
        <div class="image-container">
           
            <div class="background-img"></div>

        </div>
        <!-- /IMAGE CONTAINER -->


        <!-- CONTENT AREA -->
        <div class="content-area">


            <!-- CONTENT AREA INNER --> 
            <div class="content-area-inner">


                <!-- INTRO -->
                <section id="intro">


                    <!-- CONTAINER MID -->
                    <div class="container-mid">

                       
                        <!-- ANIMATION CONTAINER -->
                        <div class="animation-container animation-fade-down" data-animation-delay="0">
                        
                            <h1><?=$data->nama?></h1>
                        
                        </div>
                        <!-- /ANIMATION CONTAINER -->
                        
                        
                        <!-- ANIMATION CONTAINER -->
                        <div class="animation-container animation-fade-left" data-animation-delay="300">
                           
                            <p class="subline"><?=$data->deskripsi?></p>
                            
                        </div>
                        <!-- /ANIMATION CONTAINER -->
                        
                        
                        <!-- ANIMATION CONTAINER -->
                        <div class="animation-container animation-fade-up" data-animation-delay="600">
                           
                            <a href="#about" class="smooth-scroll">More Information<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            
                        </div>
                        <!-- /ANIMATION CONTAINER -->


                    </div>
                    <!-- /CONTAINER MID -->


                </section>
                <!-- /INTRO -->


                <!-- ABOUT -->
                <section id="about">


                    <h3 class="headline scroll-animated-from-right">ORGANISASI</h3>

                    <p class="scroll-animated-from-right">
                    <?php foreach ($dataorganisasi as $key) : ?>
                        <ul>
                            <li><b><?= $key->nama_organisasi;?></b> - <?= $key->periode;?></li>
                            <?= $key->jabatan;?><br> <?= $key->deskripsi;?>
                        </ul>
                    <?php endforeach; ?>
<!-- 
                            </p>  -->
                </section>
                <!-- /ABOUT -->
                
                
                <!-- SERVICE -->
                <section id="service">


                    <h3 class="headline scroll-animated-from-right">KEAHLIAN</h3>
        
                    <!-- SERVICE LIST -->
                    <ul class="services-list">
                        <?php foreach ($datakeahlian as $key) : ?>
                        <li class="scroll-animated-from-right"><i class="fa fa-television" aria-hidden="true"></i><?=$key->nama_skill;?></li>
                          <?php endforeach; ?>
                        
                        
                    </ul>
                    <!-- /SERVICE LIST -->


                </section>
                <!-- /SERVICE -->
                
                
                <!-- WORK -->
                <section id="work">


                    <h3 class="headline scroll-animated-from-right">My latest Work.</h3>
                    
                    
                    <!-- SHOWCASE -->
                    <div class="showcase">
                       
                       
                        <!-- ITEM -->
                        <div class="item scroll-animated-from-right">
                          
                          
                            <!-- LIGHTBOX LINK -->
                            <a href="#" data-featherlight="#item-1-lightbox">
                            
                            
                                <!-- INFO -->
                                <div class="info">


                                    <!-- CONTAINER MID -->
                                    <div class="container-mid">

                                        <h5>Fashion Inc.</h5>
                                        <p>Web Design</p>

                                    </div>
                                    <!-- /CONTAINER MID -->


                                </div>
                                <!-- /INFO -->


                                <div class="background-image" style="background-image: url(<?=$url?>img/work/item-1.jpg)"></div>

                           
                            </a>
                            <!-- /LIGHTBOX LINK -->
                            
                            
                            <!-- LIGHTBOX -->
                            <div id="item-1-lightbox" class="work-lightbox">
                               
                               
                                <img class="img-responsive" src="<?=$url?>img/work/item-1.jpg" alt="image">
                                
                                <h3>Fashion Inc.</h3>
                                <p class="subline">Web Design</p>
                                
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper faucibus eros, quis imperdiet sapien. Nam sodales nec risus nec interdum. Proin lobortis, ex condimentum ultricies eleifend, nisl nunc sollicitudin odio, eget egestas est turpis et metus. In non ligula quis mauris rutrum porta.</p>
                                
                                
                            </div>
                            <!-- /LIGHTBOX -->
                            
                            
                        </div>
                        <!-- /ITEM -->
                        
                        
                        <!-- ITEM -->
                        <div class="item scroll-animated-from-right">
                          
                          
                            <!-- LIGHTBOX LINK -->
                            <a href="#" data-featherlight="#item-2-lightbox">
                            
                            
                                <!-- INFO -->
                                <div class="info">


                                    <!-- CONTAINER MID -->
                                    <div class="container-mid">

                                        <h5>Asimov 71</h5>
                                        <p>Product Design</p>

                                    </div>
                                    <!-- /CONTAINER MID -->


                                </div>
                                <!-- /INFO -->


                                <div class="background-image" style="background-image: url(<?=$url?>img/work/item-2.jpg)"></div>

                           
                            </a>
                            <!-- /LIGHTBOX LINK -->
                            
                            
                            <!-- LIGHTBOX -->
                            <div id="item-2-lightbox" class="work-lightbox">
                               
                               
                                <img class="img-responsive" src="<?=$url?>img/work/item-2.jpg" alt="image">
                                
                                <h3>Asimov 71</h3>
                                <p class="subline">Product Design</p>
                                
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper faucibus eros, quis imperdiet sapien. Nam sodales nec risus nec interdum. Proin lobortis, ex condimentum ultricies eleifend, nisl nunc sollicitudin odio, eget egestas est turpis et metus. In non ligula quis mauris rutrum porta.</p>
                                
                                
                            </div>
                            <!-- /LIGHTBOX -->
                            
                            
                        </div>
                        <!-- /ITEM -->
                        
                        
                        <!-- ITEM -->
                        <div class="item scroll-animated-from-right">
                          
                          
                            <!-- LIGHTBOX LINK -->
                            <a href="#" data-featherlight="#item-3-lightbox">
                            
                            
                                <!-- INFO -->
                                <div class="info">


                                    <!-- CONTAINER MID -->
                                    <div class="container-mid">

                                        <h5>Hardley &amp; Sons</h5>
                                        <p>Design Direction</p>

                                    </div>
                                    <!-- /CONTAINER MID -->


                                </div>
                                <!-- /INFO -->


                                <div class="background-image" style="background-image: url(<?=$url?>img/work/item-3.jpg)"></div>

                           
                            </a>
                            <!-- /LIGHTBOX LINK -->
                            
                            
                            <!-- LIGHTBOX -->
                            <div id="item-3-lightbox" class="work-lightbox">
                               
                               
                                <img class="img-responsive" src="<?=$url?>img/work/item-3.jpg" alt="image">
                                
                                <h3>Hardley &amp; Sons</h3>
                                <p class="subline">Design Direction</p>
                                
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper faucibus eros, quis imperdiet sapien. Nam sodales nec risus nec interdum. Proin lobortis, ex condimentum ultricies eleifend, nisl nunc sollicitudin odio, eget egestas est turpis et metus. In non ligula quis mauris rutrum porta.</p>
                                
                                
                            </div>
                            <!-- /LIGHTBOX -->
                            
                            
                        </div>
                        <!-- /ITEM -->
                        
                        
                        <!-- ITEM -->
                        <div class="item scroll-animated-from-right">
                          
                          
                            <!-- LIGHTBOX LINK -->
                            <a href="#" data-featherlight="#item-4-lightbox">
                            
                            
                                <!-- INFO -->
                                <div class="info">


                                    <!-- CONTAINER MID -->
                                    <div class="container-mid">

                                        <h5>Starnation</h5>
                                        <p>UI/UX DESIGN</p>

                                    </div>
                                    <!-- /CONTAINER MID -->


                                </div>
                                <!-- /INFO -->


                                <div class="background-image" style="background-image: url(<?=$url?>img/work/item-4.jpg)"></div>

                           
                            </a>
                            <!-- /LIGHTBOX LINK -->
                            
                            
                            <!-- LIGHTBOX -->
                            <div id="item-4-lightbox" class="work-lightbox">
                               
                               
                                <img class="img-responsive" src="<?=$url?>img/work/item-4.jpg" alt="image">
                                
                                <h3>Starnation</h3>
                                <p class="subline">UI/UX DESIGN</p>
                                
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper faucibus eros, quis imperdiet sapien. Nam sodales nec risus nec interdum. Proin lobortis, ex condimentum ultricies eleifend, nisl nunc sollicitudin odio, eget egestas est turpis et metus. In non ligula quis mauris rutrum porta.</p>
                                
                                
                            </div>
                            <!-- /LIGHTBOX -->
                            
                            
                        </div>
                        <!-- /ITEM -->
                        
                        
                    </div>
                    <!-- /SHOWCASE -->


                </section>
                <!-- /WORK -->
                
                
                <!-- CONTACT -->
                <section id="contact">


                    <h3 class="headline scroll-animated-from-right">Contact Me.</h3>
                    
                    
                    <!-- CONTACT LIST -->
                    <ul class="contact-list">
                       
                        <li class="scroll-animated-from-right"><i class="fa fa-mobile" aria-hidden="true"></i>0853 6319 6399</li>
                        <li class="scroll-animated-from-right"><i class="fa fa-envelope-o" aria-hidden="true"></i>yohanamarpaung02@gmail.com</li>
                        
                    </ul>
                    <!-- /CONTACT LIST -->
                    
                    
                    <!-- CONTACT FORM --> 
                    <form id="contact-form" action="assets/php/contact.php" method="post">

                       
                        <input id="contact-form-name" type="text" name="name" class="form-control scroll-animated-from-right" placeholder="* Yohana Resty Agatha">
                        
                        <input id="contact-form-email" type="text" name="email" class="form-control scroll-animated-from-right" placeholder="* Instagram : yhnrsty">
                        
                        <!-- PHANTOM ELEMENT ( HONEYPOT CAPTCHA FOR SECURITY ) -->
                        <div class="fhp-input"><input id="contact-form-company" type="text" name="company" class="form-control"></div>
                        <!-- /PHANTOM ELEMENT ( HONEYPOT CAPTCHA FOR SECURITY ) -->
                        
                        <textarea id="contact-form-message" name="message" class="form-control scroll-animated-from-right" placeholder="* "></textarea>
                        
                        <button type="submit" class="form-control scroll-animated-from-right">Send Mail</button>
                        
                        <div class="success-message">* The Email was Sent Successfully!</div>

                   
                    </form>
                    <!-- /CONTACT FORM --> 


                </section>
                <!-- /CONTACT -->
                
                
                <!-- FOOTER -->
                <section id="footer">
                
                   
                    <!-- SOCIAL ICONS -->
                    <ul class="social-icons scroll-animated-from-right">
                       
                       
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        
                        
                    </ul>
                    <!-- /SOCIAL ICONS -->
                    

                    <p class="scroll-animated-from-right">© 2017 Your Brand | Design by <a href="https://templatefoundation.com">Template Foundation</a></p>


                </section>
                <!-- /FOOTER -->


            </div>
            <!-- /CONTENT AREA INNER -->


        </div>
        <!-- /CONTENT AREA -->
        
        
        <!-- JAVASCRIPTS -->
        <script type="text/javascript" src="<?=$url?>js/plugins.js"></script>
        <script type="text/javascript" src="<?=$url?>js/main.js"></script>
   
   
    </body> 
    
    
</html>