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
        <img src="<?php echo $image; ?>" width="1030" height="310" alt="">
        <i class="fa fa-camera-retro"></i>
    </a>
    <h3><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
    <div class="info">
        <div><i class="fa fa-comment-o"></i><span><?php print $comment_count; ?> <?php print t('comments'); ?></span></div>
        <div><i class="fa fa-user"></i><?php print str_replace('xml:lang=""', '', $name); ?></div>
        <div><i class="fa fa-calendar"></i><?php print format_date($node->created, 'custom', 'd F Y'); ?></div>
    </div>
    <?php print $node->body['und'][0]['summary']; ?>
</li>
