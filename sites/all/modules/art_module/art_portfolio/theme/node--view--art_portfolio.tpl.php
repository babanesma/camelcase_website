<?php if (!$page) : ?>
    <li id="node-<?php print $node->nid; ?>" class="item <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
		<?php print render($content['art_portfolio_image'][0]); ?>
		<?php
			// We hide the comments and links now so that we can render them later.
			hide($content['comments']);
			hide($content['links']);
			
			$original_image = file_create_url($node->art_portfolio_image['und'][0]['uri']);
		?>
		<div>
			<a href="<?php print $original_image; ?>" rel="fancybox" class="fancybox fa fa-search-plus"></a>
			<a href="<?php print $node_url; ?>" class="fa fa-link"></a>
		</div>
	</li>
<?php else: ?>
    <div id="portfolio-details">
    <?php
    $architecture_layout = false;
    if (isset($node->field_portfolio_layout['und']) && $node->field_portfolio_layout['und'][0]['taxonomy_term']->name == 'Architecture') {
        $architecture_layout = true;
    }
// hide portfolio top slider
    if ($architecture_layout):
        ?>
        <script>
            jQuery().ready(function() {
                jQuery('#block-views-art-portfolio-top-slider').hide();
            });
        </script>
    <?php endif; ?>
    <div class="grid-row">			
        <!-- portfolio details -->
        <div class="block block-portfolio-details">
            <?php if ($architecture_layout) : ?>
                <div class="block-head block-head-4"><?php print wego_format_comma_field('art_portfolio_categories', $node); ?></div>
            <?php else: ?>
                <div class="block-head"><?php print wego_format_comma_field('art_portfolio_categories', $node); ?></div>
            <?php endif; ?>

            <div class="carousel">
                <?php
                $main_images = $node->art_portfolio_image['und'];
                if ($architecture_layout) :
                    ?>
                    <img src="<?php echo file_create_url($main_images[0]['uri']); ?>" width="1170" height="480" alt="">
                    <?php
                else:
                    foreach ($main_images as $image) :
                        ?>
                        <img src="<?php echo file_create_url($image['uri']); ?>" width="1170" height="480" alt="">
                        <?php
                    endforeach;
                endif;
                ?>
            </div>
            <h2><?php echo $title; ?></h2>
            <div class="info">
                <div><i class="fa fa-calendar"></i><?php print format_date($node->created, 'custom', 'M d'); ?></div>
                <div><i class="fa fa-comment"></i><a href="#"><?php print $comment_count; ?> <?php print t('Comments'); ?></a></div>
                <div><i class="fa fa-user"></i><?php echo $node->name; ?></div>
            </div>
            <div class="block">
                <?php
                hide($content['art_portfolio_categories']);
                hide($content['field_client']);
                hide($content['field_website']);
                hide($content['art_portfolio_image']);
                hide($content['field_thumbnail']);
                hide($content['field_image_vertical']);
                hide($content['field_image_horizontal']);
                hide($content['field_gallery']);
                hide($content['field_portfolio_layout']);
                hide($content['comments']);
                hide($content['link']);
                print render($content);
                ?>
            </div>
            <?php
            if (!$architecture_layout) {
                print render($content['comments']);
            }
            ?>
        </div>
        <!--/ portfolio details -->
    </div>
    <?php if ($architecture_layout): ?>
        <div class="grid-row">
            <div class="grid-col grid-col-6">	
                <!-- portfolio client details -->
                <div class="block block-portfolio-client-details">
                    <div class="block-head block-head-7"><?php print t('Client Details'); ?></div>
                    <p>
                        <?php if (isset($node->field_client) && isset($node->field_client['und']) && isset($node->field_client['und'][0]) && $node->field_client['und'][0]['value'] != ''): ?>
                            <?php print t('Client'); ?>: <?php echo $node->field_client['und'][0]['value']; ?><br>
                        <?php endif; ?>
                        <?php print t('Category'); ?>: <?php print wego_format_comma_field('art_portfolio_categories', $node); ?><br>
                        <?php print t('Date'); ?>: <?php print format_date($node->created, 'custom', 'd M Y'); ?><br>
                        <?php if (isset($node->field_website) && $node->field_website['und'][0]['value'] != ''): ?>
                            <?php print t('Website'); ?>: <?php echo $node->field_website['und'][0]['value']; ?>
                        <?php endif; ?>
                    </p>
                </div>
                <!--/ portfolio client details -->
            </div>
            <div class="grid-col grid-col-6">
                <?php
					$portfolio_sidebar = block_get_blocks_by_region('portfolio_sidebar');
					print render($portfolio_sidebar);
                ?>
            </div>
        </div>
        <div class="grid-row">
            <!-- testimonials -->
            <?php
				$portfolio_bottom = block_get_blocks_by_region('portfolio_bottom');
				print render($portfolio_bottom);
			?>
            <!--/ testimonials -->
            <!-- feedback -->
            <?php
            if ($architecture_layout) :
                ?>
                <div class="grid-row">
                    <div class="block block-portfolio-details">
                        <?php print render($content['comments']); ?>
                    </div>
                </div>
                <?php
            endif;
            ?>
            <!--/ feedback -->
        </div>
    <?php endif; ?>
    </div>
<?php endif; ?>