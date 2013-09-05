<!-- Header and Nav -->

<div class="row top">
<div class="large-3 small-12 columns logo">
  <?php /*if ($linked_logo): ?>
        <?php print $linked_logo; ?>
  <?php endif;*/ ?>
  <a title="" href="#">
    <img alt="Logo" src="/sites/all/themes/campo_foundation/img/center_campo_kysten.svg">
  </a>
</div>
<div class="large-12 small-12 columns show-for-small">
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
      <?php /* if ($logged_in): ?>
      <ul class="inline-list right">
        <li><?php print l(t('My Account'), 'user'); ?></li>
        <li><?php print l(t('Logout'), 'user/logout'); ?></li>
      </ul>
      <?php else:*/ ?>
        <?php /* print l(t('Login'), 'user/login', array('attributes' => array('class' => array('large', 'radius', 'button')))); ?>
        <?php print l(t('Sign Up'), 'user/register', array('attributes' => array('class' => array('large', 'radius', 'success', 'button')))); ?>
      <?php endif; */ ?>
  </div>
  <?php if ($site_slogan): ?>
    <div class="large-12 columns hide-for-small">
      <h2><?php print $site_slogan; ?></h2>
    </div>
  <?php endif; ?>
  <div class="show-for-small">
   <!-- <div class="large-6 small-2 columns">
      <p><?php /*print l(t('Login'), 'user/login', array('attributes'
    => array('class' => array('radius', 'button', 'small'))));*/?></p>
    </div>
    <div class="large-6 small-2 columns">
      <p><?php /*print l(t('Sign Up'), 'user/register', array('attributes' => array('class' => array('radius', 'success', 'button'))));*/ ?></p>
    </div> -->
  </div>
</div>

  <?php if ($messages): print $messages; endif; ?>
  <?php if (!empty($page['help'])): print render($page['help']); endif; ?>
  <div id="main" class="<?php print $main_grid; ?> columns">
     <?php if (!empty($tabs)): ?>
      <?php print render($tabs); ?>
      <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
    <?php endif; ?>

    <?php if ($action_links): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
    <?php endif; ?>

    <?php if (!empty($page['highlighted'])): ?>
      <div class="highlight">
        <?php print render($page['highlighted']); ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($page['content_pre'])): ?>
      <div class="precontent">
        <?php print render($page['content_pre']); ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($page['content_bosted'])): ?>
      <div class="contentbosted">
        <?php print render($page['content_bosted']); ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($page['content_video'])): ?>
      <div class="contentvidoe">
        <?php print render($page['content_video']); ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($page['content_amba'])): ?>
      <div class="contentamba">
        <?php print render($page['content_amba']); ?>
      </div>
    <?php endif; ?>
    <a id="main-content"></a>

     <?php print render($page['content']); ?>
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
