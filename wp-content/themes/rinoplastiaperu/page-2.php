<?php
/*
Template Name: Plantilla 2
*/
?>
<?php get_header(); ?>
 	<div class="gallery-single-wrapper clearfix">
        <article class="gallery-single clearfix hentry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <div class="gallery-single-post clearfix">
                            <div class="clearfix" id="slider">
                                <ul class="slides">
                                <?php
                                    $args = array(
                                        'order' => 'DESC',
                                        'post_type' => 'attachment',
                                        'posts_per_page' => -1,
                                        'post_parent' => $post->ID,
                                        'post_mime_type' => 'image'
                                    );
                                    $attachments = get_posts($args);
                                    if ($attachments) {
                                        foreach ($attachments as $attachment) {
                                            $image_atts = wp_get_attachment_image_src( $attachment->ID, 'full' );
                                ?>
                                    <li>
                                        <a><img   src="<?php echo  $image_atts[0];  ?>" alt=""></a>
                                    </li>
                                <?php
                                        }//end foreach
                                    } // endif 
                                ?> 
                                </ul>
                            </div>
                            <div id="carousel" class="flexslider">
                                <ul class="slides">
                                <?php
                                    $args = array(
                                        'order' => 'DESC',
                                        'post_type' => 'attachment',
                                        'posts_per_page' => -1,
                                        'post_parent' => $post->ID,
                                        'post_mime_type' => 'image'
                                    );
                                    $attachments = get_posts($args);
                                    if ($attachments) {
                                        foreach ($attachments as $attachment) {
                                            $image_atts = wp_get_attachment_image_src( $attachment->ID, 'full' );
                                ?>
                                    <li>
                                        <a><img   src="<?php echo  $image_atts[0];  ?>" alt=""></a>
                                    </li>
                                <?php
                                        }//end foreach
                                    } // endif 
                                ?> 
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-lg-5 col-md-5 col-sm-5 ">
                        <div class="side-content clearfix">
                            <h1 class="entry-title">Blood Pressure Checkup</h1>
                            <div class="gallery-item-types">
                                <i class="fa fa-tags"></i>
                                <a href="http://inspirythemesdemo.com/medicalpress/gallery-item-type/free-facilities/" rel="tag">Free Facilities</a>, 
                                <a href="http://inspirythemesdemo.com/medicalpress/gallery-item-type/patient-care/" rel="tag">Patient Care</a>
                            </div>
                            <div class="entry-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                </p>
                                <blockquote>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio.</p>
                                </blockquote>
                                <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </article>
    </div>

<?php get_footer(); ?>