<div class="padding-top <?php print $classes; ?>" <?php print $attributes; ?>>
    
    <?php if ($content['comments']): ?>
        <div class="block block-blog-comments">
            <div class="block-head"><?php print $node->comment_count; ?> <?php print t('Comments'); ?></div>
            <?php print render($content['comments']); ?>
        </div>
    <?php endif; ?>

    <?php if ($content['comment_form']): ?>
        <div class="block-head"><?php print t('Leave A Comment'); ?></div>
        <?php print render($content['comment_form']); ?>
    <?php endif; ?>

</div> <!-- /#comments -->
