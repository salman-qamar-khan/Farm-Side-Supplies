<?php

/* Template Name:Blog*/

?>

<?php get_header(); ?>

<!--section 2 end-->
<section class="content-sec-1 blog-cont">

    <div class="container">

        <h1><?php the_field('top_title'); ?></h1>

        <h2><?php the_field('bottom_subtitle'); ?></h2>
        <div class="row">
        <?php
        $count = 0;


        if (have_posts()):query_posts(
            array('post_type' => 'post', 'posts_per_page' => 9, 'paged' => $paged, 'orderby' => 'date', 'order' => 'ASC', 'category_name' => 'expert-articles'
            ));
            while (have_posts()):the_post(); 
            $src = wp_get_attachment_image_src(get_post_thumbnail_id(), false, '');
            ?>
                <?php if ($count % 3 == 0) { ?>
                    <div class="clearfix"></div><?php } ?>
                <div class="col-sm-4">

                    <div class="img-cont" style="background: url(<?php echo $src[0]; ?>) no-repeat;"></div>

                    <h3><?php the_title(); ?></h3>

                    <h4><?php echo get_the_date('F , j , Y'); ?> -<span> <?php the_author(); ?> </span> -
                        <span>5 Comments</span></h4>

                    <h5><?php the_titlesmall('', '', true, '80') ?><br><a href="<?php the_permalink(); ?>">Read more</a>
                    </h5>

                </div>

                <?php $count++;

            endwhile;
        endif; // end of the loop.

        ?>

        </div>
        <div class="pagination-1">
            <?php blog_set(); ?>
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

