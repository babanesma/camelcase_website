<?php
// prepare data
$main_image = file_create_url($node->field_image['und'][0]['uri']);
?>
<?php if (!$page) : ?>
    <div class="grid-row">
        <ul class="block block-blog-list">
            <li class="tags-items">
                <div class="pic">
                    <img src="<?php echo $main_image; ?>" width="1170" height="430" alt="">
                    <a href="<?php print $node_url; ?>" class="link"></a>
                    <div class="date-alt"><?php print format_date($node->created, 'custom', 'd'); ?><span><?php print format_date($node->created, 'custom', 'M'); ?></span></div>
                </div>
                <div class="summary">
                    <h3><?php print $title; ?></h3>
                    <div class="info">
                        <div><i class="fa fa-comment"></i><?php print $comment_count; ?> <?php print t('Comments'); ?></div>
                        <div><i class="fa fa-user"></i><?php print str_replace('xml:lang=""', '', $name); ?></div>
                    </div>
                    <?php print $node->body['und'][0]['summary']; ?>
                    <a href="<?php print $node_url; ?>" class="more"><span><?php print t('Read More'); ?> <i class="fa fa-arrow-circle-o-right"></i></span></a>
                </div>
            </li>
        </ul>
    </div>
<?php else: ?>
    <?php
    $left_sidebar_layout = false;
    if (isset($node->field_blog_layout['und']) && $node->field_blog_layout['und'][0]['taxonomy_term']->name == 'Left Sidebar') {
        $left_sidebar_layout = true;
    }
    ?>
    <?php if ($left_sidebar_layout): ?>
        <div class="grid-row">						
            <div class="grid-col grid-col-right grid-col-9">
                <!-- blog details -->
                <div class="block block-blog-details">
                    <div class="pic">
                        <img src="<?php echo $main_image; ?>" width="870" height="430" alt="">
                        <div class="date-alt"><?php print format_date($node->created, 'custom', 'd'); ?><span><?php print format_date($node->created, 'custom', 'M'); ?></span></div>
                    </div>

                    <h2><?php echo $title; ?></h2>
                    <div class="info info-alt">
                        <div><i class="fa fa-comment"></i><a href="#comments"><?php print $comment_count; ?> <?php print t('Comments'); ?></a></div>
                        <div><i class="fa fa-user"></i><?php echo $node->name; ?></div>
                    </div>
                    <div>
                        <?php
                        hide($content['field_tags']);
                        hide($content['field_image']);
                        hide($content['field_thumbnail']);
                        hide($content['field_blog_layout']);
                        hide($content['comments']);
                        hide($content['links']);
                        hide($content['field_blog_category']);
                        print render($content);
                        ?>
                    </div>
                </div>
                <!--/ blog details -->

                <!-- blog comments -->
                <?php print render($content['comments']); ?>
                <!--/ blog comments -->
            </div>
            <div class="grid-col grid-col-right grid-col-3">
                <?php
                $blog_sidebar = block_get_blocks_by_region('blog_sidebar');
                print render($blog_sidebar);
                ?>
            </div>
        </div>
    <?php else: ?>
        <div class="grid-row">
            <!-- blog details -->
            <div class="block block-blog-details">
                <div class="pic">
                    <img src="<?php echo $main_image; ?>" width="1170" height="480" alt="">
                    <div class="date"><div><?php print format_date($node->created, 'custom', 'd'); ?><span><?php print format_date($node->created, 'custom', 'M'); ?></span></div></div>
                    <div class="reply"><div><?php print $comment_count; ?><span><?php print t('Reply'); ?></span></div></div>
                    <div class="type"><i class="fa fa-picture-o"></i></div>
                </div>

                <h2><?php echo $title; ?></h2>
                <h4><?php print t('by'); ?> <?php echo $node->name; ?> &nbsp;&nbsp;|&nbsp;&nbsp; <?php print format_date($node->created, 'custom', 'd M, Y'); ?></h4>
                <div class="info">
                    <div><i class="fa fa-comment"></i><?php print $comment_count; ?> <?php print t('Comments'); ?></div>
                    <div>
                        <i class="fa fa-tags"></i>
                        <?php print wego_format_comma_field('field_tags', $node); ?>
                    </div>
                </div>
                <div>
                    <?php
                    hide($content['field_tags']);
                    hide($content['field_image']);
                    hide($content['field_thumbnail']);
                    hide($content['field_blog_layout']);
                    hide($content['comments']);
                    hide($content['links']);
                    hide($content['field_blog_category']);
                    print render($content);
                    ?>
                </div>
                <div class="share clearfix">
                    <span><?php print t('Share Post:'); ?></span>
                    <a href="http://www.facebook.com/sharer.php?u=<?php echo $_SERVER['HTTP_HOST'] . file_create_url($node_url); ?>" onClick="javascript:window.open(this.href,
                                    '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');
                            return false;" class="facebook_color">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://twitter.com/share?url=<?php echo $_SERVER['HTTP_HOST'] . file_create_url($node_url); ?>" onClick="javascript:window.open(this.href,
                                    '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');
                            return false;" class="twitter_color">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="https://plus.google.com/share?url=<?php echo $_SERVER['HTTP_HOST'] . file_create_url($node_url); ?>" onClick="javascript:window.open(this.href,
                                    '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                            return false;" class="googleplus_color">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_SERVER['HTTP_HOST'] . file_create_url($node_url); ?>&title=<?php echo $title; ?>" onClick="javascript:window.open(this.href,
                                    '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                            return false;" class="googleplus_color">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </div>
            <!--/ blog details -->

            <!-- blog grid -->
            <div class="blog-bottom">
                <?php
                $blog_bottom = block_get_blocks_by_region('blog_bottom');
                print render($blog_bottom);
                ?>
            </div>
            <!--/ blog grid -->

            <!-- feedback -->
            <?php print render($content['comments']); ?>
            <!--/ feedback -->
        </div>
    <?php endif; ?>
<?php endif; ?>