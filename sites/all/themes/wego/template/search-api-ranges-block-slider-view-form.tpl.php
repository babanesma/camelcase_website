<?php
/**
 * @file search-api-ranges-block-slider-view-form.tpl.php
 * Contour's custom template to render the search api ranges block.
 */
?>


<div class="yui3-g">
  <div class="yui3-u range-box range-box-left">
    <?php print drupal_render($form['range-from']); ?>
  </div>
   <div class="yui3-u range-box range-box-right">
    <?php print drupal_render($form['range-to']); ?>
  </div>
  
  <div class="clearfix"></div>
  <div class="yui3-u range-slider-box">
    <?php print drupal_render($form['range-slider']); ?>
  </div>
 
</div>
<?php print drupal_render($form['submit']); ?>
<?php print drupal_render($form['text-range']); ?>
<?php
  // Render required hidden fields.
  print drupal_render_children($form);
?>