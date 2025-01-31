<?php
global $theme_root;
$image = $theme_root . '/img/samples/img_teams.png';
if (isset($node->field_image['und'])) {
    $image = file_create_url($node->field_image['und'][0]['uri']);
}
?>
<li>
    <div>
        <a href="<?php echo $node_url; ?>" class="pic">
            <img src="<?php echo $image; ?>" width="268" height="220" alt="">
            <i class="fa fa-search-plus"></i>
        </a>
        <h3><a href="<?php echo $node_url; ?>"><?php echo $title; ?></a></h3>
        <h4><?php if (isset($node->field_regency['und'][0]['value'])) echo $node->field_regency['und'][0]['value']; ?></h4>
        <p>
            <?php
			$body = "";
			if (isset($node->body['und'][0]['value'])) {
		        $body = strip_tags($node->body['und'][0]['value']);
		        $body = (strlen($body) > 63) ? substr($body, 0, 60) . '...' : $body;
	   	    }
		    echo $body;
            ?>
        </p>									
        <div class="icons">
            <a href="<?php if (isset($node->field_facebook_url['und'][0]['value'])) echo $node->field_facebook_url['und'][0]['value']; ?>"><i class="fa fa-facebook"></i></a><!--
            --><a href="<?php if (isset($node->field_twitter_url['und'][0]['value'])) echo $node->field_twitter_url['und'][0]['value']; ?>"><i class="fa fa-twitter"></i></a><!--
            --><a href="<?php if (isset($node->field_in_url['und'][0]['value'])) echo $node->field_in_url['und'][0]['value']; ?>"><i class="fa fa-linkedin"></i></a>
        </div>
    </div>
</li>
