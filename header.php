<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" /> 
        <meta name="viewport" content="width=device-width, user-scalable=5"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <header>
        <div class="container-header">
            <div>
                <?php if(has_custom_logo()) {
                    the_custom_logo();
                } ?>
            </div>
            <div class="main-menu">
                <nav>
                    <?php if(has_nav_menu('top')) {
                        wp_nav_menu(array(
                            'theme_location' => 'top',
                            'container' => false,
                            'fallback_cb' => false
                        ));
                    } ?>
                </nav>
            </div>
            <div class="social-menu">
                <?php if(get_theme_mod('rg_facebook')): ?>
                <a href="<?php echo get_theme_mod('rg_facebook'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <?php endif; ?>
                <?php if(get_theme_mod('rg_instagram')): ?>
                <a href="<?php echo get_theme_mod('rg_instagram'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                <?php endif; ?>
                <?php if(get_theme_mod('rg_linkedin')): ?>
                <a href="<?php echo get_theme_mod('rg_linkedin'); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <?php endif; ?>
                <?php if(get_theme_mod('rg_twitter')): ?>
                <a href="<?php echo get_theme_mod('rg_twitter'); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                <?php endif; ?>
                <?php if(get_theme_mod('rg_youtube')): ?>
                <a href="<?php echo get_theme_mod('rg_youtube'); ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </header>