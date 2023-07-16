<?php

  include 'includes/home_header.php';

  $slider = $sliders[0];

?>

    
    <!-- Banner Section Two -->
    <section class="banner-section-three">
        <div class="bg bg-image" style=" background-image:url(<?php echo base_url(); ?>public/uploads/<?php echo $slider['photo']; ?>)"></div>
       
        <div class="auto-container">
            <div class="row" style="padding-bottom: 50px;">
                <!-- Content Column -->
                <div class="content-column col-lg-9 col-md-12">
                    <div class="content-box" >
                        <h4 class="sub-title wow fadeInUp" data-wow-delay="400ms"><i class="icon icon-bars"></i> <?php echo $slider['heading']; ?></h4>
                        <h3 class="title wow fadeInUp" data-wow-delay="800ms">
                         <?php echo nl2br($slider['content']); ?></h3>
                        <div class="btn-box wow fadeInUp" data-wow-delay="1200ms">
                            <a href="<?php echo $slider['button1_url']; ?>" class="theme-btn btn-style-one"><span class="btn-title"><?php echo $slider['button1_text']; ?> <i class="fa fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <!-- Image Column -->
                <div class="image-column col-lg-3 col-md-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image wow fadeInUp" data-wow-delay="1600ms"><img src="<?=base_url('public/site/images/main-slider/men.png')?>"  alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Section Three -->
    <!-- Services Section -->
    <section class="services-section pull-up">     
        <div class="auto-container">
            <div class="outer-box">
                <div class="row">
                    <!-- Service Block-->
                    <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="<?=base_url('public/site/images/resource/service-1.jpg')?>" alt=""></figure>
                                <i class="icon flaticon-smarthome"></i>
                            </div>
                            <div class="content-box">
                                <h5 class="title"><a href="#">Home Broadband <br>Internet</a></h5>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block-->
                    <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="<?=base_url('public/site/images/resource/service-2.jpg')?>" alt=""></figure>
                                <i class="icon flaticon-router"></i>
                            </div>
                            <div class="content-box">
                                <h5 class="title"><a href="#">Corporate/Office <br>Internet</a></h5>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block-->
                    <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="<?=base_url('public/site/images/resource/service-3.jpg')?>" alt=""></figure>
                                <i class="icon flaticon-monitor"></i>
                            </div>
                            <div class="content-box">
                                <h5 class="title"><a href="#">Fibre Enabled <br>Connections</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom-text text-center pt-3 pb-3">Subscribe for 3 Months & Get one 
             FREE Access For 1 Month <a href="#">From UGX 105,000 a month</a></div>
        </div>
    </section>
    <!--End Services Section -->
    
    <!-- About Section Five -->
    <section class="about-section-five">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2 wow fadeInRight">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title"><?php echo $page_home['home_welcome_title']; ?></span>
                            <h2><?php echo $page_home['home_welcome_subtitle']; ?></h2>
                        </div>
                        <div class="info-box">
                            <i class="icon flaticon-router"></i>
                            <div class="txt">Get connected to <span class="color2">cheetanet today</span>, the best way to attain your every technology need to connect to the world.</div>
                        </div>
                        <div class="text"><?php echo $page_home['home_welcome_text']; ?></div>
                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Get Started Now <i class="fa fa-arrow-right"></i></span></a>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12 wow fadeInLeft">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image wow fadeIn"><img src="<?=base_url('public/site/images/resource/about-6.png')?>" alt=""></figure>
                            <div class="exp-box">
                                <i class="icon flaticon-world"></i>
                                <div class="text">Expereince <br>The Best Internet</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cta-box wow fadeInDown">
                <div class="info-box">
                    <i class="icon fa fa-wifi"></i>
                    <div class="text">Call Us Now for Connection</div>
                    <h4 class="title"><a href="tel:1111111">+256 705 678 0895</a></h4>
                </div>
                <figure class="image"><img src="<?=base_url('public/site/images/icons/dotted-map.png')?>" alt=""></figure>
            </div>
        </div>
    </section>
    <!-- End About Section -->
    
  
  <?php if($page_home['counter_status'] == 'Show'): ?>
    <!--  Fact Section-->
    <section class="fun-fact-section alternate">
        <div class="auto-container">
            <div class="fact-counter pt-less">
                <div class="row justify-content-center">
                    <!-- Counter block-->
                    <?php for($i=1; $i<4; $i++): ?>

                    <div class="counter-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner">
                            <div class="content">
                                <i class="<?php echo $page_home['counter_'.$i.'_icon']; ?>"></i>
                                <div class="count-box">
                                    <span class="count-text" data-speed="3000" data-stop="<?php echo $page_home['counter_'.$i.'_value']; ?>">0</span>
                                    <?php echo ($i == 1)?'%':'+'; ?>
                                </div>
                                <h6 class="counter-title"><?php echo $page_home['counter_'.$i.'_title']; ?></h6>
                            </div>
                        </div>
                    </div>

                  <?php endfor; ?>

                  

                    
                </div>
            </div>
        </div>
    </section>
  <?php endif; ?>
    <!-- End Fun Fact Section-->
   

    <!-- Services Section Three -->
    <section class="services-section-three bg-theme2">
        <div class="bg bg-image right-image" style="background-image: url(<?=base_url('public/site/images/background/8.png')?>)"></div>
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 wow fadeInRight">
                    <div class="inner-column">
                        <div class="sec-title  text-white">
                            <h2><?php echo $page_home['home_feature_title']; ?></h2>
                        </div>
                            <h4 class="title  text-white">
                                <?php echo $page_home['home_feature_subtitle']; ?></h4>
                       
                        <div class="text  text-white">
                            <?php echo $page_home['home_feature_desscription']; ?><</div>
                    </div>
                </div>

                <!-- Services Column -->
                <div class="services-column col-lg-6 col-md-12 col-sm-12 wow fadeInLeft">
                    <div class="inner-column">
                        <ul class="services-list">
                        
                        <?php foreach ($features as $row): ?>
                            <li>
                                <i class="<?php  echo $row['icon']; ?>  text-theme2"></i>
                                <h5 class="title"><a href="#"><?php echo $row['name']; ?></a></h5>
                                <!-- <a href="#" class="read-more"><i class="fa fa-arrow-right"></i></a> -->
                            </li>
                        <?php endforeach; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Call To Action -->
    <section class="call-to-action alternate">
        <div class="auto-container">
            <div class="outer-box">
                <div class="bg bg-image" style="background-image: url(<?=base_url('public/site/images/background/10.png')?>)"></div>
                <div class="gradient-circle"></div>
    
                <div class="row">
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12">
                        <div class="inner-column wow fadeInLeft">
                            <div class="sec-title light">
                                <h2>Get Cheetahnet packages</h2>
                                <div class="text">Get connected to cheetanet  and enjoy your life online, you definitely deserve the best.</div>
                            </div>
                            <div class="info-box">
                                <div class="info"><i class="icon fa fa-laptop-mobile"></i>From UGX 105,000 /<sub>Month</sub></div>
                                <a href="#" class="theme-btn btn-style-one dark-bg"><span class="btn-title">Get Started Now
                                        <i class="fa fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
    
                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12">
                        <div class="inner-column wow fadeInRight">
                            <figure class="image"><img src="<?=base_url('public/site/images/resource/led.png')?>" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Call To Action -->

    <!-- Why Choose Us Four -->
    <section class="why-choose-us-four pt-0">
        <div class="bg bg-pattern-2"></div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Why choose us</span>
                <h2>Why you should use cheetanet <br> internet</h2>
            </div>
            <div class="row">
                <!-- Info Banner -->
                <div class="info-banner col-lg-6 col-md-12 col-sm-12">
                    <div class="content-box">
                        <figure class="image"><img src="<?=base_url('public/site/images/resource/image-1.png')?>" alt=""></figure>
                        <h4 class="title">Cheetahnet Home Internet</h4>
                        <div class="price">Starting From <span class="color2">UGX 105,000</span> / <small>Month</small></div>
                        <div class="btn-box">
                            <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Get Started Now <i class="fa fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                
                <!-- Service Block Two-->
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="<?=base_url('public/site/images/resource/service-4.png')?>" alt=""></figure>    
                        <div class="icon-box"><i class="icon flaticon-call"></i></div>
                        <h6 class="title"><a href="#">24/7 Call Service</a></h6>
                        <div class="text">To get started with us, please go over all of our internet plans</div>
                        <a href="#" class="read-more"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Service Block Two-->
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="<?=base_url('public/site/images/resource/service-4.png')?>" alt=""></figure>
                        <div class="icon-box"><i class="icon flaticon-fire"></i></div>
                        <h6 class="title"><a href="#">Uptime Guaranteed</a></h6>
                        <div class="text">To get started with us, please go over all of our internet plans</div>
                        <a href="#" class="read-more"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Service Block Two-->
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="<?=base_url('public/site/images/resource/service-4.png')?>" alt=""></figure>
                        <div class="icon-box"><i class="icon flaticon-headphone"></i></div>
                        <h6 class="title"><a href="#">Advance Monitoring</a></h6>
                        <div class="text">To get started with us, please go over all of our internet plans</div>
                        <a href="#" class="read-more"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Service Block Two-->
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="<?=base_url('public/site/images/resource/service-4.png')?>" alt=""></figure>
                        <div class="icon-box"><i class="icon flaticon-router"></i></div>
                        <h6 class="title"><a href="#">Fastest Speeds</a></h6>
                        <div class="text">To get started with us, please go over all of our internet plans</div>
                        <a href="#" class="read-more"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Service Block Two-->
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="<?=base_url('public/site/images/resource/service-4.png')?>" alt=""></figure>
                        <div class="icon-box"><i class="icon flaticon-laptop"></i></div>
                        <h6 class="title"><a href="#">IPv6 Supported</a></h6>
                        <div class="text">To get started with us, please go over all of our internet plans</div>
                        <a href="#" class="read-more"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <!-- Service Block Two-->
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="<?=base_url('public/site/images/resource/service-4.png')?>" alt=""></figure>
                        <div class="icon-box"><i class="icon flaticon-planet"></i></div>
                        <h6 class="title"><a href="#">Fiber Connection</a></h6>
                        <div class="text">To get started with us, please go over all of our internet plans</div>
                        <a href="#" class="read-more"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Why Choose Us Four -->

    <!-- About-us-section Six -->
    <section class="about-section-six">
        <div class="bg bg-image" style="background-image: url(<?=base_url('public/site/images/background/9.jpg')?>)"></div>
        <div class="bg bg-overlay"></div>

        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-5 col-md-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="sec-title light">
                            <h2>Stream More, with unlimited</h2>
                            <div class="text">To get started with us, please go over all of our internet plans and other plans to let our operators know which one works for you the best!.</div>
                        </div>
                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Get Connected<i class="fa fa-arrow-right"></i></span></a>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-7">
                    <div class="about-info-box wow fadeInDown">
                        <div class="title-box">
                            <span class="icon fa fa-wifi"></span>
                            <h3 class="title">Unlimited high speed internet access.</h3>
                        </div>
                        <div class="features-box">
                            <ul class="list-style-two">
                                <li><i class="fa fa-check-circle"></i> Providing one of the fastest internet</li>
                                <li><i class="fa fa-check-circle"></i> Reliable for both gamers andD users.</li>
                                <li><i class="fa fa-check-circle"></i> Get a dedicated server hosted .</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section Six -->

<?php if($page_home['home_ptable_status'] == 'Show'): ?>
    <!-- pricing secton -->
    <section class="procing-section alternate">
        <div class="bg bg-pattern-2"></div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Our PACKAGES</span>
                <h2>Best value added <br> packages</h2>
            </div>
            <div class="row">
                <!-- Pricing Block -->
                <?php
                    $rowcount = 0; 
                    foreach($pricing_table as $row):
                    $rowcount++;
                 ?>

                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="<?=base_url('public/site/images/resource/pricing-'.$rowcount.'.jpg')?>" alt=""></a></figure>
                            <div class="speed"><?php echo $row['subtitle']; ?></div>
                        </div>
                        <div class="content-box">
                            <div class="title-box">
                                <h4 class="title"><?php echo $row['title']; ?></h4>
                                <span class="sub-title">Fast Internet</span>
                            </div>

                            <?php echo $row['text']; ?>

                            <h3 class="price">UGX <?php echo number_format($row['price']); ?><small>/ Month</small></h3>
                            <div class="btn-box">
                                <a href="<?php echo $row['button_url']; ?>" class="theme-btn btn-style-one"><span class="btn-title"><?php echo $row['button_text']; ?> <i class="fa fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>


            </div>
        </div>
    </section>
    <!--End pricing secton -->

<?php endif; ?>

    <!-- Testimonial Section Three -->
    <section class="testimonial-section-three">
        <div class="auto-container">
            <div class="outer-box">
                <div class="bg-dotted-map"></div>
                <div class="image-box">
                    <figure class="image"><img src="<?=base_url('public/site/images/resource/image-4.png')?>" alt=""></figure>
                    <span class="quote-icon fa fa-quote-right"></span>
                </div>
                
                <div class="row">
                    <!-- Title Column -->
                    <div class="title-column col-xl-7 col-lg-6 col-md-6">
                        <div class="inner-column">
                            <div class="title-box">
                                <div class="count-box"><span class="count-text" data-speed="500" data-stop="500">0</span>+</div>
                                <h3 class="title">Customers from  love us</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Column -->
                    <div class="testimonial-column col-xl-5 col-lg-6 col-md-6">
                        <div class="inner-column">
                            <div class="testimonial-carousel-three owl-carousel default-dots">
                                <!-- Testimonial Block Three -->
                                <div class="testimonial-block-three">
                                    <div class="inner-box">
                                        <div class="rating-box">
                                            <span class="reason">Great Service</span>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="text">To get started with us, please go over all of our internet plans and other plans to let our operators know.</div>
                                        <div class="info-box">
                                            <h6 class="name">Mark Wood</h6>
                                            <span class="designation">CEO, Buzicon</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial Block Three -->
                                <div class="testimonial-block-three">
                                    <div class="inner-box">
                                        <div class="rating-box">
                                            <span class="reason">Great Service</span>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="text">To get started with us, please go over all of our internet plans and other plans to let our
                                            operators know.</div>
                                        <div class="info-box">
                                            <h6 class="name">Mark Wood</h6>
                                            <span class="designation">CEO, Buzicon</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="sub-title">Latest Blog</span>
                <h2>insight From the <br> latest news & blog</h2>
                <div class="btn-box">
                    <a href="#" class="theme-btn btn-style-one"><span class="btn-title">All Latest Blog <i class="fa fa-arrow-right"></i></span></a>
                </div>
            </div>
    
    
            <div class="row">
                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="<?=base_url('public/site/images/resource/news-1.png')?>" alt=""></a></figure>
                        </div>
                        <div class="content-box">
                            <div class="date-box">
                                <span class="date">25</span>
                                <small>March, 2023</small>
                            </div>
                            <ul class="post-info">
                                <li><i class="fa fa-user-circle"></i>Admin</li>
                                <li><i class="fa fa-comments"></i> 0 Comments</li>
                            </ul>
                            <h5 class="title"><a href="#">Providing live TV services with fast internet</a></h5>
                            <a href="#" class="read-more">Read Full Article <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="<?=base_url('public/site/images/resource/news-2.png')?>" alt=""></a></figure>
                        </div>
                        <div class="content-box">
                            <div class="date-box">
                                <span class="date">25</span>
                                <small>March, 2023</small>
                            </div>
                            <ul class="post-info">
                                <li><i class="fa fa-user-circle"></i>Admin</li>
                                <li><i class="fa fa-comments"></i> 0 Comments</li>
                            </ul>
                            <h5 class="title"><a href="#">For more potential and more opportunity</a></h5>
                            <a href="#" class="read-more">Read Full Article <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="<?=base_url('public/site/images/resource/news-3.png')?>" alt=""></a></figure>
                        </div>
                        <div class="content-box">
                            <div class="date-box">
                                <span class="date">25</span>
                                <small>March, 2023</small>
                            </div>
                            <ul class="post-info">
                                <li><i class="fa fa-user-circle"></i>Admin</li>
                                <li><i class="fa fa-comments"></i> 0 Comments</li>
                            </ul>
                            <h5 class="title"><a href="#">More than 1K corporate clients have trust in us</a></h5>
                            <a href="#" class="read-more">Read Full Article <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End News Section -->

    <!-- Main Footer -->
<?php

  include 'includes/footer.php';

?>
