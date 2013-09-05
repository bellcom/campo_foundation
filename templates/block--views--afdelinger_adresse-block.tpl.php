<?php

/**
 * @file
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - $block->subject: Block title.
 * - $content: Block content.
 * - $block->module: Module that generated the block.
 * - $block->delta: An ID for the block, unique within each module.
 * - $block->region: The block region embedding the current block.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - block: The current template type, i.e., "theming hook".
 *   - block-[module]: The module generating the block. For example, the user module
 *     is responsible for handling the default user navigation block. In that case
 *     the class would be "block-user".
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $block_id: Counter dependent on each block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $block_html_id: A valid HTML ID and guaranteed unique.
 *
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

  </div>
  <div class="mapDetails greenGradient">
    <div class="row">
      <div class="large-3 small-12 columns">
        <p class="map-shopping">Afstand til indkøb: 1 km</p>
      </div>
      <div class="large-3 small-12 columns">
        <p class="map-transportation">Afstand til off. transport: 100 m</p>
      </div>
      <div class="large-6 small-12 columns">
         <p class="map-tree">Afstand til grønne områder 300 m</p>
      </div>
    </div>
   </div>
</section>
  
</div> <!-- /.block -->

