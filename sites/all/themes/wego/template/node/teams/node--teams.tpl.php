<?php
global $default_img;
$image = $default_img;
if (isset($node->field_image['und'])) {
    $image = file_create_url($node->field_image['und'][0]['uri']);
}
?>
<div class="grid-row">
    <!-- team details -->
    <div class="block block-team-details">
        <div class="clearfix">								
            <div class="grid-col grid-col-right grid-col-4">
                <img src="<?php echo $image; ?>" alt="">
            </div>
            <div class="grid-col grid-col-right grid-col-8">
                <h2><?php print t('Introduction'); ?></h2>
                <?php print $node->body['und'][0]['value']; ?>
                <h2><?php print t('Profile'); ?></h2>
                <dl>
                    <dt><?php print t('Name'); ?>:</dt>
                    <dd><?php print $node->title; ?></dd>
                    <dt><?php print t('Website'); ?>:</dt>
                    <dd><?php print $node->field_website['und'][0]['value']; ?></dd>
                    <dt><?php print t('E-mail'); ?>:</dt>
                    <dd><?php print $node->field_email['und'][0]['value']; ?></dd>
                    <dt><?php print t('Skype');?>:</dt>
                    <dd><?php print $node->field_skype['und'][0]['value']; ?></dd>
                    <dt><?php print t('Age');?>:</dt>
                    <dd><?php print $node->field_skype['und'][0]['value']; ?> <?php print t('years');?></dd>
                    <dt><?php print t('Experiance');?>:</dt>
                    <dd><?php print $node->field_experience['und'][0]['value']; ?> <?php print t('years');?></dd>
                    <dt><?php print t('Designation'); ?>:</dt>
                    <dd><?php print t('graphic designer'); ?></dd>
                </dl>
            </div>
        </div>
    </div>
    <!--/ team details -->
    <?php if ($node->field_skill_percents['und'][0]['value'] != ''): ?>
        <!-- skills -->
        <div class="block block-skills">
            <div class="block-head"><?php print t('Skills'); ?></div>
            <ul class="block-cont">
                <?php
                $arr_skill = explode(';', $node->field_skill_percents['und'][0]['value']);
                foreach ($arr_skill as $skill) :
                    $s = explode(',', str_replace(array('[', ']'), "", $skill));
                    ?>
                    <li>
                        <div class="bar"><div data-value="<?php echo $s[2]; ?>%"></div></div><?php echo $s[1] . ' ' . $s[2] . '%'; ?>
                        <i><span><?php echo $s[0]; ?></span></i>
                    </li>
                    <?php
                endforeach;
                ?>
            </ul>
        </div>
        <!--/ skills -->
    <?php endif; ?>

    <?php
    $team_bottom = block_get_blocks_by_region('team_bottom');
    print render($team_bottom);
    ?>

    <!-- feedback -->
    <div class="block">
        <?php if ($comment == COMMENT_NODE_OPEN) : ?>
            <?php print render($content['comments']); ?>
        <?php endif; ?>
    </div>
    <!--/ feedback -->
</div>