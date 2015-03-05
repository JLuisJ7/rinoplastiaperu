<?php
/*
	Template Name: Contacto 
*/
?>
<?php get_header(); ?>
	<div class="contact-page clearfix">
		<div class="container">
            <div class="row">
           		<div class="col-lg-12 col-md-12 col-sm-12">
                	<div class="blog-page-single clearfix">
                    	<article id="post-177" class="post-177 page type-page status-publish hentry  clearfix">
                        	<div class="full-width-contents">
                            	<div class="entry-content">
                                	<h2>Get in Touch</h2>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,<br />
										magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="clearfix"></div>
                	<div class="col-lg-5 col-md-5 col-sm-6 ">
                    	<?php if (have_posts()): ?>
                    	<?php while(have_posts()): the_post(); ?>
                    	<?php the_content(); ?>
                    	<?php endwhile; ?>		
                    	<?php endif ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6  col-lg-offset-1 col-md-offset-1">
                        <div class="contact-sidebar clearfix">
                            <article class="address-area clearfix">
                                <h2><span>DR. VICTOR VALDIVIA</span></h2>
                                <div class="row">
                                 	<div class="col-lg-6 col-md-6 col-sm-12 ">
                                    	<address>Clínica Internacional sede San Borja</address>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    	<p>
                                    		Citas: 6196161 <br>
                                    		Lunes: 8:00 a.m - 12 M  y 4:00 p.m - 8:00 p.m <br>
                                    		Miércoles: 4:00 p.m - 8:00 p.m <br>
                                    		Viernes: 8:00 a.m - 12 M <br>
                                    		Sábados: 8:00 a.m - 12M y 1:00 p.m 4:00 p.m
                                    	</p> 
                                    </div>
                                </div>
                                <div class="row">
                                 	<div class="col-lg-6 col-md-6 col-sm-12 ">
                                    	<address>Clínica Limatambo</address>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    	<p>
			                                Citas: 442-4670<br>
			                                Martes: 4:00 p.m - 8:00 p.m<br>
			                                Jueves: 10:00 a.m - 1:00 p.m<br>                            
			                            </p>
                                    </div>
                                </div>
                                <div class="row">
                                 	<div class="col-lg-6 col-md-6 col-sm-12 ">
                                    	<address>Hospital Nacional "Arzobispo Loayza"</address>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    	<p>
			                                Email: doctorvaldivia@rinoplastiaperu.net<br>
			                                Cel.: 9-9635-9797<br>
			                                Nextel : 404*7075<br>                            
			                            </p> 
                                    </div>
                                </div>
                            </article>                           
                            <article class="social-icon clearfix">
                                <h5><span>Social :</span></h5>
                                <ul class="clearfix">
                                    <li class="twitter-icon">
                                    	<a target="_blank" href="https://twitter.com/InspiryThemes"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="facebook-icon">
                                    	<a target="_blank" href="https://www.facebook.com/InspiryThemes"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="google-icon">
                                    	<a target="_blank" href="https://plus.google.com/105667798414314247471"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li class="linkedin-icon">
                                    	<a target="_blank" href="#linkedin"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li class="instagram-icon">
                                    	<a target="_blank" href="#instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li class="youtube-icon">
                                    	<a target="_blank" href="#youtube"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <li class="skype-icon">
                                    	<a target="_blank" href="skype:skypeusername?add"><i class="fa fa-skype"></i></a>
                                    </li>
                                    <li class="rss-icon">
                                    	<a target="_blank" href="http://inspirythemesdemo.com/medicalpress/feed/"><i class="fa fa-rss"></i></a>
                                	</li>
                                </ul>	
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
            	<div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="map-wrapper">
                            <h5>Location in Map</h5>                            
                            <iframe id="map-canvas" src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d31212.27901427288!2d-77.0236395!3d-12.0754905!3m2!1i1024!2i768!4f13.1!2m1!1sClinica+Internacional+(sede+San+Borja)!5e0!3m2!1ses-419!2spe!4v1425598897186" width="600" height="450" frameborder="0" style="border:0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
