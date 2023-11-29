 <?php

  include 'includes/other_header.php';

  ?>
    <!--End Main Header -->
 
  
    <!-- End About Section -->

    <!-- Why Choose Us Four -->
    <section class="why-choose-us-four pt-10">
        <div class="bg bg-pattern-2"></div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title"><?php echo $page_service['service_heading']; ?></span>
                <h2><?php echo (empty($subheading))?'Choose from our wide range of amazing
internet packages':$subheading; ?></h2>
            </div>
            <div class="row">


                <!-- Info Banner -->
                <?php  
                $i=0;
                foreach ($services as $row) {
                    $i++;

                 ?>
            
                <div class="info-banner col-lg-6 col-md-12 col-sm-12 <?php echo ($i>4)?'wow fadeInUp':'';?>" data-wow-delay="600ms"> 
                    <div class="content-box">
                        <figure class="image"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt=""></figure>
                        <h4 class="title"><?php echo $row['name']; ?></h4>
                        <div class="price">Starting From <span class="text-blue">UGX 
                            <?php echo number_format($row['price']); ?></span> / <small>Month</small></div>
                        <div class="btn-box">
                            <a href="https://api.whatsapp.com/send/?phone=<?php echo explode('/',$setting['top_bar_phone'])[0]; ?>&text=<?php echo urlencode($row['name']); ?>&type=phone_number&app_absent=0" class="theme-btn btn-style-one"><span class="btn-title">Get Started Now <i class="fa fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <?php } ?>

                
            </div>


             <?php include 'shared/call_cta.php'; ?>

        </div>
    </section>
    <!--End Services Four -->

    <!-- Why Choose Us Four-->
    <?php 

     $pricing_item = $services[0];
     $pricing_item['title'] = $pricing_item['name'];

     include 'shared/why_us.php'; 

     ?>

   <!-- Why Choose Us Four-->


<?php

  include 'includes/footer.php';

?>


