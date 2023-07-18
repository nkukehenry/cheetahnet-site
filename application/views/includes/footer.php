
    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="bg bg-pattern-3"></div>
        
        <!-- Footer Uppper -->
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row">
                    <!-- logo box -->
                    <div class="logo-box col-lg-4 col-md-12">
                        <div class="inner">
                            <div class="logo"><a href="#"> <img src="images/logo.png" alt=""></a></div>
                        </div>
                    </div>
                    <!-- Contact info Block -->
                    <div class="contact-info-block col-lg-4 col-md-6">
                        <div class="inner">
                            <i class="icon lnr lnr-icon-phone-handset"></i>
                            <span class="sub-title">Call Us On</span>
                            <div class="text"><a href="tel:<?php echo explode('/',$setting['top_bar_phone'])[0]; ?>"><?php echo explode('/',$setting['top_bar_phone'])[0]; ?></a></div>
                        </div>
                    </div>
                    <!-- Contact info Block -->
                    <div class="contact-info-block col-lg-4 col-md-6">
                        <div class="inner">
                            <i class="icon lnr lnr-icon-envelope1"></i>
                            <span class="sub-title">Mail to Us</span>
                            <div class="text"><a href="mailto:<?php echo explode('/',$setting['top_bar_email'])[0]; ?>"><?php echo explode('/',$setting['top_bar_email'])[0]; ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Widgets Section -->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row">
                    <!-- Footer COlumn -->
                    <div class="footer-column col-lg-4 col-md-6">
                        <div class="footer-widget about-widget">
                            <h6 class="widget-title">About Us</h6>
                            <div class="widget-content">
                                <div class="text">To get started with us, please go over <br> all of our internet plans and other <br>plans to let our operators.</div>
                                <ul class="social-icon-two mt-4">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Footer COlumn -->
                    <div class="footer-column col-xl-4 col-lg-4 col-md-6 mb-0">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="widget links-widget">
                                    <h6 class="widget-title">Useful Links</h6>
                                    <div class="widget-content">
                                        <ul class="user-links">
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Our Services</a></li>
                                            <li><a href="#">Our Clients</a></li>
                                            <li><a href="#">News & Media</a></li>
                                        </ul>                                
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="widget links-widget">
                                    <h6 class="widget-title">Services</h6>
                                    <div class="widget-content">
                                        <ul class="user-links">
                                            <li><a href="#">Home Internet</a></li>
                                            <li><a href="#">Corporate Net</a></li>
                                            <li><a href="#">SIM Internet</a></li>
                                        </ul>                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer COlumn -->
                    <div class="footer-column col-lg-4 col-md-8">
                        <div class="widget newsletter-widget">
                            <h6 class="widget-title">Newsletter</h6>
                            <div class="widget-content">
                                <div class="text">Sign up for alerts, our latest blogs, thoughts, and insights.</div>
                                <div class="subscribe-form">
                                    <form method="post" action="#">
                                        <div class="form-group">
                                            <input type="email" name="email" class="email" value="" placeholder="Your Email" required="">
                                            <button type="button" class="theme-btn btn-style-one"><i class="far fa-paper-plane"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright-text">© Copyrights 2023 <a href="#"> Cheetahnet Uganda</a> All rights reserved.</div>
            </div>
        </div>
    </footer>
    <!--End Main Footer -->

</div><!-- End Page Wrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script src="<?=base_url('public/site/js/jquery.js')?>"></script> 
<script src="<?=base_url('public/site/js/popper.min.js')?>"></script>
<script src="<?=base_url('public/site/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('public/site/js/jquery.fancybox.js')?>"></script>
<script src="<?=base_url('public/site/js/wow.js')?>"></script>
<script src="<?=base_url('public/site/js/appear.js')?>"></script>
<script src="<?=base_url('public/site/js/owl.js')?>"></script>
<script src="<?=base_url('public/site/js/script.js')?>"></script>
</body>
</html>