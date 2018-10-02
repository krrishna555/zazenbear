 <?php foreach ($rows as $row_number => $columns): ?>
      <div class="row" <?php if ($row_classes[$row_number]) { print 'class="' . $row_classes[$row_number] .'"';  } ?>>
        <?php foreach ($columns as $column_number => $item): ?>
          <?php if ($column_classes[$row_number][$column_number]) { print 'class="' . $column_classes[$row_number][$column_number] .'"';  } ?>
            <?php print $item; ?>
        <?php endforeach; ?>
     </div>
    <?php endforeach; ?>
