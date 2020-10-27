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

  <section class="clases">
    <div class="contenedor seccion">
      <h2 class="text-center text-primario">Nuestras Clases</h2>
      <?php gymfitness_lista_clases(4); ?>
      <div class="contenedor-boton">
        <a href="<?php print esc_url(get_permalink(get_page_by_title('Nuestras clases'))); ?>" class="boton boton-primario">Ver todas las clases</a>
      </div>
    </div>
  </section>

  <section class="instructores">
    <div class="contenedor seccion">
      <h2 class="text-center texto-primario">Nuestros Instructores</h2>
      <p class="text-center">Instructores profesionales que te ayudarán a lograr tus objetivos</p>
      <ul class="listado-instructores">
      <?php
        $args = [
          'post_type' => 'instructores',
          'posts_per_page' => 30
        ];
        $instructores = new WP_Query($args);
        while($instructores->have_posts()): $instructores->the_post();
      ?>
        <li class="instructor">
          <?php the_post_thumbnail('mediano'); ?>
          <div class="contenido text-center">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
            <div class="especialidad">
            <?php 
              $esp = get_field('especialidad');
              foreach($esp as $e):
            ?>
              <span class="etiqueta"><?php print esc_html( $e ); ?></span>
            <?php endforeach; ?>
            </div>
          </div>
        </li>
      <?php endwhile; wp_reset_postdata(); ?>
      </ul>
    </div>
  </section>

  <section class="testimoniales">
    <h2 class="text-center texto-blanco">Testimoniales</h2>
    <div class="contenedor-testimoniales">
      <ul class="listado-testimoniales">
      <?php
        $args = [
          'post_type' => 'testimoniales',
          'post_per_page' => 10,
        ];
        $testimoniales = new WP_Query($args);
        while($testimoniales->have_posts()): $testimoniales->the_post();
      ?>
        <li class="testimonial text-center">
          <blockquote>
            <?php the_content(); ?>
          </blockquote>
          <footer class="testimonial-footer">
            <?php the_post_thumbnail('thumbnail'); ?>
            <p><?php the_title(); ?></p>
          </footer>
        </li>
      <?php endwhile; wp_reset_postdata(); ?>
      </ul>
    </div>
  </section>

  <section class="blog contenedor seccion">
    <h2 class="text-center texto-primario">Nuestro Blog</h2>
    <p class="text-center">Aprende tips de nuestros instructores expertos</p>
    <ul class="listado-blog">
    <?php
      $args = [
        'post_type' => 'post',
        'post_per_page' => 4,
      ];
      $blog = new Wp_Query($args);
      while($blog->have_posts()): $blog->the_post();
        get_template_part('template-parts/loop','blog');
      endwhile; wp_reset_postdata(); 
    ?>
    </ul>
  </section>
<?php get_footer(); ?>