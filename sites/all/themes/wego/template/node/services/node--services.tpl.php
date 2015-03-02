<?php
global $base_url;
?>

<?php if ($page) : ?>
    <div class="grid-row">
        <div class="block block-blog-details">
            <h2><?php print $title; ?></h2>
            <div>
                <?php print $node->body['und'][0]['value']; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
