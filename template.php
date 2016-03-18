<?php

/**
 * @file
 * template.php
 */

?>
<?php
function bootstrap_multilect_preprocess_page(&$variables, $hook) {
      //add news class
      //$vars['navbar_classes_array'][] = 'new-class';
      //remove class
      unset($variables['navbar_classes_array'][1]);
      // you need change value 0 to value you want remove class
      // Default
      // 0  'navbar', 1 => 'container', 2 => 'navbar-default'

      // Override the page template for articles
      if (isset($variables['node']->type)) {
      // If the content type's machine name is "my_machine_name" the file
      // name will be "page--my-machine-name.tpl.php".
      $variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->type;
    }


}
function bootstrap_multilect_menu_tree__primary($variables) {
  return '<ul class="menu nav navbar-nav nav-justified">' . $variables['tree'] . '</ul>';
}
function bootstrap_multilect_preprocess_region(&$variables, $hook) {
	$region = $variables['region'];
  if ($region !== 'navigation' && $region !== 'content' && $region !== 'highlighted' && $region !== 'sidebar_second' && $region !== 'sidebar_first') {
    $variables['classes_array'][] = 'container';
  }
}
/**
 * Overrides theme_menu_link().
 */
function bootstrap_multilect_menu_link(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    // Prevent dropdown functions from being added to management menu so it
    // does not affect the navbar module.
    if (($element['#original_link']['menu_name'] == 'management') && (module_exists('navbar'))) {
      $sub_menu = drupal_render($element['#below']);
    }
    elseif ((!empty($element['#original_link']['depth'])) && ($element['#original_link']['depth'] == 1)) {
      // Add our own wrapper.
      unset($element['#below']['#theme_wrappers']);
      $sub_menu = '<ul class="dropdown-menu nav-justified">' . drupal_render($element['#below']) . '</ul>';
      // Generate as standard dropdown.
      $element['#title'] .= ' <span class="caret"></span>';
      $element['#attributes']['class'][] = 'dropdown';
      $element['#localized_options']['html'] = TRUE;

      // Set dropdown trigger element to # to prevent inadvertant page loading
      // when a submenu link is clicked.
      $element['#localized_options']['attributes']['data-target'] = '#';
      $element['#localized_options']['attributes']['class'][] = 'dropdown-toggle';
      $element['#localized_options']['attributes']['data-toggle'] = 'dropdown';
    }
  }
  // On primary navigation menu, class 'active' is not set on active menu item.
  // @see https://drupal.org/node/1896674
  if (($element['#href'] == $_GET['q'] || ($element['#href'] == '<front>' && drupal_is_front_page())) && (empty($element['#localized_options']['language']))) {
    $element['#attributes']['class'][] = 'active';
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}
// to add field values as classes
function bootstrap_multilect_preprocess_node (&$variables) {
  /*$node = $variables["node"];

  if (isset($node->field_age_bracket["und"][0]["taxonomy_term"])) {
    foreach ($node->field_age_bracket["und"] as $foo) {
      $term = $foo["taxonomy_term"];
      $variables["classes_array"][] = "term-" . str_replace(" ", "-", strtolower($term->name));
    }
  }*/
    if ($variables['node'] == 'article') {
    $field_items = field_get_items('node', $variables['node'], 'field_age_bracket');
    $first_item = array_shift($field_items);

    $value = $first_item['value'];

/*     If you want to write <div class="<?php echo $extra_class; ?>">... in your template file:
    $vars['extra_class'] = $value;*/

    /* Or if you want to add this to the classes on the main node <div>:*/
    $vars['classes_array'][] = $value;
  }
}


?>
