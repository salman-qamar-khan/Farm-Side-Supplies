<?php

/* Template Name:Contact Us*/

?>

<?php get_header(); ?>


<!--contact us start-->
<section class="contact-us contact-us-main">

    <div class="container">
        <h1>CONTACT US</h1>
        <h2><?php the_field('contact_us_subtitle'); ?> </h2>

        <div class="row">
            <div class="col-sm-6">
                <?php echo do_shortcode('[contact-form-7 id="68" title="Contact form 1"]'); ?>
            </div>
            <div class="col-sm-6 set-form">
                <ul>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><?php the_field('contact_email'); ?> </li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i><?php the_field('contact_phone'); ?></li>
                </ul>
                <h3></h3>
                <div class="store-info">
                 <h3>Store Hours</h3>
                  <p>Monday-Saturday 8am-6pm</p>
                  <p>Sunday Closed</p>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="g-map">
            <?php the_field('contact_info'); ?>
        </div>
    </div>
</section>

<!--contact us end-->

<?php get_footer(); ?>

