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
             <?php if (isset($categories) && $use_filter == 1): ?>
            <ol>
                <li data-filter="*" class="active">All</li>
                <?php foreach ($categories as $key => $c): ?>
                    <li data-filter=".<?php echo $key; ?>"><?php echo $c; ?></li>
                <?php endforeach; ?>
            </ol>
        <?php endif; ?>
        <div class="block-cont">
            <ul>
                <?php
                $count_item = 0;
                foreach ($rows as $id => $row):
                    print $row;
                    ?>
                    <script>
                        // set item number
                        jQuery('.block-portfolio-8 ul li').last().addClass('item-<?php echo $count_item; ?>');
                    </script>
                    <?php
                    $count_item++;
                endforeach;
                ?>
            </ul>
        </div>
    </div>
</div>