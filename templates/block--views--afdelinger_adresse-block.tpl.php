<?php

/**
 * @file
 * Default theme implementation to display a block.
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see template_process()
 */
?>
<?php if ($block_html_id == "block-views-ambassadors-list-block") 
       { $block_html_id ="ambassadors-slider";}
      elseif ($block_html_id == "block-views-213d0774ea002059277369a863e19294") {
        $block_html_id = "carousel";
      }
      elseif ( $block_html_id == "block-views-637a0364adff55868c96664f44384ae8") {
        $block_html_id ="pictures";
      } 
      elseif ($block_html_id =="block-views-carousel-of-video-block"){
        $block_html_id = "pictures-carousel";
      }
      elseif ($block_html_id =='block-views-video-block-block-2' || $block_html_id =='block-views-video-block-block-3' || $block_html_id =='block-views-video-block-block-4') {
        $block_html_id ="vision";
      }

 ?>

<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php //if ($block_id): ?>
  
  <?php print render($title_prefix); ?>
  <?php if ($block->subject): ?>
    <h2<?php print $title_attributes; ?>><?php print $block->subject; ?></h2>
  <?php endif;?>
  <?php print render($title_suffix); ?>

  <?php //print $content ?>
 <section class="section-map">
  <span class="sectionShadow"></span>
  <div id="googleMap">
    <?php //if (!empty($content['field_adresse'])):?>
         <?php print $content; ?>
    <?php //endif;?>
    <?php
      $url = current_path();
      $url = explode('/',$url);
      $node = node_load($url[1]);
      $shopping_s = "1 km";
      $transport_s = "100 m";
      $green_s = "300 m";
      if($shopping = field_get_items('node',$node, 'field_afstand_til_shopping')) {
        $shopping_s = $shopping[0]['value'];
      }
      if ($transport = field_get_items('node',$node, 'field_afstand_til_off_transport')) {
        $transport_s = $transport[0]['value'];
      }
      if ($green = field_get_items('node',$node, 'field_afstand_til_groen')) {
        $green_s = $green[0]['value'];
      }
    ?>
  </div>
  <div class="mapDetails greenGradient">
    <div class="row">
      <div class="large-3 small-12 columns">
        <p class="map-shopping">Afstand til indkø: <?php print $shopping_s ; ?></p>
      </div>
      <div class="large-3 small-12 columns">
        <p class="map-transportation">Afstand til off. transport: <?php print $transport_s; ?></p>
      </div>
      <div class="large-6 small-12 columns">
         <p class="map-tree">Afstand til grønne områd: <?php print $green_s;  ?></p>
      </div>
    </div>
   </div>
</section>
  
</div> <!-- /.block -->

