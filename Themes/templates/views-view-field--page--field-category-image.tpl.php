<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>
<?php


$ifid=$row->field_field_category_image[0][raw][fid];
$imgpath = file_load($ifid)->uri;
$imageurl= file_create_url($imgpath);
/*$color = $row->field_title_color[und][0][value];
print_r($row);

 */
?>

 
<div id ="<?php print $row->node_title;?>"class="productcategories" style="background-image: url('<?php print $imageurl;?>')">
<div class="productcategoriesimage" >





