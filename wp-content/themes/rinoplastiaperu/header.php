
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="en-US"><![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html lang="en-US">
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

<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery.themepunch.revolution.min.js'></script>

		
<?php wp_head(); ?>
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script><![endif]-->
