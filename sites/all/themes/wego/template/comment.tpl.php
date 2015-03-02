<?php global $theme_root; ?>
<ul>
    <li class="comment-element">
        <div class="comment-img">
            <?php if (!$picture) : ?>
                <img src="<?php echo $theme_root; ?>/img/no-avatar.jpg" alt="avatar" width="80" height="80">
            <?php else : ?>
                <?php preg_match('/\< *[img][^\>]*[src] *= *[\"\']{0,1}([^\"\']*)/i', $picture, $matches); ?>
                <img src="<?php echo $matches[1]; ?>" alt="avatar" width="80" height="80">
            <?php endif; ?>
        </div>
        <div class="comment-content">
            <div class="author">
                <span class="name">
                    <?php print str_replace('xml:lang=""', '', $author); ?>
                </span>
                <span>
                    <?php print format_date($comment->created, 'custom', 'g:i A - d F Y'); ?> &nbsp;/&nbsp;
                    <?php
                    if (!empty($content['links'])) {
                        print render($content['links']);
                    }
                    ?>
                </span>
            </div>
            <div class="content">
                <?php
                hide($content['links']);
                print render($content);
                ?>
            </div>
        </div>
    </li>
</ul>