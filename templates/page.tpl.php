<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
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

<div class="main-container container_fluid">
  <div class="container">

  </div>
    <section class="container_fluid">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
    </section>
  <div id="title-bar" class="container_fluid bar page_title_bar">  <!-- page title container --> 
    <section class="container">
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
    </section>
  </div>
  <div class="container_fluid bar content_bar">  <!-- Main content container -->
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
                                      <!-- Content and sidebar regions -->
      <?php if (!empty($page['sidebar_first'])): ?>
        <aside id="sidebar-first" class="sidebar-first col-sm-4 col-sm-push-8" role="complementary">
          <?php print render($page['sidebar_first']); ?>
        </aside>  
      <?php endif; ?>
        <article class="col-sm-8 <?php if (!empty($page['sidebar_first'])): ?>col-sm-pull-4<?php endif; ?>">
          <?php print render($page['content']); ?>
        </article>
      <?php if (!empty($page['sidebar_second'])): ?>
        <aside id="sidebar-second" class="sidebar-second col-sm-4" role="complementary">
          <?php print render($page['sidebar_second']); ?>
        </aside> 
      <?php endif; ?>
    </section>
  </div>
  <?php if (!empty($page['bar_1'])): ?>
    <div id="bar-1" class="container_fluid bar bar_1"> <!-- Bar 3 container -->
      <div class="container bar_1"><?php print render($page['bar_1']); ?></div>
    </div>
  <?php endif; ?>
  <?php if (!empty($page['bar_2'])): ?>
    <div id="bar-2" class="container_fluid bar bar_2"> <!-- Bar 3 container -->
      <div class="container bar_2"><?php print render($page['bar_2']); ?></div>
    </div>
  <?php endif; ?>
  <?php if (!empty($page['bar_3'])): ?>
    <div id="bar-3" class="container_fluid bar bar_3"> <!-- Bar 3 container -->
      <div class="container bar_3"><?php print render($page['bar_3']); ?></div>
    </div>
  <?php endif; ?>
  <?php if (!empty($page['postscript'])): ?>
    <div id="postscript" class="container_fluid bar postscript"> <!-- postscript container -->
      <div class="postscript"><?php print render($page['postscript']); ?></div>
    </div>
  <?php endif; ?>
  <?php if (!empty($page['postscript_2'])): ?>
    <div id="postscript-2" class="container_fluid bar postscript_2"> <!-- Bar 3 container -->
      <div class="container postscript_2"><?php print render($page['postscript_2']); ?></div>
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