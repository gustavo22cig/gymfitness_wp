<?php

// Agregar menus
function gymfitness_manus(){
    register_nav_menus( array(
        'menu-principal'=> __('Menu Principal','gymfitness')
    ));
}

add_action('init', 'gymfitness_manus');

//----------------------
// Agrrgar hoja de estilos
//-----------------------
function gymfitness_scripts_styles(){

    //definimos el nombre, ubicacion, dependencias, actualizar la version que se encuentra en la cache
    wp_enqueue_style('style',get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');