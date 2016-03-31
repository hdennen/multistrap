
<!-- Branding begins Deleted secondary nav from here, my account and logout links unnecessary. -->
    <?php print $messages; ?>
    <?php print render($page['header']); ?>
<div id="branding" class="anchor container_fluid bar bar-branding">
  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6">
        <?php if ($logo): ?>
          <a class="logo navbar-btn" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
           <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>
        <?php if (!empty($site_slogan)): ?>
          <h3 class="lead"><?php print $site_slogan; ?></h3>
        <?php endif; ?>
        </div>
      <?php if (!empty($page['navigation'])): ?>
        <div class="col-xs-12 col-md-6">
          <?php print render($page['navigation']); ?> <!-- search bar -->
          <div class="btn member-login">
            <a href="https://online.multilect.co.za/"><span class="glyphicon glyphicon-user"></span>Member Login</a>
          </div>
        </div>
      <?php endif; ?>
    </div>
    <div class="row">
      <header role="banner" id="page-header">

      </header> <!-- page-header -->
    </div>

  </div>
</div>  

<!-- navigation begins -->


<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="container-full">

      
    <div class="navbar-header">
      
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>

        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>

<!-- Below here page default -->


    <?php /** if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  
    <?php endif; */?>

    <section class="container_fluid">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
    </section>
  <div class="container_fluid bar page_title_bar">  <!-- page title container --> 
    <section class="container">
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <div class="strapline">
      <?php
       // First check that the $node variable is not empty (prevents errors on pages that don't have the $node variable e.g. pages created with Views)
      if (!empty($node)) :
          // call the field from the node 
          $fieldExample = field_get_items('node', $node, 'field_strapline'); 
          // now check if there is anything in the variable $fieldExample  
          if ($fieldExample):
              // $fieldExample will be an array, so to figure out what element from the array you can initially use print_r ($fieldExample);
              // In the case of a single line text field, you can print that array element using the code below (where [0] is the first row of the array)
               print $fieldExample[0]['value']; 
          endif; 
      endif; 
      ?>
      </div>

      <?php print render($title_suffix); ?>
    </section>
  </div>
  <div class="container_fluid bar content_bar">  <!-- Main content container -->
    <section class="container">
      <a id="main-content"></a>
    </section>
    <section class="container">

      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <article class="col-sm-8">
        <?php print render($page['content']); ?>
        <?php $block = block_load('block', '19');
$output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
print $output; ?>
      </article>
      <?php if (!empty($page['sidebar_second'])): ?>
        <aside class="sidebar-second col-sm-4" role="complementary">
          <?php print render($page['sidebar_second']); ?>
        </aside> 
      <?php endif; ?>
    </section>
  </div>
  <?php if (!empty($page['bar_1'])): ?>
    <div class="container_fluid bar bar_1"> <!-- Bar 3 container -->
      <div class="container bar_1"><?php print render($page['bar_1']); ?></div>
    </div>
  <?php endif; ?>
  <?php if (!empty($page['bar_2'])): ?>
    <div class="container_fluid bar bar_2"> <!-- Bar 3 container -->
      <div class="container bar_2"><?php print render($page['bar_2']); ?></div>
    </div>
  <?php endif; ?>
  <?php if (!empty($page['bar_3'])): ?>
    <div class="container_fluid bar bar_3"> <!-- Bar 3 container -->
      <div class="container bar_3"><?php print render($page['bar_3']); ?></div>
    </div>
  <?php endif; ?>
  <?php if (!empty($page['postscript'])): ?>
    <div class="container_fluid bar postscript"> <!-- Bar 3 container -->
      <div class="postscript"><?php print render($page['postscript']); ?></div>
    </div>
  <?php endif; ?>


</div>
<div class="container_fluid footer_containers">
<footer class="footer container">
  <?php print render($page['footer']); ?>
  <?php print render($page['bottom']); ?>
</footer>
</div>
<div id="page-up" class="page-nav smoothscroll">
  <a id="previous" title="click to scroll to top of page" class="previous" href="#branding"><span class="previous glyphicon glyphicon-upload"></span></a>
</div>