<?php
    $original_image = file_create_url($node->art_portfolio_image['und'][0]['uri']);
?>
<li>
	<a href="<?php print $node_url; ?>">
		<img src="<?php print $original_image; ?>" width="192" height="192" alt="">
		<i class="fa fa-search-plus"></i>
	</a>											
</li> 