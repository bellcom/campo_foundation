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
 *
 * block-views-reports-block
 */
?>


<section id="filter-reports" class="<?php print $classes; ?> section-reports-filter"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($block->subject): ?>
  <span class="sectionShadow"></span>
     <div class="row">
      <div class="large-8 columns">
      <?php
        $url = current_path();
        $url = explode('/',$url);
        $node = node_load($url[1]);
        if(isset($node->field_tags['und'])) {
          $tid = $node->field_tags['und'][0]['tid'];
          $term = taxonomy_term_load($tid);
          $h2_title = 'Beretninger fra ' . $term->name;
          $link_r = '/beretninger/'. $tid;
        }
        else {
          $h2_title = 'Beretninger fra Hverdagen';
          $link_r = '/beretninger/alle';
        }
        print '
        <h2 class="block-title"> '.$h2_title.' </h2>';
      ?>
      </div>
      <div class="large-3 columns">
 
        <p style="padding-top: 13px;  margin-bottom: 0;" class="right"><a href="<?php print $link_r;?>">Se flere beretninger</a></p>

       </div>
     </div>
  <?php endif;?>
  <?php print render($title_suffix); ?>
</section>
<section class="section-reports">
  <?php print $content ?>
</section> <!-- /view block--views--3bfb6046aa642b60eb38945b27d507a8.tpl.php -->
 

  
    





  





