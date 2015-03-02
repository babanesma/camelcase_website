<?php
/**
 * @file node--product-display.tpl.php
 * Contour's node template for the Product Display content type.
 */
global $base_url;
if (isset($content['product:field_image']['#items'][0]['uri'])) {
    $image_url = file_create_url($content['product:field_image']['#items'][0]['uri']);
} else {
    $image_url = 'http://placehold.it/268x300';
}
$sku = $content['product:commerce_price']['#object']->sku;
$product = commerce_product_load_by_sku($sku);
$id = $product->product_id;
$termid = arg(2);
?>
<?php if (!empty($termid)) : ?>
    <div class="block-catalog-list" style="margin-bottom:30px;">
        <ul>
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
                    <span><?php print strip_tags(render($content['product:field_product_type'])); ?></span>
                </div>
            </li>
        </ul>
    </div>
<?php else : ?>
    <?php if (request_path() == 'shop' || strpos(request_path(), 'grid')) : ?>
        <div class="inner">
            <div class="pic" onclick="document.location.href = '<?php echo $node_url; ?>';">
                <img src="<?php print $image_url; ?>" width="268" height="300" alt="<?php echo $title; ?>">
                <div class="badge"><?php print flag_create_link('shop', $node->nid); ?></div>
            </div>
            <h3><a href="<?php print $node_url; ?>"><?php echo $title; ?></a></h3>
            <p><?php print strip_tags(render($content['product:field_product_type'])); ?></p>
            <div class="price"><?php print render($content['product:commerce_price']); ?></div>
            <div class="actions">
                <a href="<?php print $node_url; ?>" class="more"><?php print t('More'); ?></a>
                <a href="<?php print $base_url . '/product/add/' . $id; ?>" title="<?php print t('Add to cart'); ?>"><i class="fa fa-shopping-cart"></i><?php print t('Add to cart'); ?></a>
            </div>
        </div>
    <?php elseif (strpos(request_path(), 'list')) : ?>

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

    <?php else : ?>
        <?php if (isset($node->field_product_layout['und']) && $node->field_product_layout['und'][0]['taxonomy_term']->name == 'Detail V1') : ?>
            <!-- product details -->
            <div id="node-<?php print $node->nid; ?>" class="block block-product-details clearfix">
                <div class="pics">
                    <?php if (isset($node->field_product_slider['und']) && count($node->field_product_slider['und']) > 0) : ?>
                        <ul>
                            <?php
                            $i = 1;
                            foreach ($node->field_product_slider['und'] as $key => $product_images) :
                                ?>
                                <li><a href="<?php print file_create_url($product_images['uri']); ?>" rel="fancybox" class="fancybox"><img src="<?php print file_create_url($product_images['uri']); ?>" alt=""></a></li>
                                <?php
                                $i++;
                            endforeach;
                            ?>  
                        </ul>
                    <?php endif; ?>  
                    <?php //print render($content['field_product_slider']);  ?>
                </div>
                <div class="info">
                    <h2><?php echo $title; ?></h2>
                    <h4><?php print $content['product:commerce_price']['#object']->sku; ?></h4>
                    <div class="price"><?php print render($content['product:commerce_price']); ?></div>
                    <?php
                    if (isset($node->body['und'])) {
                        print $node->body['und'][0]['summary'];
                    }
                    ?>

                    <div class="product-display-cart-line"><?php print render($content['field_reference']); ?></div> 
                    <?php if (module_exists('flag')): ?>
                        <?php print flag_create_link('shop', $node->nid); ?>
                    <?php endif; ?>

                    <p><?php print t('Category'); ?>: <?php print strip_tags(render($content['product:field_product_type'])); ?><br><?php print t('Tags'); ?>: <?php print wego_format_comma_field('field_tags_shop', $node); ?></p>
                </div>
            </div>
            <!--/ product details -->

            <!-- product info -->
            <div class="block block-product-info">
                <div class="block-head"><?php print t('More Details'); ?></div>
                <div class="carousel">
                    <div>
                        <?php print render($content['body']); ?>
                    </div>
                    <div>
                        <?php print render($content['field_specifications']); ?>
                    </div>
                    <div>
                        <?php print render($content['field_instructions']); ?>
                    </div>
                </div>
            </div>
            <!--/ product info -->

            <!-- related product-->
            <?php //print render(block_get_blocks_by_region('after_content_no_wrap')); ?>
        <?php else : ?>
            <!-- product details -->
            <div class="block block-product-details-2 clearfix">
                <div class="block-head block-head-4"><?php echo $title; ?></div>
                <div class="pics">
                    <?php if (isset($node->field_product_slider['und']) && count($node->field_product_slider['und']) > 0) : ?>
                        <ul>
                            <?php
                            $i = 1;
                            foreach ($node->field_product_slider['und'] as $key => $product_images) :
                                ?>
                                <li><a href="<?php print file_create_url($product_images['uri']); ?>" rel="fancybox" class="fancybox"><img src="<?php print file_create_url($product_images['uri']); ?>" alt=""></a></li>
                                <?php
                                $i++;
                            endforeach;
                            ?>  
                        </ul>
                    <?php endif; ?>  
                    <?php //print render($content['field_product_slider']);  ?>
                </div>
                <div class="info">
                    <h2><?php print t('Information'); ?></h2>
                    <dl>
                        <dt><?php print t('Price'); ?>:</dt>
                        <dd><?php print render($content['product:commerce_price']); ?></dd>
                    </dl>
                    <?php
                    if (isset($node->body['und'])) {
                        print $node->body['und'][0]['summary'];
                    }
                    ?>
                    <?php print render($content['field_reference']); ?>
                    <?php if (module_exists('flag')): ?>
                        <?php print flag_create_link('shop', $node->nid); ?>
                    <?php endif; ?>
                    <p><?php print t('Category'); ?>: <?php print strip_tags(render($content['product:field_product_type'])); ?><br><?php print t('Tags'); ?>: <?php print wego_format_comma_field('field_tags_shop', $node); ?></p>

                    <div class="share">
                        <a href="http://www.facebook.com/sharer.php?u=<?php echo $_SERVER['HTTP_HOST'] . file_create_url($node_url); ?>" onClick="javascript:window.open(this.href,
                                        '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');
                                return false;" class="facebook_color"><i class="fa fa-facebook"></i></a><!--
                        --><a href="https://twitter.com/share?url=<?php echo $_SERVER['HTTP_HOST'] . file_create_url($node_url); ?>" onClick="javascript:window.open(this.href,
                                        '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');
                                return false;" class="twitter_color"><i class="fa fa-twitter"></i></a><!--
                        --><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $_SERVER['HTTP_HOST'] . file_create_url($node_url); ?>&amp;title=<?php echo $title; ?>" onClick="javascript:window.open(this.href,
                                        '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                                return false;" class="googleplus_color"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <!--/ product details -->

            <!-- product tabs -->
            <div class="block block-product-tabs">
                <div class="head">
                    <a href="#block-product-tabs-1" class="active"><?php print t('Description'); ?></a><!--
                    --><a href="#block-product-tabs-2"><?php print t('Specifications'); ?></a><!--
                    --><a href="#block-product-tabs-3"><?php print t('Instructions'); ?></a>
                </div>
                <div id="block-product-tabs-1" class="cont active">
                    <?php print render($content['body']); ?>
                </div>
                <div id="block-product-tabs-2" class="cont">
                    <?php print render($content['field_specifications']); ?>
                </div>
                <div id="block-product-tabs-3" class="cont">
                    <?php print render($content['field_instructions']); ?>
                </div>
            </div>
            <!--/ product tabs -->

            <!-- related product-->
            <?php //print render(block_get_blocks_by_region('after_content_no_wrap2')); ?>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>