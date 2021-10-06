<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous"> 

    <?php wp_head()?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<div id="page" class="site">
<header class="header-loumar">
    <nav class="navbar container">
        <div class="navbar-brand">
           <?php
                the_custom_logo();
                if (is_front_page() && is_home() ) {}
            ?>
            
             

		</div><!-- .site-branding -->
    </nav>
</header>