<?php
/*
 * @see template_preprocess_block()
 * @see template_process()
 *
 * block-views-reports-block
 */
?>


<section id="filter-reports" class="<?php print $classes; ?> section-reports-filter"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
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
 
        <p style="padding-top: 13px;  margin-bottom: 0;" class="right"><a href="<?php print $link_r; ?>">Se flere beretninger</a></p>

       </div>
     </div>
  <?php print render($title_suffix); ?>
</section>
<section class="section-reports">
  <?php print $content ?>
</section> <!-- /view block--views--3bfb6046aa642b60eb38945b27d507a8.tpl.php -->
 

  
    





  





