 <?php

    include 'includes/other_header.php';

  ?>
    <!--End Main Header -->
 
    <!--Contact Details Start-->
    <section class="contact-details">
        <div class="container ">
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="contact-details__right">
                        <div class="sec-title">
                            <span class="sub-title">Need any help?</span>
                            <h2>Get in touch with us</h2>
                            <div class="text">Lorem ipsum is simply free text available dolor sit amet consectetur notted adipisicing elit sed do eiusmod tempor incididunt simply dolore magna.</div>
                        </div>
                        <div class="blog-details__social-list">
                            <a href="shop-product-details.html"><i class="fab fa-twitter"></i></a>
                            <a href="shop-product-details.html"><i class="fab fa-facebook"></i></a>
                            <a href="shop-product-details.html"><i class="fab fa-pinterest-p"></i></a>
                            <a href="shop-product-details.html"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 offset-xl-1 col-lg-6">
                    <!-- Contact Form -->
                    <form id="contact_form" name="contact_form" class="" action="http://kodesolution.com/html/2023/netofix-html/includes/sendmail.php" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_name" class="form-control" type="text" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="mb-3">
                            <input name="form_botcheck" class="form-control" type="hidden" value="" />
                            <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
                            <button type="reset" class="theme-btn btn-style-one bg-theme-color5"><span class="btn-title">Reset</span></button>
                        </div>
                    </form>
                    <!-- Contact Form Validation-->
                </div>
            </div>
        </div>
    </section>
    <!--Contact Details End-->

    <section class="mb--100 position-relative">
        <div class="auto-container contact-details-call card" style="padding-top: 20px;">

            <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="contact-item flex">
                    <div class="contact-icon">
                        <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
                    </div>
                    <div class="contact-text">
                        <h4><?php echo ADDRESS; ?></h4>
                        <p>
                            <?php echo nl2br($page_contact['contact_address']); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="contact-item flex">
                    <div class="contact-icon">
                        <i class="fa fa-mobile fa-3x" aria-hidden="true"></i>
                    </div>
                    <div class="contact-text">
                        <h4><?php echo PHONE_NUMBER; ?></h4>
                        <p>
                            <?php echo nl2br($page_contact['contact_phone']); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="contact-item flex">
                    <div class="contact-icon">
                        <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>
                    </div>
                    <div class="contact-text">
                        <h4><?php echo EMAIL_ADDRESS; ?></h4>
                        <p>
                            <?php echo nl2br($page_contact['contact_email']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>

    
    <!-- About Section Five -->
    <section class="about-section-five pt-10" style="margin-top: 0!important;">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2 wow fadeInRight">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">About Us</span>
                            <h2>Giving you freedom to explore the world with the fastest internet</h2>
                        </div>
                        <div class="text">
                        Cheetahnet Internet is providing one of the fastest broadband internet and network solutions throughout Kampala, reliable for all. With the help of our experienced network engineers, we ensure the most efficient Network.
                         </div>

                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Get Started Now <i class="fa fa-arrow-right"></i></span></a>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12 wow fadeInLeft">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image wow fadeIn"><img src="<?php echo base_url('public/site/images/resource/pricing-3.png'); ?>" alt=""></figure>
                            <div class="exp-box">
                                <i class="icon flaticon-world"></i>
                                <div class="text">Expereince <br>The Best Internet</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    


    <!-- Divider: Google Map -->
    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <!-- Google Map HTML Codes -->
                <?php  //echo $page_contact['contact_map']; ?>

            </div>


            <?php include 'shared/call_cta.php'; ?>
        </div>
    </section>


    <!-- End About Section Six -->

<?php

  include 'includes/footer.php';

?>

