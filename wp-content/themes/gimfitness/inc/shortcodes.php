<?php
  function gymfitness_ubicacion_shortcode($atts){
    $ubicacion = get_field("ubicacion");
?>
    <div class="ubicacion">
      <input type="hidden" id="lat" value="<?php print $ubicacion['lat']; ?>" />
      <input type="hidden" id="lng" value="<?php print $ubicacion['lng']; ?>" />
      <input type="hidden" id="direccion" value="<?php print $ubicacion['address']; ?>" />
      <div id="mapa"></div>
    </div>
<?php
  }

  add_shortcode( "gymfitness_ubicacion", "gymfitness_ubicacion_shortcode" );