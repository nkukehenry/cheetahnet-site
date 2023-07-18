 <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="top-left">
                        <!-- Info List -->
                        <ul class="list-style-one">
                            <li><i class="fa fa-map-marker-alt"></i><?php echo $setting['footer_address']; ?></li>
                            <li><i class="far fa-envelope"></i><?php echo $setting['top_bar_email']; ?></li>
                            <li><i class="fa fa-headset"></i>Call us : <a href="tel:<?php echo $setting['top_bar_phone']; ?>"><?php echo $setting['top_bar_phone']; ?></a></li>
                        </ul>
                    </div>
                    <div class="top-right">
                        <ul class="social-icon-one">
                             <?php
                                foreach ($social as $row)
                                {
                                    if(!empty($row['social_url']))
                                    {
                                        echo '<li><a href="'.$row['social_url'].'"><i class="fab '.$row['social_icon'].'"></i></a></li>';
                                    }
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top -->
          
        <div class="header-lower">
            <div class="auto-container">
                <!-- Main box -->
                <div class="main-box" style="background-color: transparent!important;">
                    <div class="logo-box">
                        <div class="logo" style="max-width: 100px;"><a href=""><img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="" title="Cheetahnet"></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer">    
                        <nav class="nav main-menu">
                            <ul class="navigation">
                                <li class="current"><a href="<?php echo base_url(); ?>">Home</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>about">About</a></li>
                                <li><a href="<?php echo base_url(); ?>services">Services</a></li>
                                <!-- <li><a href="<?php echo base_url(); ?>news">News</a></li> -->
                                <li><a href="<?php echo base_url(); ?>contact">Contact Us</a></li>
                            </ul>
                        </nav>
                        <!-- Main Menu End-->
                        
                        <div class="outer-box">
                            <!-- Mobile Nav toggler -->
                            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars text-light"></span></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
        
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="upper-box">
                    <div class="nav-logo" style="min-width: 100px!important;"><a href=""><img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="" title=""></a></div>
                    <div class="close-btn"><i class="icon fa fa-times"></i></div>
                </div>
        
                <ul class="navigation clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </ul>
                <ul class="contact-list-one">
                    <li>
                        <!-- Contact Info Box -->
                        <div class="contact-info-box">
                            <i class="icon lnr-icon-phone-handset text-theme2"></i>
                            <span class="title">Call Now</span>
                            <a href="tel:<?php echo $setting['top_bar_phone']; ?>"><?php echo $setting['top_bar_phone']; ?></a>
                        </div>
                    </li>
                    <li>
                        <!-- Contact Info Box -->
                        <div class="contact-info-box">
                            <span class="icon lnr-icon-envelope1 text-theme2"></span>
                            <span class="title">Send Email</span>
                            <a href="mailto:<?php echo $setting['top_bar_email']; ?>"><?php echo $setting['top_bar_email']; ?></a>
                        </div>
                    </li>
                    <li>
                        <!-- Contact Info Box -->
                        <div class="contact-info-box">
                            <span class="icon lnr-icon-clock text-theme2"></span>
                            <span class="title">Office time</span>
                            Mon - Sat 8:00 - 7:30, Sunday - CLOSED
                        </div>
                    </li>
                </ul>
        
        
                <ul class="social-links">
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </nav>
        </div><!-- End Mobile Menu -->

      

        <!-- Sticky Header  -->
        <div class="sticky-header bg-theme-default">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo">
                        <a href="" title=""><img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" style="min-width: 100px!important;" alt="" title=""></a>
                    </div>
        
                    <!--Right Col-->
                    <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-collapse show collapse clearfix">
                                <ul class="navigation clearfix">
                                    <!--Keep This Empty / Menu will come through Javascript-->
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
        
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                    </div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->