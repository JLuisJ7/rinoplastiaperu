
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="en-US"><![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <!-- Define a viewport to mobile devices to use - telling the browser to assume that the page is as wide as the device (width=device-width) and setting the initial page zoom level to be 1 (initial-scale=1.0) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no" />
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.png"/>
    <title> <?php if (is_front_page()) {bloginfo('name'); }else{wp_title(''); }?></title>
    <link rel='stylesheet'  href='<?php bloginfo('template_url'); ?>/css/rvs_settings.css' type='text/css' media='all' />
    <link rel='stylesheet' id='google-raleway-css'  href='http://fonts.googleapis.com/css?family=Raleway%3A400%2C100%2C200%2C300%2C500%2C600%2C700%2C800%2C900&#038;ver=4.1.1' type='text/css' media='all' />
    <link rel='stylesheet' id='google-droid-serif-css'  href='http://fonts.googleapis.com/css?family=Droid+Serif%3A400%2C700%2C400italic%2C700italic&#038;ver=4.1.1' type='text/css' media='all' />
    <link rel='stylesheet'   href='<?php bloginfo('template_url'); ?>/css/normalize.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flexslider-css-css'  href='<?php bloginfo('template_url'); ?>/css/flexslider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='animations-css-css'  href='<?php bloginfo('template_url'); ?>/css/animations.css' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css-css'  href='<?php bloginfo('template_url'); ?>/css/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' id='datepicker-css-css'  href='<?php bloginfo('template_url'); ?>/css/datepicker.css' type='text/css' media='all' />
    <link rel='stylesheet' id='swipebox-css-css'  href='<?php bloginfo('template_url'); ?>/css/swipebox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='meanmenu-css-css'  href='<?php bloginfo('template_url'); ?>/css/meanmenu.css' type='text/css' media='all' />
    <link rel='stylesheet' id='main-css-css'  href='<?php bloginfo('template_url'); ?>/css/main.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-responsive-css-css'  href='<?php bloginfo('template_url'); ?>/css/custom-responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='<?php bloginfo('stylesheet_url'); ?>' type='text/css' media='all' />  
    <script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery.js'></script>
    <script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery.themepunch.revolution.min.js'></script>
    <?php wp_head(); ?>
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script><![endif]-->
<body <?php body_class(); ?>>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="<php echo 'http://www.google.com/chromeframe/?redirect=true'; ?>">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
    <div class="header-top clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 ">
                    <p>Welcome to MedicalPress a Premium Medical Theme</p>
                </div>
                <div class="col-lg-7 col-md-7  text-right">
                    <p>
                        Opening Hours : <span>Monday to Saturday - 8am to 9pm</span><br class="visible-xs" />&nbsp;&nbsp;Contact : <span>+1-800-654-3210</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!-- Website Logo -->
                    <div class="logo clearfix">
                        <a href="<?php echo get_option('home'); ?>">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/logo.png" alt="Doctor Valdivia"/>
                        </a>
                    </div>
                    <!-- Main Navigation -->
                    <nav class="main-menu">
                        <?php wp_nav_menu(array('theme_location' => 'menu-header','menu_id' => 'menu', 'menu_class' => 'eleven columns','container' => '','items_wrap'      => '<ul id="menu-main-menu" class="header-nav clearfix">%3$s</ul>',)); ?>
                    </nav>
                    <div id="responsive-menu-container"></div>
                </div>
            </div>
        </div>
    </header>
    <?php if ( is_home() ) { ?>  
    <div class="home-slider clearfix">
        <div class="flexslider loading">
            <ul class="slides">
                <li>
                    <img src="http://inspirythemesdemo.com/medicalpress/wp-content/uploads/2014/05/slide-one.jpg" class="gallery-post-single" alt="Medical Services <span>That You Can Trust</span>"/>
                    <div class="content-wrapper clearfix">
                        <div class="container">
                            <div class="slide-content clearfix ">
                                <h1>Medical Services <span>That You Can Trust</span></h1>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod.</p>
                                <a class="btn" href="http://inspirythemesdemo.com/medicalpress/doctors/">Read More</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="http://inspirythemesdemo.com/medicalpress/wp-content/uploads/2014/05/slide-two.jpg" class="gallery-post-single" alt="We <span>Care</span> for <span>You</span>"/>
                    <div class="content-wrapper clearfix">
                        <div class="container">
                            <div class="slide-content clearfix ">
                                <h1>We <span>Care</span> for <span>You</span></h1>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                <a class="btn" href="http://inspirythemesdemo.com/medicalpress/services/">Read More</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="http://inspirythemesdemo.com/medicalpress/wp-content/uploads/2014/05/slide-three.jpg" class="gallery-post-single" alt="Qualified Staff With <span>Expertise in Services We Offer</span>"/>
                    <div class="content-wrapper clearfix">
                        <div class="container">
                            <div class="slide-content clearfix ">
                                <h1>Qualified Staff With <span>Expertise in Services We Offer</span></h1>
                                <a class="btn" href="http://inspirythemesdemo.com/medicalpress/gallery/">Read More</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="appointment appointment-two clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-5 col-lg-offset-8 col-md-offset-8 make-appoint-two ">
                        <span class="btn make-appoint">Make an Appointment <i class="fa fa-caret-down"></i></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-lg-offset-8 col-md-offset-8 variation-two">
                        <div class="appointment-form clearfix">
                            <form class="clearfix" id="appointment_form_two" action="http://inspirythemesdemo.com/medicalpress/wp-admin/admin-ajax.php" method="post" >
                                <div class="col-lg-12 col-md-12 col-sm-12 common">
                                    <input type="text" name="name" id="app-name" class="required" placeholder="Name" />
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 common">
                                    <input type="text" name="number" id="app-number" class="" placeholder="Phone Number"/>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 common">
                                    <input type="email" name="email" id="app-email" class="required email" placeholder="Email Address"/>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 common">
                                    <input type="text" name="date" id="datepicker" placeholder="Appointment Date"/>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 common">
                                    <textarea name="message" id="app-message" class="required" cols="50" rows="1" placeholder="Appointment Message"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 common">
                                    <input type="submit" name="Submit" class="btn" value="SEND"/>
                                    <br/>
                                    <input type="hidden" name="action" value="make_appointment">
                                    <input type="hidden" name="nonce" value="44eb8702e2" />
                                    <img src="http://inspirythemesdemo.com/medicalpress/wp-content/themes/medical-theme/images/white-loader.gif" id="appointment-loader" alt="Loading...">
                                    <div id="message-sent"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } else { ?>
    <div class="banner clearfix" style="background-repeat: no-repeat; background-position: center top; background-image: url('http://inspirythemesdemo.com/medicalpress/wp-content/themes/medical-theme/images/banner.jpg'); background-size: cover;"></div>
    <div class=" page-top clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 ">
                    <?php if (function_exists('wordpress_breadcrumbs')) wordpress_breadcrumbs(); ?>
                    <h1 class="entry-title">Services</h1>
                    <nav class="bread-crumb">
                        <ul class="breadcrumb clearfix">
                            <li><a href="http://inspirythemesdemo.com/medicalpress">Medical Press</a><span class="divider"></span></li>
                            <li class="active">Services</li></ul>
                        </nav>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 ">
                    <div id="search" class="widget clearfix">
                        <form method="get" id="search-form" class="search-form" action="http://inspirythemesdemo.com/medicalpress/">
                            <div>
                                <input type="text" value="" name="s" id="search-text" placeholder="Search"/>
                                <input type="submit" id="search-submit" value=""/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php } ?>
