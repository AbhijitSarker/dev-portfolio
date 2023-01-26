<?php

//defining templates directory paath
define('TEMPLATES_DIRECTORY_PATH', get_template_directory_uri());



function devfolio_theme_css_js()
{
    // CSS Files
    wp_enqueue_style('font-awesome', TEMPLATES_DIRECTORY_PATH . '/assets/css/fontawesome.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('magnific-popup', TEMPLATES_DIRECTORY_PATH . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all');
    wp_enqueue_style('owl-carousel', TEMPLATES_DIRECTORY_PATH . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap', TEMPLATES_DIRECTORY_PATH . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style', TEMPLATES_DIRECTORY_PATH . '/assets/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('responsive-style', TEMPLATES_DIRECTORY_PATH . '/assets/css/responsive.css', array(), '1.0.0', 'all');

    // JS Files
    wp_enqueue_script('easy-piechart', TEMPLATES_DIRECTORY_PATH . '/assets/js/jquery.easypiechart.min', array('jquery'), '1.0.0', true);
    wp_enqueue_script('magnific-popup', TEMPLATES_DIRECTORY_PATH . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('owl-carousel', TEMPLATES_DIRECTORY_PATH . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bootstrap', TEMPLATES_DIRECTORY_PATH . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('gsap', TEMPLATES_DIRECTORY_PATH . '/assets/js/gsap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('ScrollToPlugin', TEMPLATES_DIRECTORY_PATH . '/assets/js/ScrollToPlugin.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('ScrollSmoother', TEMPLATES_DIRECTORY_PATH . '/assets/js/ScrollSmoother.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('split-text', TEMPLATES_DIRECTORY_PATH . '/assets/js/splittext.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('app', TEMPLATES_DIRECTORY_PATH . '/assets/js/app.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'devfolio_theme_css_js');
