<div class="page-footer-pic" style="background-image: url(<?php global $theme_root; echo $theme_root; ?>/img/footer/page-footer-2.jpg)">				
</div>

<div class="page-footer-section">
    <div class="grid-row">
        <div class="grid-col grid-col-3">
            <?php if ($page['footer_1']) : ?>
                <?php print render($page['footer_1']); ?>
            <?php endif; ?>
            <div class="widget-subscription-2">
                <div class="widget-head"><?php print t('Newsletters'); ?></div>
                <?php if ($page['footer_top']) : ?>
                    <?php print render($page['footer_top']); ?>
                <?php endif; ?>
            </div>            
        </div>

        <div class="grid-col grid-col-3">
            <!-- recent posts -->
            <?php if ($page['footer_2']) : ?>
                <?php print render($page['footer_2']); ?>
            <?php endif; ?>
            <!--/ recent posts -->
        </div>

        <div class="grid-col grid-col-3">
             <?php if ($page['footer_3']) : ?>
                <?php print render($page['footer_3']); ?>
            <?php endif; ?>
        </div>

        <div class="grid-col grid-col-3">
            <?php if ($page['footer_4']) : ?>
                <?php print render($page['footer_4']); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="page-footer-section">
    <div class="grid-row">
        <?php if ($page['footer_bottom']) : ?>
            <?php print render($page['footer_bottom']); ?>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.widget-recent-posts').addClass('widget-recent-posts-2');
    });
</script>