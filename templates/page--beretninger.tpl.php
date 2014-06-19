<!-- Header and Nav -->

<div class="row top">
<div class="large-3 small-8 columns logo">
  <?php if ($linked_logo): ?>
        <?php print $linked_logo; ?>
  <?php endif; ?>
</div>
<div class="large-12 small-4 columns show-for-small">
	<img id="menuIcon" alt="menu" src="/sites/all/themes/campo_foundation/img/reorder.png">
	<img id="searchIcon" alt="search" src="/sites/all/themes/campo_foundation/img/search.png">
</div>
<div id="searchBox" class="large-3 push-6 columns">

    <?php if (!empty($page['header'])): ?>
      <?php print render($page['header']);?>
    <?php endif; ?>

</div>

<div class="large-6 pull-3 columns">

	<nav id="navTop">

	 <?php if ($main_menu_links) :?>
     	   <?php print $main_menu_links; ?>
   	 <?php endif; ?>
		
	</nav>
</div>

</div>

<div class="row">
  <div class="<?php $site_slogan ? print 'large-6' : print 'small-4 large-4 columns large-offset-8'; ?> columns hide-for-small">
  </div>
  <?php if ($site_slogan): ?>
    <div class="large-12 columns hide-for-small">
      <h2><?php print $site_slogan; ?></h2>
    </div>
  <?php endif; ?>
</div>

  <?php if ($messages): print $messages; endif; ?>
  <?php if (!empty($page['help'])): print render($page['help']); endif; ?>
  <div id="main" class="<?php //print $main_grid; ?>">
    <a id="main-content"></a>
<section id="filter-reports" class="<?php print $classes; ?> section-reports-filter"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
  <span class="sectionShadow"></span>
     <div class="row">
      <div class="large-8 columns">
      <?php
        $url = current_path();
        $url = explode('/',$url);
        if(isset($url[1]) && is_numeric($url[1])) {
          $tid = $url[1];
          $term = taxonomy_term_load($tid);
          $h2_title = 'Beretninger fra ' . $term->name;
        }
        else {
          $h2_title = 'Beretninger fra Hverdagen';
        }
        print '
        <h2 class="block-title"> '.$h2_title.' </h2>';
      ?>

      </div>
      <div class="large-3 columns">

        <p style="padding-top: 13px;  margin-bottom: 0;" class="right"><a href="/beretninger/alle">Se flere beretninger</a></p>

      </div>

    </div>
  <?php endif;?>
  <?php print render($title_suffix); ?>
</section>
<section class="section-reports">
<div class="row">
  <?php print render($page['content_pre']);//$content ?>
</div>
</section> 
  </div>
<?php if (!empty($page['footer_first']) || !empty($page['footer_middle']) || !empty($page['footer_last'])): ?>
<footer>
   <div class="row">
    <?php if (!empty($page['footer_first'])): ?>
      <div id="footer-first" class="large-6 columns">
        <?php print render($page['footer_first']); ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($page['footer_middle'])): ?>
      <div id="footer-middle" class="large-3 columns">
        <?php print render($page['footer_middle']); ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($page['footer_last'])): ?>
      <div id="footer-last" class="large-3 columns">
        <?php print render($page['footer_last']); ?>
      </div>
    <?php endif; ?>
  </div>
</footer>
    <?php if (!empty($page['video_bottom'])): ?>
        <?php print render($page['video_bottom']); ?>
    <?php endif; ?>
<?php endif; ?>
