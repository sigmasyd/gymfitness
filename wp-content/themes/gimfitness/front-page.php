<?php get_header('front'); ?>

<section class="bienvenida text-center seccion">
  <h2 class="text-primario"><?php the_field('encabezado_bienvenida');?></h2>
  <p><?php the_field('texto_bienvenida');?></p>
</section>

<section class="seccion-areas">
  <ul class="contenedor-areas">
    <li class="area">
      <?php
        $area1 = get_field("area_1");
        $imagen = wp_get_attachment_image_src($area1['imagen'],'mediano')[0];
      ?>
      <img src="<?php print esc_attr($imagen); ?>" alt="">
      <p><?php print esc_attr($area1['texto']); ?></p>
    </li>
    <li class="area">
      <?php
        $area2 = get_field("area_2");
        $imagen = wp_get_attachment_image_src($area2['imagen'],'mediano')[0];
      ?>
      <img src="<?php print esc_attr($imagen); ?>" alt="">
      <p><?php print esc_attr($area2['texto']); ?></p>
    </li>
    <li class="area">
      <?php
        $area3 = get_field("area_3");
        $imagen = wp_get_attachment_image_src($area3['imagen'],'mediano')[0];
      ?>
      <img src="<?php print esc_attr($imagen); ?>" alt="">
      <p><?php print esc_attr($area3['texto']); ?></p>
    </li>
    <li class="area">
      <?php
        $area4 = get_field("area_4");
        $imagen = wp_get_attachment_image_src($area4['imagen'],'mediano')[0];
      ?>
      <img src="<?php print esc_attr($imagen); ?>" alt="">
      <p><?php print esc_attr($area4['texto']); ?></p>
    </li>
  </ul>
</section>

<?php get_footer(); ?>