<?php

function rg_social_customize($wp_customize) {

    // Settings
    $wp_customize->add_setting('rg_facebook', array('default'=>''));
    $wp_customize->add_setting('rg_instagram', array('default'=>''));
    $wp_customize->add_setting('rg_linkedin', array('default'=>''));
    $wp_customize->add_setting('rg_twitter', array('default'=>''));
    $wp_customize->add_setting('rg_youtube', array('default'=>''));

    // Section
    $wp_customize->add_section('rg_social_section', array(
        'title' => 'Redes Sociais',
        'priority' => '1'
    ));

    // Controllers
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'rg_facebook',
            array(
                'label' => 'Link do Facebook',
                'section' => 'rg_social_section',
                'settings' => 'rg_facebook',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'rg_Instagram',
            array(
                'label' => 'Link do Instagram',
                'section' => 'rg_social_section',
                'settings' => 'rg_instagram',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'rg_linkedin',
            array(
                'label' => 'Link do LinkedIn',
                'section' => 'rg_social_section',
                'settings' => 'rg_linkedin',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'rg_twitter',
            array(
                'label' => 'Link do Twitter',
                'section' => 'rg_social_section',
                'settings' => 'rg_twitter',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'rg_youtube',
            array(
                'label' => 'Link do YouTube',
                'section' => 'rg_social_section',
                'settings' => 'rg_youtube',
                'type' => 'text'
            )
        )
    );
}