

     <?php get_header(); ?>

    <!--section 2 end-->
   <section class="content-sec-1 products">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="container">
        <h1><?php the_field('top_title');?></h1>
        <h2><?php the_field('bottom_subtitle');?></h2>
        <!--<div class="search-cont">
          <input type="text" name="search-text" placeholder="Search Products..." />
          <button>Search</button>
        </div>
        <h3>Showing 1–12 of 977 results</h3>
        <div class="right-content pull-right">
           <span>Search by:</span>
         <select>
           <option>Category</option>
           <option>Category</option>
           <option>Category</option>
         </select>
        </div>-->
        <div class="col-sm-6 prod-img">
        	<div class="prod-single-img">
               <?php the_post_thumbnail(); ?>
        	</div>
        </div>
        <div class="col-sm-6 prod-single-cont">
        	<h6><?php the_title();?></h6>
        	<!--<span>Manufacturer:<?php the_field('manufacturer');?></span><br>
        	<span>Model:<?php //the_field('model');?></span>
        	<ul>
        		<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        		<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
        	</ul>-->
        	<p><?php the_content();?></p>
        </div>
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

