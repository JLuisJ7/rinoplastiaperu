<?php get_header(); ?>
 	<div class="blog-page default-page service-page clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                	<div class="blog-page-single clearfix">
                    	<article id="post-108" class="post-108 service type-service status-publish has-post-thumbnail hentry clearfix">
                        	<div class="page-contents">
                            	<header class="entry-header">
                                	<div class="gallery gallery-slider clearfix">
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
													<img  class="attachment-service-gallery-thumb wp-post-image" src="<?php echo  $image_atts[0];  ?>" alt="">
												</li>
												<?php  
													}//end foreach
											 	} // endif ?>             								
            							</ul>
            						</div>
            					</header>
            					<?php if (have_posts()): ?>
            						<?php while(have_posts()): the_post(); ?>
            					<div class="entry-content">            						
            						<?php the_content(); ?>            						
                                </div>
                            	<?php endwhile; ?>
            						<?php endif ?>
                            </div>
                        </article>
                    </div>
                </div>                
            </div>
        </div>
    </div>


<?php get_footer(); ?>