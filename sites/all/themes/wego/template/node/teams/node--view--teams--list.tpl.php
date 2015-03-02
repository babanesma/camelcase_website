<?php
global $theme_root;
$image = $theme_root . '/img/samples/img_teams.png';
if (isset($node->field_image['und'])) {
    $image = file_create_url($node->field_image['und'][0]['uri']);
}
?>
<li class="clearfix">
    <div class="grid-col grid-col-3">
        <div class="pic">
            <a href="<?php echo $node_url; ?>">
                <span><img src="<?php echo $image; ?>" width="300" height="300" alt=""></span>
                <i class="fa fa-search-plus"></i>
            </a>
        </div>
        <div class="icons">
            <a href="<?php echo $node->field_facebook_url['und'][0]['value']; ?>"><i class="fa fa-facebook"></i></a>
            <a href="<?php echo $node->field_twitter_url['und'][0]['value']; ?>"><i class="fa fa-twitter"></i></a>
            <a href="<?php echo $node->field_google_url['und'][0]['value']; ?>"><i class="fa fa-google-plus"></i></a>
            <a href="<?php echo $node->field_in_url['und'][0]['value']; ?>"><i class="fa fa-linkedin"></i></a>
        </div>
    </div>
    <div class="grid-col grid-col-9">
        <h3><a href="<?php echo $node_url; ?>"><?php echo $title; ?></a></h3>
        <h4><?php echo $node->field_regency['und'][0]['value']; ?></h4>
        <p><?php print strip_tags($node->body['und'][0]['value']); ?></p>
        <?php
        $field_skill_percents = $node->field_skill_percents['und'][0]['value'];
        $skill_percents = explode(';', $field_skill_percents);
        $skill_string = '';
        $count_sp = 1;
        foreach ($skill_percents as $sp) {
            $sp_part = explode(',', $sp);
            if ($count_sp < count($skill_percents)) {
                $skill_string .= $sp_part[1] . ', ';
            } else {
                $skill_string .= $sp_part[1];
            }
            $count_sp++;
        }
        ?>
        <div class="skills"><?php print t('Skills'); ?>: <?php echo $skill_string; ?></div>
    </div>
</li>