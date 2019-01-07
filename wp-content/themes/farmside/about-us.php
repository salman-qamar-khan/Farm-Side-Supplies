 <?php

/* Template Name:About Us*/

?>
     <?php get_header(); ?>
     <section class="about-us">
  		
     	<div class="container set-pad">
 			<h1>ABOUT US</h1>
  		    <h2><?php the_field('about_sub_title'); ?></h2>
  		    <div class="container set-about-content">	
     		<div class="col-sm-6">
     			<h3><?php the_field('about_text'); ?></h3>
     		</div>
     		<div class="col-sm-6">
     			<div class="about-img-cont">
     				<img src="<?php echo get_field('right_image')['url']; ?>" class="img-responsive"/>
     			</div>
     		</div>
     	
     		<p><?php the_field('about_paragraph'); ?></p>
     	</div>
     	</div>
     	
     </section>

<!--contact us start-->
<section class="contact-us">
    <div class="container">
        <h1>CONTACT US</h1>
        <div class="contact-us-767">
            <?php echo do_shortcode('[contact-form-7 id="68" title="Contact form 1"]'); ?>
        </div>
    </div>
</section>
<!--contact us end-->

    <?php get_footer(); ?>
