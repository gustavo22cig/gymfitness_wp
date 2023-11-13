<?php
//activar Agregar Imagen(btn Añadir medios)
function gymfitness_setup(){

    //Imagenes destacadas
    add_theme_support('post-thumbnails');

    //titulos para SEO
    add_theme_support('title-tag');
}
add_action('after_setup_theme','gymfitness_setup');

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
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style',get_stylesheet_uri(), array('normalize'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');