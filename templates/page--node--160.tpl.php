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
         <?php if (!empty($page['header_left'])): ?>
         <?php print render($page['header_left']);?>
         <?php endif; ?>
         <?php if (!empty($page['header_right'])): ?>
         <?php print render($page['header_right']);?>
         <?php endif; ?>
		
	</nav>

</div>

</div>
<!--   End of Header and Nav-->

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
    <?php if (!empty($page['highlighted'])): ?>
      <div class="highlight" style="position: relative">
        <?php print render($page['highlighted']); ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($tabs)): ?>
      <?php print render($tabs); ?>
      <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
    <?php endif; ?>

    <?php if ($action_links): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
    <?php endif; ?>


    <?php print "
    <a id='main-content'></a>
       <div class='row'>
         <div class='large-9 columns push-3'>
           <div class='row'>
             <div class='large-12 columns'> ";
                if ($breadcrumb)
                print $breadcrumb;
             print "
             </div>";
             print "<article class='large-8 columns'>
               <h1>" . $title ."</h1>";
                 if (!empty($page['content_pre'])) {
                    print "<div class='precontent'>";
                        print render($page['content_pre']); 
                    print "</div>";
                 }
                 if (!empty($page['content_bosted'])) {
                    print "<div class='contentbosted'>";
                        print render($page['content_bosted']); 
                    print "</div>";
                 }

            print "
            </article>
            <aside class='large-4 columns'>";
                 if (!empty($page['sidebar_second'])) {
                    print "<div id='sidebar-second' class= 'columns '>";
                      print render($page['sidebar_second']);
                    print "</div>";
                }
            print "
            </aside>
          </div>
        </div>
        <div class='large-3 columns pull-9 leftside'>
          <div class='sideWrapper'>";
            if (!empty($page['sidebar_first'])) {
                print "<div class='sideMenuHolder blueGradient gradient'>";
               
                  print render($page['sidebar_first']);
                  print "</div>";
            }
            print "
          </div>
        </div>
      </div>";?>

    <?php 
                 if (!empty($page['content_video'])) {
                    print "<div class='contentvideo'>";
                        print render($page['content_video']); 
                    print "</div>";
                 }
                 if (!empty($page['content_amba'])) {
                    print "<div class='contentamba'>";
                        print render($page['content_amba']); 
                    print "</div>";
                 }
                 print render($page['content']);
  ?>
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
