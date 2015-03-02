<?php
/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
    <h3><?php print $title; ?></h3>
<?php endif; ?>
<div id="<?php print $view_id; ?>" class="art-portfolio supcolumns<?php echo $columns; ?>">
    <!-- portfolio -->
    <?php if ($use_pager == 0) : ?>
        <script>
            jQuery('.item-list').hide();
        </script>
    <?php endif; ?>
    <div class="block <?php
    if (empty($block_portfolio)) {
        echo 'block-portfolio-7';
    } else {
        echo $block_portfolio;
    }
    ?>">
        <div class="block-cont">
            <?php if (isset($categories) && $use_filter == 1): ?>
                <ol>
                    <li data-filter="*" class="active">All</li>
                        <?php foreach ($categories as $key => $c): ?>
                        <li data-filter=".<?php echo $key; ?>"><?php echo $c; ?></li>
                    <?php endforeach; ?>
                </ol>
            <?php endif; ?>
            <ul>
                <?php
                $count_item = 0;
                foreach ($rows as $id => $row):
                    $count_item++;
                    print $row;
                    ?>
                    <script>
                        // set item number
    <?php if ($count_item == 1 || $count_item == 6): ?>
                            jQuery('.block-recent-works ul li').last().addClass('item-large');
    <?php elseif ($count_item == 5 || $count_item == 7 || $count_item == 8): ?>
                            jQuery('.block-recent-works ul li').last().addClass('item-small');
    <?php endif; ?>
                        jQuery('.block-recent-works ul li').last().addClass('item-<?php echo $count_item; ?>');
                    </script>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>