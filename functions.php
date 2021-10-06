<?php 
/**
* Enqueue scripts and styles
*/
    function loumar_enqueue_styles() {
        // all styles
        wp_enqueue_style( 'bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css", array(),'5.1.2', 'all' );
        wp_enqueue_style( 'flickity', "https://unpkg.com/flickity@2/dist/flickity.min.css", array(),'2.0', 'all' );
        wp_enqueue_style( 'css', get_stylesheet_directory_uri() . '/assets/css/template.css', array(), 20141119 );
    }
    add_action( 'wp_enqueue_scripts', 'loumar_enqueue_styles' );

    function loumar_enqueue_scripts() {
        wp_enqueue_script( 'flickity', "https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js", array(), '20120206', true );
        wp_enqueue_script( 'bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js", array(), '5.1.2', true );
        wp_enqueue_script( 'popper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js", array(), '2.10.2', true );
        wp_enqueue_script( 'js', get_template_directory_uri() . '/assets/js/template.js', array('jquery'), '20120206', true );
    }
    add_action('wp_enqueue_scripts', 'loumar_enqueue_scripts');

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