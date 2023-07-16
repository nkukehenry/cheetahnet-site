<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$error_message = '';
$success_message = '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">



 <?php

    $CI =& get_instance();
    $CI->load->model('Model_common');

    $language = $CI->Model_common->get_language_data();



    foreach ($language as $lang) {
        define($lang['name'], $lang['value']);
    }

    $class_name = '';
    $segment_2 = 0;
    $segment_3 = 0;
    $class_name = $this->router->fetch_class();
    $segment_2 = $this->uri->segment('2');
    $segment_3 = $this->uri->segment('3');

    if($class_name == 'home')
    {
        echo '<meta name="description" content="'.$page_home['meta_description'].'">';
        echo '<meta name="keywords" content="'.$page_home['meta_keyword'].'">';
        echo '<title>'.$page_home['title'].'</title>';
    }
    if($class_name == 'about')
    {
        echo '<meta name="description" content="'.$page_about['md_about'].'">';
        echo '<meta name="keywords" content="'.$page_about['mk_about'].'">';
        echo '<title>'.$page_about['mt_about'].'</title>';
    }
    if($class_name == 'faq')
    {
        echo '<meta name="description" content="'.$page_faq['md_faq'].'">';
        echo '<meta name="keywords" content="'.$page_faq['mk_faq'].'">';
        echo '<title>'.$page_faq['mt_faq'].'</title>';
    }
    if($class_name == 'team')
    {
        echo '<meta name="description" content="'.$page_team['md_team'].'">';
        echo '<meta name="keywords" content="'.$page_team['mk_team'].'">';
        echo '<title>'.$page_team['mt_team'].'</title>';
    }
    if($class_name == 'team_member')
    {
        $single_team_member = $this->Model_team_member->team_member_detail($segment_2);
        echo '<meta name="description" content="'.$single_team_member['meta_description'].'">';
        echo '<meta name="keywords" content="'.$single_team_member['meta_keyword'].'">';
        echo '<title>'.$single_team_member['meta_title'].'</title>';
    }
    if($class_name == 'portfolio')
    {
        echo '<meta name="description" content="'.$page_portfolio['md_portfolio'].'">';
        echo '<meta name="keywords" content="'.$page_portfolio['mk_portfolio'].'">';
        echo '<title>'.$page_portfolio['mt_portfolio'].'</title>';
    }
    if($class_name == 'testimonial')
    {
        echo '<meta name="description" content="'.$page_testimonial['md_testimonial'].'">';
        echo '<meta name="keywords" content="'.$page_testimonial['mk_testimonial'].'">';
        echo '<title>'.$page_testimonial['mt_testimonial'].'</title>';
    }
    if($class_name == 'contact')
    {
        echo '<meta name="description" content="'.$page_contact['md_contact'].'">';
        echo '<meta name="keywords" content="'.$page_contact['mk_contact'].'">';
        echo '<title>'.$page_contact['mt_contact'].'</title>';
    }
    if($class_name == 'search')
    {
        echo '<meta name="description" content="'.$page_search['md_search'].'">';
        echo '<meta name="keywords" content="'.$page_search['mk_search'].'">';
        echo '<title>'.$page_search['mt_search'].'</title>';
    }
    if($class_name == 'terms-and-conditions')
    {
        echo '<meta name="description" content="'.$page_term['md_term'].'">';
        echo '<meta name="keywords" content="'.$page_term['mk_term'].'">';
        echo '<title>'.$page_term['mt_term'].'</title>';
    }
    if($class_name == 'privacy-policy')
    {
        echo '<meta name="description" content="'.$page_privacy['md_privacy'].'">';
        echo '<meta name="keywords" content="'.$page_privacy['mk_privacy'].'">';
        echo '<title>'.$page_privacy['mt_privacy'].'</title>';
    }
    if($class_name == 'pricing')
    {
        echo '<meta name="description" content="'.$page_pricing['md_pricing'].'">';
        echo '<meta name="keywords" content="'.$page_pricing['mk_pricing'].'">';
        echo '<title>'.$page_pricing['mt_pricing'].'</title>';
    }
    if($class_name == 'photo_gallery')
    {
        echo '<meta name="description" content="'.$page_photo_gallery['md_photo_gallery'].'">';
        echo '<meta name="keywords" content="'.$page_photo_gallery['mk_photo_gallery'].'">';
        echo '<title>'.$page_photo_gallery['mt_photo_gallery'].'</title>';
    }
    if($class_name == 'service')
    {
        if($segment_3 == 0) {
            echo '<meta name="description" content="'.$page_service['md_service'].'">';
            echo '<meta name="keywords" content="'.$page_service['mk_service'].'">';
            echo '<title>'.$page_service['mt_service'].'</title>';  
        } else {
            $single_service = $this->Model_service->service_detail($segment_3);
            echo '<meta name="description" content="'.$single_service['meta_description'].'">';
            echo '<meta name="keywords" content="'.$single_service['meta_keyword'].'">';
            echo '<title>'.$single_service['meta_title'].'</title>';
        }       
    }
    if($class_name == 'category')
    {
        $single_category = $this->Model_category->category_by_id($segment_2);
        echo '<meta name="description" content="'.$single_category['meta_description'].'">';
        echo '<meta name="keywords" content="'.$single_category['meta_keyword'].'">';
        echo '<title>'.$single_category['meta_title'].'</title>';     
    }
    if($class_name == 'news')
    {
        if($segment_3 == 0) {
            echo '<meta name="description" content="'.$page_news['md_news'].'">';
            echo '<meta name="keywords" content="'.$page_news['mk_news'].'">';
            echo '<title>'.$page_news['mt_news'].'</title>';
        } else {
            $news_single_item = $this->Model_news->news_detail($segment_3);
            echo '<meta name="description" content="'.$news_single_item['meta_description'].'">';
            echo '<meta name="keywords" content="'.$news_single_item['meta_keyword'].'">';
            echo '<title>'.$news_single_item['meta_title'].'</title>';
            $og_id = $news_single_item['news_id'];
            $og_photo = $news_single_item['photo'];
            $og_title = $news_single_item['news_title'];
            $og_description = $news_single_item['news_content_short'];
            echo '<meta property="og:title" content="'.$og_title.'">';
            echo '<meta property="og:type" content="website">';
            echo '<meta property="og:url" content="'.base_url().'news/view/'.$og_id.'">';
            echo '<meta property="og:description" content="'.$og_description.'">';
            echo '<meta property="og:image" content="'.base_url().'public/uploads/'.$og_photo.'">';
        }
    }
    if($class_name == 'event')
    {
        if($segment_3 == 0) {
            echo '<meta name="description" content="'.$page_event['md_event'].'">';
            echo '<meta name="keywords" content="'.$page_event['mk_event'].'">';
            echo '<title>'.$page_event['mt_event'].'</title>';
        } else {
            $event_single_item = $this->Model_event->event_detail($segment_3);
            echo '<meta name="description" content="'.$event_single_item['meta_description'].'">';
            echo '<meta name="keywords" content="'.$event_single_item['meta_keyword'].'">';
            echo '<title>'.$event_single_item['meta_title'].'</title>';
            $og_id = $event_single_item['event_id'];
            $og_photo = $event_single_item['photo'];
            $og_title = $event_single_item['event_title'];
            $og_description = $event_single_item['event_content_short'];
            echo '<meta property="og:title" content="'.$og_title.'">';
            echo '<meta property="og:type" content="website">';
            echo '<meta property="og:url" content="'.base_url().'event/view/'.$og_id.'">';
            echo '<meta property="og:description" content="'.$og_description.'">';
            echo '<meta property="og:image" content="'.base_url().'public/uploads/'.$og_photo.'">';
        }
    }
    ?>

    <style type="text/css">
        
        :root{
            --mainFaded:#d9f6fa;
            --mainColor:#<?php echo $setting['front_end_color']; ?>;
        }

        .mainText{
            color: var(--mainColor);
        }

    </style>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>">


    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons"></script>

<title>Cheetahnet | Fasted Internet Service </title>
<!-- Stylesheets -->
<link href="<?=base_url('public/site/css/bootstrap.min.css')?>" rel="stylesheet">
<link href="<?=base_url('public/site/css/style.css')?>" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?=base_url('public/site/images/favicon.png')?>" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<style type="text/css">
    
/*header:after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  height: 30%;
  width: 100%;
  background: #fff;
  border-top-left-radius: 50% 20%;
  border-top-right-radius: 50% 20%;
  user-select: none;
}
*/
</style>
</head>

<body>

<div class="page-wrapper">
    
    <!-- Preloader -->
    <?php include('preloader.php'); ?>

    <!-- Main Header-->
    <header class="main-header header-style-three">
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
                                <li><a href="<?php echo base_url(); ?>news">News</a></li>
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
                    <div class="nav-logo" style="min-width: 100px!important;"><a href=""><img src="images/logo.png" alt="" title=""></a></div>
                    <div class="close-btn"><i class="icon fa fa-times"></i></div>
                </div>
        
                <ul class="navigation clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </ul>
                <ul class="contact-list-one">
                    <li>
                        <!-- Contact Info Box -->
                        <div class="contact-info-box">
                            <i class="icon lnr-icon-phone-handset"></i>
                            <span class="title">Call Now</span>
                            <a href="tel:<?php echo $setting['top_bar_phone']; ?>"><?php echo $setting['top_bar_phone']; ?></a>
                        </div>
                    </li>
                    <li>
                        <!-- Contact Info Box -->
                        <div class="contact-info-box">
                            <span class="icon lnr-icon-envelope1"></span>
                            <span class="title">Send Email</span>
                            <a href="mailto:<?php echo $setting['top_bar_email']; ?>"><?php echo $setting['top_bar_email']; ?></a>
                        </div>
                    </li>
                    <li>
                        <!-- Contact Info Box -->
                        <div class="contact-info-box">
                            <span class="icon lnr-icon-clock"></span>
                            <span class="title">Send Email</span>
                            Mon - Sat 8:00 - 6:30, Sunday - CLOSED
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
        <div class="sticky-header">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo">
                        <a href="" title=""><img src="images/logo.png" style="min-width: 100px!important;" alt="" title=""></a>
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
    </header>
    <!--End Main Header -->