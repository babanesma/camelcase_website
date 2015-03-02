<?php
global $default_img;

$image = $default_img;
if (isset($node->field_image['und'])) {
    $image = file_create_url($node->field_image['und'][0]['uri']);
}
?>
<li>
    <a href="<?php print $node_url; ?>"><img src="<?php echo $image; ?>" width="266" height="216" alt=""></a>
    <div class="inner">
        <h3><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
        <h4><?php print $node->field_regency['und'][0]['value']; ?></h4>
        <?php print $node->body['und'][0]['summary']; ?>
        <div class="links">           
            <?php if (isset($node->field_facebook_url['und'])): ?>
                <a href="<?php print $node->field_facebook_url['und'][0]['value']; ?>" class="fa fa-facebook-square"></a>
            <?php endif; ?>
            <?php if (isset($node->field_twitter_url['und'])): ?>
                <a href="<?php print $node->field_twitter_url['und'][0]['value']; ?>" class="fa fa-twitter-square"></a>
            <?php endif; ?>
            <?php if (isset($node->field_google_plus_url['und'])): ?>
                <a href="<?php print $node->field_google_plus_url['und'][0]['value']; ?>" class="fa fa-google-plus-square"></a>
            <?php endif; ?>
            <?php if (isset($node->field_pinterest_url['und'])): ?>
                <a href="<?php print $node->field_pinterest_url['und'][0]['value']; ?>" class="fa fa-pinterest-square"></a>
            <?php endif; ?>
            <?php if (isset($node->field_dribbble_url['und'])): ?>
                <a href="<?php print $node->field_dribbble_url['und'][0]['value']; ?>" class="fa fa-dribbble-square"></a>
            <?php endif; ?>
            <?php if (isset($node->field_flickr_url)): ?>
                <a href="<?php print $node->field_flickr_url['und'][0]['value']; ?>" class="fa fa-flickr-square"></a>
            <?php endif; ?>
            <?php if (isset($node->field_youtube_url['und'])): ?>
                <a href="<?php print $node->field_youtube_url['und'][0]['value']; ?>" class="fa fa-youtube-square"></a>
            <?php endif; ?>
            <?php if (isset($node->field_vimeo_url['und'])): ?>
                <a href="<?php print $node->field_vimeo_url['und'][0]['value']; ?>" class="fa fa-vimeo-square"></a>
            <?php endif; ?>
            <?php if (isset($node->field_instagram_url['und'])): ?>
                <a href="<?php print $node->field_instagram_url['und'][0]['value']; ?>" class="fa fa-instagram-square"></a>
            <?php endif; ?>
            <?php if (isset($node->field_linkedin_url['und'])): ?>
                <a href="<?php print $node->field_linkedin_url['und'][0]['value']; ?>" class="fa fa-linkedin-square"></a>
            <?php endif; ?>
        </div>
    </div>
</li>
