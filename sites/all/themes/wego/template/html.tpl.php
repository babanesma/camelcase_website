<?php
/**
 * @file html.tpl.php
 * Wego's HTML template.
 */
?>
<?php global $theme_root; ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
    <head>
        <?php print $head; ?>
        <title><?php print $head_title; ?></title>
        <?php print $styles; ?>
        <!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
        <?php print $scripts; ?>
        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $theme_root; ?>/img/favicon.png">
        <!--/ favicon -->
		<style id="switch_color" type="text/css"></style>
    </head>
    <body class="<?php print $classes; ?>" <?php print $attributes; ?> style="<?php if(theme_get_setting('background_type') == 'color') : ?> background:#<?php print theme_get_setting('background_color'); ?> <?php else :?> background:url(<?php echo $theme_root; ?>/img/patterns/<?php print theme_get_setting('background_image'); ?>.png); <?php endif; ?>">
        <?php print $page_top; ?>
        <?php print $page; ?>
        <?php print $page_bottom; ?>
        <script type="text/javascript" src="<?php echo $theme_root; ?>/js/custom/custom.js"></script>
		<?php include('footer/foot.php'); ?>
		<script>
			function continueShopping() {location.href = '<?php echo base_path(); ?>shop';}
			function showCart() {location.href = '<?php echo base_path(); ?>cart';}
			jQuery(document).ready( function() {
				var link = '<input onclick="continueShopping();" type="button" class="form-submit button" value="Continue Shopping" name="op" id="continue-shopping">';
				jQuery('.commerce-line-item-actions').append(link);
				
				jQuery('.top-cart-icon').hover( function() {
					var height = jQuery('.shopping-cart .view-content').height();
					jQuery('.shopping-cart .view-footer').css('top', height + 44);
				});
			});
		</script>
    </body>
</html>