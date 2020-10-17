<?php
  /** Consulstas reutilizables */
  require get_template_directory() . '/inc/queries.php';
  
  // Cuando el tema es activado
  function gymfitness_setup(){
    // Habilitar imagenes destacadas
    add_theme_support( 'post-thumbnails' );

    // Agregar custom imagenes sizes
    add_image_size('square',350,350,true);
    add_image_size('portrait',350,724,true);
    add_image_size('cajas',400,375,true);
    add_image_size('mediano',700,400,true);
    add_image_size('blog',966,644,true);
  }
  add_action("after_setup_theme",'gymfitness_setup');

  // Menus de navegacion
  function gymfitness_menus(){
    register_nav_menus([
      'menu-principal' => __('Menu Principal', 'gymfitness')
    ]);
  }

  add_action('init', 'gymfitness_menus');

  //scripts y styles
  function gymfitness_scripts_styles(){
    // hoja de estilos principal
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', [], '8.0.1');
    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', [], '1.0.10');
    wp_enqueue_style('googleFont', "https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap", [], '1.0.0');
    wp_enqueue_style('style', get_stylesheet_uri(), ['normalize','googleFont'], '1.0.0');

    wp_enqueue_script("slicknavJS", get_template_directory_uri() . '/js/jquery.slicknav.min.js', ['jquery'], '1.0.10',true);
    wp_enqueue_script("scripts", get_template_directory_uri() . '/js/scripts.js', ['jquery','slicknavJS'], '1.0.0',true);
  }
  add_action('wp_enqueue_scripts','gymfitness_scripts_styles');

