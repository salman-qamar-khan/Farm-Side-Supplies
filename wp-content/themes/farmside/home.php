<?php

/* Template Name:Home*/

?>

     <?php get_header(); ?>

      <!--section 1 start-->
      <!--section 2 start-->

    <section class="content-sec-2">

      <div class="container">

        <h1><?php the_field('brandstitle');?></h1>

        <h2><?php the_field('brands_subtitle');?></h2>

          <div id="owl-demo">

            <?php $args = array( 'post_type' => 'brands-testimonial', 'posts_per_page' => -1,'order' => 'ASC');



            $loop = new WP_Query( $args );

            while ( $loop->have_posts() ) : $loop->the_post(); ?>   

            <div class="item"><?php the_post_thumbnail(); ?></div>

            <?php $count++; endwhile; // end of the loop.

            wp_reset_query();  ?>

          </div>

      </div>

    </section>

    <!--section 2 end-->
    <section class="content-sec-1">

      <div class="container">

        <h1><?php the_field('title');?></h1>

        <h2><?php the_field('subtitle');?></h2>

         <?php 

            $args = array( 'post_type' => 'post', 'posts_per_page' =>3,'orderby' => 'date','order' => 'ASC', 'category_name' => 'expert-articles');

            $loop = new WP_Query( $args );

            while ( $loop->have_posts() ) : $loop->the_post(); 
            $src = wp_get_attachment_image_src(get_post_thumbnail_id(), false, '');
            ?>

        <div class="col-sm-4">

          <div class="img-cont" style="background: url(<?php echo $src[0]; ?>) no-repeat;"></div>

          <h3><?php the_title();?></h3>

          <h4><?php echo get_the_date('F,j,Y');?> -<span> <?php the_author();?> </span> - <span>5 Comments</span></h4>

          <h5><?php the_titlesmall('', '...', true, '80') ?><br><a href="<?php the_permalink(); ?>">Read more..</a></h5>

        </div>

        <?php endwhile; // end of the loop.

          wp_reset_query();  ?>


      </div>
 <div class="button-cont">

          <a class="btn-green" href="http://www.farmsidesupplies.com/blog/">VIEW ALL</a>

        </div>
    </section>

    <!--section 1 end-->
    <!--our store -->
    <section class="our-store">
      <div class="container">
        <h1>Our Store</h1>
        <h2> At Farmside, we have literally thousands of pet products to choose from for just about any size pet!  You'll always be greeted with a smile and a helping hand.</h2>
         <?php echo do_shortcode('[ess_grid alias="our-store"]'); ?>
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

