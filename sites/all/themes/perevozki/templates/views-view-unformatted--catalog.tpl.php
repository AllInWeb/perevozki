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
<?php $i=0; foreach ($rows as $id => $row): $i++; ?>
    <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .' float"';  } ?>>
        <?php print $row; ?>
    </div>

    <?php if (!($i % 2)): ?>
        <div class="clr"></div>
    <?php endif ?>
<?php endforeach; ?>