<?php


function farmside_enqueue_style(){
    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css', false);
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', false);
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', false);
    wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css', false);
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', false);
}

add_action('wp_enqueue_scripts', 'farmside_enqueue_style');


function farmside_enqueue_script()
{

    // load active theme stylesheet in both cases

    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', false);

    wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', false);

    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', false);

    wp_enqueue_script('owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js', false);


}


add_action('wp_enqueue_scripts', 'farmside_enqueue_script');


function register_my_menu()
{

    register_nav_menus(

        array(

            'header-menu' => __('Header Menu'),

            'footer-menu' => __('Footer Menu'),

        )

    );

}

add_action('init', 'register_my_menu');


add_theme_support('post-thumbnails');


register_sidebar(array(

    'name' => 'Top Nav',

    'id' => 'top-nav',

    'description' => 'Appears in the footer area',

    'before_widget' => '<aside id="%1$s" class="widget %2$s">',

    'after_widget' => '</aside>',

    'before_title' => '<h3 class="widget-title">',

    'after_title' => '</h3>',

));

register_sidebar(array(

    'name' => 'Footer',

    'id' => 'footer',

    'description' => 'Appears in the footer area',

    'before_widget' => '<aside id="%1$s" class="widget %2$s">',

    'after_widget' => '</aside>',

    'before_title' => '<h3 class="widget-title">',

    'after_title' => '</h3>',

));

register_sidebar(array(

    'name' => 'Footer Sidebar 1',

    'id' => 'footer-sidebar-1',

    'description' => 'Appears in the footer area',

    'before_widget' => '<aside id="%1$s" class="widget %2$s">',

    'after_widget' => '</aside>',

    'before_title' => '<h3 class="widget-title">',

    'after_title' => '</h3>',

));

register_sidebar(array(

    'name' => 'Footer Sidebar 2',

    'id' => 'footer-sidebar-2',

    'description' => 'Appears in the footer area',

    'before_widget' => '<aside id="%1$s" class="widget %2$s">',

    'after_widget' => '</aside>',

    'before_title' => '<h3 class="widget-title">',

    'after_title' => '</h3>',

));

register_sidebar(array(

    'name' => 'Footer Sidebar 3',

    'id' => 'footer-sidebar-3',

    'description' => 'Appears in the footer area',

    'before_widget' => '<aside id="%1$s" class="widget %2$s">',

    'after_widget' => '</aside>',

    'before_title' => '<h3 class="widget-title">',

    'after_title' => '</h3>',

));

register_sidebar(array(

    'name' => 'Footer Sidebar 4',

    'id' => 'footer-sidebar-4',

    'description' => 'Appears in the footer area',

    'before_widget' => '<aside id="%1$s" class="widget %2$s">',

    'after_widget' => '</aside>',

    'before_title' => '<h3 class="widget-title">',

    'after_title' => '</h3>',

));

register_sidebar(array(

    'name' => 'Header Text',

    'id' => 'header-text',

    'description' => 'Appears in the footer area',

    'before_widget' => '<aside id="%1$s" class="widget %2$s">',

    'after_widget' => '</aside>',

    'before_title' => '<h3 class="widget-title">',

    'after_title' => '</h3>',

));


function amazetal_pagination($pages = '', $range = 2)
{
    $showitems = ($range * 2) + 1;
    global $paged;
    if (empty($paged)) $paged = 1;
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    if (1 != $pages) {
        echo "<div class='pagination'>";
        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) echo "<li><a href='" . get_pagenum_link(1) . "'>&laquo;</a></li>";
        if ($paged > 1 && $showitems < $pages) echo "<li><a href='" . get_pagenum_link($paged - 1) . "'>&lsaquo;</a></li>";
        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? "<li><span class='current'>" . $i . "</span></li>" : "<li><a href='" . get_pagenum_link($i) . "' class='inactive' >" . $i . "</a></li>";
            }
        }
        if ($paged < $pages && $showitems < $pages) echo "<li><a href='" . get_pagenum_link($paged + 1) . "'>&rsaquo;</a></li>";
        if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages) echo "<li><a href='" . get_pagenum_link($pages) . "'>&raquo;</a></li>";
        echo "</div>\n";
    }
}

function blog_set($pages = '', $range = 2)
{
    $showitems = ($range * 2) + 1;
    global $paged;
    if (empty($paged)) $paged = 1;
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    if (1 != $pages) {
        echo "<div class='pagination'>";
        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) echo "<li><a href='" . get_pagenum_link(1) . "'>&laquo;</a></li>";
        if ($paged > 1 && $showitems < $pages) echo "<li><a href='" . get_pagenum_link($paged - 1) . "'>&lsaquo;</a></li>";
        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? "<li><span class='current'>" . $i . "</span></li>" : "<li><a href='" . get_pagenum_link($i) . "' class='inactive' >" . $i . "</a></li>";
            }
        }
        if ($paged < $pages && $showitems < $pages) echo "<li><a href='" . get_pagenum_link($paged + 1) . "'>&rsaquo;</a></li>";
        if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages) echo "<li><a href='" . get_pagenum_link($pages) . "'>&raquo;</a></li>";
        echo "</div>\n";
    }
}

function the_titlesmall($before = '', $after = '', $echo = true, $length = false){
    $title = get_the_content();

    $title_length = strlen($title);
    if ($length && is_numeric($length)) {
        $title = substr($title, 0, $length);
    }

    if (strlen($title) > 0) {
        $title = apply_filters('the_titlesmall', $before . $title . $after, $before, $after);
        if ($title_length > $length) {
            $title = $title . ' ...';
        }

        if ($echo)
            echo $title;
        else
            return $title;
    }
}


