<?php

/* Template Name:Products*/

?>

     <?php get_header(); ?>
    
    <section class="content-sec-1 products">

      <div class="container">
        <h1><?php the_field('top_title');?></h1>
        <h2><?php the_field('bottom_subtitle');?></h2>
          <div class="row">
              <?php $count2=1;

            if(have_posts()):query_posts(
              array('post_type' => 'our_products','posts_per_page' =>8,'paged'=>$paged,'orderby' => 'menu_order','order' => 'DESC'
                ));
             while(have_posts()):the_post();?>
        <div class="col-sm-3 set-prod "<?php if($count2==1){?> style="clear:both;<?php }?>">
          <a href="<?php the_permalink(); ?>" ><div class="product-img">
            <?php the_post_thumbnail(); ?>
          </div></a>
          <h4><?php the_title();?></h4>
          <span><?php //the_field('manufacturer'); ?></span>
          <h5><?php the_titlesmall('', '', true, '67') ?></h5>
            <a class="shop-prod-btn" href="<?php the_permalink(); ?>">Read More</a>
         </div>
             <?php 

     $count2=2;

   endwhile;

   endif;
 
   ?>
   <?php
//$terms = get_terms( array(
    //'taxonomy' => 'prducts_cat',
    //'hide_empty' => false,
//) );
//var_dump($terms);
 
?>
          </div><!--/row-->
        <div class="pagination-1">
    <?php amazetal_pagination();?>
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

