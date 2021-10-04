<?php 
/**
* Enqueue scripts and styles
*/
    function bootstrap_enqueue_scripts() {
        // all styles
        wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/bootstrap/css/bootstrap.css', array(), 20141119 );
        // all scripts
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '20120206', true );
        wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/bootstrap/js/scripts.js', array('jquery'), '20120206', true );
    }
    add_action( 'wp_enqueue_scripts', 'bootstrap_enqueue_scripts' );

    function flickity_enqueue_scripts() {
        wp_enqueue_script( 'flickity', get_template_directory_uri() . '/assets/flickity/js/fllickity.pkgd.min.js', array('jquery'), '20120206', true );
        wp_enqueue_style( 'flickity', get_stylesheet_directory_uri() . '/assets/flickity/css/flickity.min.css', array(), 20141119 );
    }

    add_action('wp_enqueue_scripts', 'flickity_enqueue_scripts');

    function theme_enqueue_scripts() {
        // all styles
        wp_enqueue_style( 'css', get_stylesheet_directory_uri() . '/assets/css/template.css', array(), 20141119 );
        // all scripts
        wp_enqueue_script( 'js', get_template_directory_uri() . '/assets/js/template.js', array('jquery'), '20120206', true );

    }
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );


    if ( ! function_exists( 'loumar_poly_lang_setup' ) ) :

        function loumar_poly_lang_setup() {

            /**
             * add suporte de custom logo no core do WP
             *
             * @link https://codex.wordpress.org/Theme_Logo
             */
            add_theme_support(
                'custom-logo',
                array(
                    'height'      => 250,
                    'width'       => 250,
                    'flex-width'  => true,
                    'flex-height' => true,
                )
            );
        }

    endif;
    add_action( 'after_setup_theme', 'loumar_poly_lang_setup' );