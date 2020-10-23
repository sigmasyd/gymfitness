<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class($class); ?>>
  <header class="site-header">
    <div class="contenedor header-grid">
      <div class="barra-navegacion">
        <div class="logo">
          <img src="<?php print get_template_directory_uri(); ?>/img/logo.svg" alt="Logo sitio">
        </div>
        <?php 
          $args = array(
            'theme_location' => 'menu-principal',
            'container' => 'nav',
            'container_class' => 'menu-principal'
          );
          wp_nav_menu($args);
        ?>
      </div><!-- .barra-navegacion-->
      <div class="tagline text-center">
        <h1><?php the_field('encabezado_hero'); ?></h1>
        <p><?php the_field('contenido_hero'); ?></p>
      </div>
    </div>
  </header>