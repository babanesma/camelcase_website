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
        <img src="<?php echo $image; ?>" width="370" height="200" alt="">
        <div class="info">
            <div class="date"><?php print format_date($node->created, 'custom', 'd, M Y'); ?></div>
            <div class="comments"><span><?php print $comment_count; ?></span><?php if($comment_count==0): ?><?php print t('Comment'); ?><?php else: ?><?php print t('Comments'); ?><?php endif; ?></div>
        </div>
    </a>
    <h3><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
    <h4><?php print t('Posted by'); ?> <?php print str_replace('xml:lang=""', '', $name); ?></h4>
    <?php print $node->body['und'][0]['summary']; ?>
    <p><a href="<?php print $node_url; ?>"><?php print t('Read More...'); ?></a></p>
</li>

