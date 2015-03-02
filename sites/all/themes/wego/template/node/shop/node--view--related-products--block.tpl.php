<?php
/**
 * @file node--shop.tpl.php
 * Wego's node template for the Product Display content type.
 */
global $base_url;
$image_url = file_create_url($content['product:field_image']['#items'][0]['uri']);
$sku = $content['product:commerce_price']['#object']->sku;
$product = commerce_product_load_by_sku($sku);
$id = $product->product_id;
?>

<li>
    <a href="<?php print $node_url; ?>" class="pic"><img src="<?php print $image_url; ?>" width="220" height="220" alt=""></a>
    <div class="badge"><?php print flag_create_link('shop', $node->nid); ?></div>
    <h3><a href="<?php print $node_url; ?>"><?php echo $title; ?></a></h3>
    <div class="price"><?php print render($content['product:commerce_price']); ?></div>
    <?php
    if (isset($node->body['und'])) {
        print $node->body['und'][0]['summary'];
    }
    ?>
    <div class="actions">
        <a href="<?php print $node_url; ?>" class="more"><?php print t('More'); ?></a>
        <a href="<?php print $base_url . '/product/add/' . $id; ?>"><i class="fa fa-shopping-cart"></i><?php print t('Add to cart'); ?></a>
        <span class="product-type"><?php print strip_tags(render($content['product:field_product_type'])); ?></span>
    </div>
</li>