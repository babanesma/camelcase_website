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
<div class="clearfix">
	<a class="pic" href="<?php print $node_url;?>">
		<img width="70" height="70" alt="product" src="<?php print $image_url; ?>">
		<i class="fa fa-plus-square-o"></i>
	</a>
	<h4><a href="<?php print $node_url;?>"><?php echo $title; ?></a></h4>
	<?php print render($content['product:commerce_price']); ?>
	<a class="btn-addtocart" href="<?php print $base_url . '/product/add/' . $id; ?>" title="<?php print t('Add to cart'); ?>"><i class="fa fa-shopping-cart"></i><?php print t('Add to cart'); ?></a>
</div>

