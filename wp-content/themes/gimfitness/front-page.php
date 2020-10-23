<?php get_header('front'); ?>

<section class="bienvenida text-center seccion">
  <h2 class="text-primario"><?php the_field('encabezado_bienvenida');?></h2>
  <p><?php the_field('texto_bienvenida');?></p>
</section>

<?php get_footer(); ?>