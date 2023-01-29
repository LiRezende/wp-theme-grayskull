<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" /> 
        <meta name="viewport" content="width=device-width, user-scalable=5"/>
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
            <div>
                ...
            </div>
        </div>
    </header>