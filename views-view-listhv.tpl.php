<?php
/**
 * @file
 *  Display content in list which can run either Horizontally or Vertically over multiple columns
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 * - $columns contains a nested array of columns. Each column contains an
 *   array of columns.
 *
 * @ingroup views_templates
 */
?>
  
<?php $classes; ?>
<?php if ($options['alignment'] == 'vertical') : ?>
<?php foreach ($columns as $column_id => $column) : ?>
  <ul class="<?php print trim($column_classes[$column_id]); ?>">
  <?php foreach ($column as $item_id => $item) : ?>
  <li class="<?php print trim($item['classes']); ?>">
      <?php print $item['content']; ?></li>
  <?php endforeach; ?>
  </ul>
<?php endforeach; ?>

<?php else : ?>
  <?php foreach ($rows as $row_id => $row) : ?>
    <ul class="<?php print trim($row_classes[$row_id]); ?>">
  <?php foreach ($row as $item_id => $item) : ?>
    <li class="<?php print trim($item['classes']); ?>">
      <?php print $item['content']; ?></li>
  <?php endforeach; ?>
  </ul>
  <?php endforeach; ?>
<?php endif; 