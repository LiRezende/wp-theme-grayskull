<?php

function rg_beneficios_customize($wp_customize) {

    // Settings
    $wp_customize->add_setting('rg_beneficio01_url', array('default'=>''));
    $wp_customize->add_setting('rg_beneficio01_title', array('default'=>''));

    $wp_customize->add_setting('rg_beneficio02_url', array('default'=>''));
    $wp_customize->add_setting('rg_beneficio02_title', array('default'=>''));

    $wp_customize->add_setting('rg_beneficio03_url', array('default'=>''));
    $wp_customize->add_setting('rg_beneficio03_title', array('default'=>''));

    $wp_customize->add_setting('rg_beneficio04_url', array('default'=>''));
    $wp_customize->add_setting('rg_beneficio04_title', array('default'=>''));

    // Panel
    $wp_customize->add_panel('rg_beneficios', array(
        'title' => 'Benefícios',
        'priority' => '1'
    ));

    // Section
    $wp_customize->add_section('rg_beneficio01', array(
        'title' => 'Benefício 01',
        'priority' => '1',
        'panel' => 'rg_beneficios'
    ));

    $wp_customize->add_section('rg_beneficio02', array(
        'title' => 'Benefício 02',
        'priority' => '2',
        'panel' => 'rg_beneficios'
    ));

    $wp_customize->add_section('rg_beneficio03', array(
        'title' => 'Benefício 03',
        'priority' => '3',
        'panel' => 'rg_beneficios'
    ));

    $wp_customize->add_section('rg_beneficio04', array(
        'title' => 'Benefício 04',
        'priority' => '4',
        'panel' => 'rg_beneficios'
    ));

    // Controllers
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'rg_beneficio01_url',
            array(
                'label' => 'Ícone',
                'section' => 'rg_beneficio01',
                'settings' => 'rg_beneficio01_url'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'rg_beneficio01_title',
            array(
                'label' => 'Descrição',
                'section' => 'rg_beneficio01',
                'settings' => 'rg_beneficio01_title',
                'type' => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'rg_beneficio02_url',
            array(
                'label' => 'Ícone',
                'section' => 'rg_beneficio02',
                'settings' => 'rg_beneficio02_url'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'rg_beneficio02_title',
            array(
                'label' => 'Descrição',
                'section' => 'rg_beneficio02',
                'settings' => 'rg_beneficio02_title',
                'type' => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'rg_beneficio03_url',
            array(
                'label' => 'Ícone',
                'section' => 'rg_beneficio03',
                'settings' => 'rg_beneficio03_url'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'rg_beneficio03_title',
            array(
                'label' => 'Descrição',
                'section' => 'rg_beneficio03',
                'settings' => 'rg_beneficio03_title',
                'type' => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'rg_beneficio04_url',
            array(
                'label' => 'Ícone',
                'section' => 'rg_beneficio04',
                'settings' => 'rg_beneficio04_url'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'rg_beneficio04_title',
            array(
                'label' => 'Descrição',
                'section' => 'rg_beneficio04',
                'settings' => 'rg_beneficio04_title',
                'type' => 'text'
            )
        )
    );   
}