<?php
global $base_url;
global $default_img;

$image = $default_img;
if (isset($node->field_image['und'])) {
    $image = file_create_url($node->field_image['und'][0]['uri']);
}
?>

<li>
    <a href="<?php print $node_url; ?>" class="pic">
        <img src="<?php echo $image; ?>" width="482" height="210" alt="">
    </a>
    <div class="info">
        <h3><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
        <h4><?php print format_date($node->created, 'custom', 'd M Y'); ?></h4>
        <?php print $node->body['und'][0]['summary']; ?>
        <a href="<?php print $node_url; ?>" class="button"><?php print t('View More'); ?></a>
    </div>
</li>