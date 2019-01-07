<!--footer start-->

<!--footer start -->

<footer class="set-footer">

    <div class="container set-foot-pad">

        <div class="col-sm-3 set-foot-1">

            <?php dynamic_sidebar('footer-sidebar-1'); ?>


        </div>


        <div class="col-sm-3 set-foot-2">
            <?php dynamic_sidebar('footer-sidebar-2'); ?>
        </div>
        <div class="col-sm-3 set-foot-3">
            <?php dynamic_sidebar('footer-sidebar-3'); ?>
            <div>
                <?php //echo do_shortcode('[mc4wp_form id="44"]'); ?>
            </div>
        </div>


        <div class="col-sm-3 set-foot-4">

            <?php dynamic_sidebar('footer-sidebar-4'); ?>

        </div>

    </div>

    <div class="container-fluid last-foot">

        <?php dynamic_sidebar('footer-sidebar-5'); ?>


    </div>


</footer>

<?php wp_footer(); ?>

</body>

</html>