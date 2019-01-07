<?php $page=get_option('page_on_front'); ?>
<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class( $class );?>>

      <!--header start--> 

    <header>

      <!--top menu-->    

      <section class="set-bg">

        <div class="container-fluid">

       <?php dynamic_sidebar('top-nav'); ?>

        </div>

      </section>

      <!--top menu end-->   

       

       <!--down menu start-->

       <div class="navbar navbar-default">

        <div class="container-fluid pad-1">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-target="#navbar-container" data-toggle="collapse">

                    <span class="sr-only">show And hide the nav</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>

                <div class="logo"><a href="http://www.farmsidesupplies.com/"><img src="http://i--demo.com/projects/farmside/wp-content/uploads/2016/08/unnamed.png" class="img-responsive"/></a></div>

            </div>

            <div class="collapse navbar-collapse" id="navbar-container">

                <ul class="nav navbar-nav set-li1">

                    

                </ul>

                <ul class="nav navbar-nav navbar-right set-li2">

                    <?php

                                wp_nav_menu( array(

                               'theme_location' => 'header-menu',

                               'items_wrap' => '%3$s',

                               'container' => '',

                               'menu_class' => '') );

                               ?>

                     

                   

                </ul>

            </div>

        </div>

      </div> 

      <section class="bg-img">

        <div class="container">

          <div class="text-bg">

            <h1><?php the_field('header_background_title',$page);?></h1>

          </div><br>
          <a class="btn-shop-now" href="http://www.farmsidesupplies.com/contact-us/">Contact Us</a>

        </div>     

        

      </section>

       <!--down menu end-->    

    </header>

     <!--header end-->