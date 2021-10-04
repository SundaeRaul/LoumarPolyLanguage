<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loumar Turismo | Gringo</title>
    <?php wp_head()?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<div id="page" class="site">
<header class="header-loumar">
    <nav class="navbar navbar-expand-lg container">
        <div class="navbar-brand">
			<?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

			the_custom_logo();
			    if ( is_front_page() && is_home() && has_custom_logo()) {
                    echo '<img class="m-2" src="' . esc_url( $logo ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                }
			?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

		</div><!-- .site-branding -->
    </nav>
</header>