<?php get_header(); ?>

    <!--section 2 end-->
    <section class="content-sec-1 single-contents">

      <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1><?php the_field('blog_title');?></h1>

        <h2><?php the_field('blog_subtitle');?></h2>
        <div class="center-img">
        <div class="single-img-container">
          <?php the_post_thumbnail(); ?>
       </div>
       </div>
       <h3><?php the_title();?></h3>
       <h4><span> By <?php the_author(); ?> ,</span> on <?php echo get_the_date('F,j,Y');?>
       <p><?php the_content();?></p> 

     

       
      </div>
      <?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
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

