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
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($block->subject): ?>
    <h2<?php print $title_attributes; ?>><?php print $block->subject; ?></h2>
  <?php endif;?>
  <?php print render($title_suffix); ?>
  <div id="slider-topbox">
    <div class="row">
      <div class="large-12 columns blueGradient gradient">
<?php /*        <div class="row slider-topbox-content">
          <div class="large-8 columns ">
            <div id="featured-text"> */ ?>
              <?php print $content ?>
 <?php /*          </div> 
          </div>
          <div class="large-4 columns">
            <p>(File: block--views--flex_text_slideshow-block.tpl.php): Denne tekst er hardcoded inde i filen og tilpasset til &quot;Forsiden&quot;. Hvis ikke teksten skal være hardcoded, så skal den hentes med variable_get()-funktionen og der skal laves et interface til at redigere teksten (hvor Gem-knappen bruger variable_set()-funktionen).<br /><br />
            <a href="/botilbud" title="">Se mere om muligheder i CenterCampo</a></p>
          </div>
        </div> */ ?>
      </div>
    </div>
  </div>
</div> <!-- /.block -->

<?php /*if ($block->delta != 'main'):  ?>
  <div class="<?php print $classes; ?>"<?php print $attributes; ?>>
<?php endif; ?>

  <?php print render($title_prefix); ?>
  <?php if ($block->subject): ?>
    <h2<?php print $title_attributes; ?>><?php print $block->subject ?></h2>
  <?php endif;?>
  <?php print render($title_suffix); ?>

  <?php !empty($content_attributes) ? print '<div ' .  $content_attributes . '>' : ''; ?>
    <?php print $content ?>
  <?php !empty($content_attributes) ? print '</div>' : ''; ?>

<?php $block->delta != 'main' ? print '</div>' : '';*/ ?>
