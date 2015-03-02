<?php
/**
 * @file node--view--wishlist-block--block.tpl.php
 * Contour's node template for the Wishlist block.
 */
global $base_url;
$image_url = file_create_url($content['product:field_image']['#items'][0]['uri']);
$sku = $content['product:commerce_price']['#object']->sku;
$product = commerce_product_load_by_sku($sku);
$id = $product->product_id;
?>

<!-- Product class product-->
<div class="inner">
    <div class="pic">
        <img src="<?php print $image_url; ?>" width="268" height="300" alt="<?php echo $title; ?>">
        <div class="badge"><?php print flag_create_link('shop', $node->nid); ?></div>
    </div>
    <h3><a href="<?php print $node_url; ?>"><?php echo $title; ?></a></h3>
    <p><?php print strip_tags(render($content['product:field_product_type'])); ?></p>
    <div class="price"><?php print render($content['product:commerce_price']); ?></div>
    <div class="actions">
        <a href="<?php print $node_url; ?>" class="more"><?php print t('More'); ?></a>
        <a href="<?php print $base_url . '/product/add/' . $id; ?>"><i class="fa fa-shopping-cart"></i><?php print t('Add to cart'); ?></a>
    </div>
</div>

