<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>
  <header class="site-header">
    <div class="contenedor">
      <div class="barra-navegacion">
        <div class="logo">
          <a href="<?php print site_url(); ?>">
            <img src="<?php print get_template_directory_uri(); ?>/img/logo.svg" alt="Logo sitio">
          </a>
        </div>
        <?php 
          $args = array(
            'theme_location' => 'menu-principal',
            'container' => 'nav',
            'container_class' => 'menu-principal'
          );
          wp_nav_menu($args);
        ?>
      </div>
    </div>
  </header>