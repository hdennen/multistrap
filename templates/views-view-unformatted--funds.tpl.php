<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' id="'. $id .'" class="anchor ' . $classes_array[$id] .' "';  } ?>>
  	<section class="container">
    	<?php print $row; ?>
    </section>
  </div>
<?php endforeach; ?>