<?php
global $theme_root;
$image = $theme_root . '/img/samples/img_testimonials.png';
if (isset($node->field_image['und'])) {
    $image = file_create_url($node->field_image['und'][0]['uri']);
}
?>
<div>
    <img src="<?php echo $image; ?>" width="120" height="120" alt="">
    <h3><?php echo $node->field_testimonials_client['und'][0]['value']; ?><span><?php echo $node->field_regency['und'][0]['value']; ?></span></h3>
    <p><?php print strip_tags($node->body['und'][0]['summary']); ?></p>
</div>