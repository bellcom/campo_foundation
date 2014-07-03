<?php

/**
 * @file
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
      <div id="featured-text">
              <?php print $content ?>
       </div>
      </div>
    </div>
  </div>
</div> <!-- /.block -->

