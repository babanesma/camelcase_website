<?php
global $base_url;
global $default_img;

$image = $default_img;
if (isset($node->field_image['und'])) {
    $image = file_create_url($node->field_image['und'][0]['uri']);
}
?>
<li>
    <div class="pic">
        <img src="<?php echo $image; ?>" width="370" height="200" alt="">
        <a href="<?php print $node_url; ?>" class="link"></a>
        <div class="date"><div><?php print format_date($node->created, 'custom', 'd'); ?><span><?php print format_date($node->created, 'custom', 'M'); ?></span></div></div>
        <a href="<?php echo $image; ?>" rel="fancybox" class="fancybox zoom"><i class="fa fa-search-plus"></i></a>
    </div>
    <h3><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
    <div class="author"><?php print t('by'); ?> <?php print str_replace('xml:lang=""', '', $name); ?></div>
    <?php print $node->body['und'][0]['summary']; ?>
</li>
