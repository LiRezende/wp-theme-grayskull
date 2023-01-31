<?php
require get_template_directory().'/include/customizer/social.php';
require get_template_directory().'/include/customizer/beneficios.php';

function rg_customize_register($wp_customize) {
    rg_social_customize($wp_customize);
    rg_beneficios_customize($wp_customize);
}