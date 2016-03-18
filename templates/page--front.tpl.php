
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

    <section class="container_fluid">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
    </section>

<div class="main-container container_fluid">


       <?php /** if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  
    <?php endif; */?>


  <div class="container_fluid bar page_title_bar hidden">  <!-- page title container --> 
    <section class="container">
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
    </section>
  </div>
  <div id="content-bar" class="anchor container_fluid bar content_bar">  <!-- Main content container -->
    <section class="container">
      <?php /*if (!empty($breadcrumb)): print $breadcrumb; endif;*/?>
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
      <article class="front-hero">
        <div class="bg-fades tinted">
        <?php print render($page['content']); ?>
        </div>
      </article>
    </section>
  </div>
  <?php if (!empty($page['bar_1'])): ?>
    <div id="bar1" class="anchor container_fluid bar bar_1"> <!-- Bar 1 container -->
      <div class="container bar_1"><?php print render($page['bar_1']); ?></div>
    </div>
  <?php endif; ?>
  <?php if (!empty($page['bar_2'])): ?>
    <a class="indicator" href="#bar2">
      <span class="glyphicon glyphicon-circle-arrow-down"></span>
    </a>
    <div id="bar2" class="anchor container_fluid bar bar_2"> <!-- Bar 2 container -->
      <div class="container bar_2"><?php print render($page['bar_2']); ?></div>
    </div>
  <?php endif; ?>
  <?php if (!empty($page['bar_3'])): ?>
    <a class="indicator" href="#bar3">
      <span class="glyphicon glyphicon-circle-arrow-down"></span>
    </a>
    <div id="bar3" class="anchor container_fluid bar bar_3"> <!-- Bar 3 container -->
      <div class="container bar_3"><?php print render($page['bar_3']); ?></div>
    </div>
  <?php endif; ?>
  <?php if (!empty($page['postscript'])): ?>
    <div id="postscript" class="anchor container_fluid bar postscript"> <!-- Postscript container -->
      <div class="postscript"><?php print render($page['postscript']); ?></div>
    </div>
  <?php endif; ?>
  <?php if (!empty($page['postscript_2'])): ?>
    <div id="postscript2" class="anchor container_fluid bar postscript_2"> <!-- Postscript 2 container -->
      <div class="container postscript_2"><?php print render($page['postscript_2']); ?></div>
    </div>
  <?php endif; ?>

    <!--     <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside> 
    <?php endif; ?> -->
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