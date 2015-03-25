<?php
    $curr_uri = request_uri();
    $array_curr_uri = explode('/', $curr_uri);
?>
<div class="page-footer-pic" style="background-image: url(<?php global $theme_root; echo $theme_root; ?>/img/footer/page-footer.jpg)">					
</div>

<div class="page-footer-section">
    <div class="grid-row">
        <!-- subscription -->
        <div class="widget-subscription clearfix">
            <?php if ($page['footer_top']) : ?>
                <?php print render($page['footer_top']); ?>
            <?php endif; ?>
        </div>	
        <!--/ subscription -->	
    </div>
</div>

<div class="page-footer-section">
    <div class="grid-row">
        <div class="grid-col grid-col-3">
            <!-- about -->
            <?php if ($page['footer_1']) : ?>
                <?php print render($page['footer_1']); ?>
            <?php endif; ?>
            <!--/ about -->
        </div>

        <div class="grid-col grid-col-3">
            <!-- recent posts -->
            <?php if ($page['footer_2']) : ?>
                <?php print render($page['footer_2']); ?>
            <?php endif; ?>
            <!--/ recent posts -->
        </div>

        <div class="grid-col grid-col-6">
            <?php if ($page['footer_3']) : ?>
                <?php if(count(array_intersect(array('index2'), $array_curr_uri))==0 || count(array_intersect(array('index3'), $array_curr_uri))==0 ): 
                    echo "<div class='widget-feedback'>";
                    print render($page['footer_3']);
                    echo "</div>";?>
                    <script>
                        
                    </script>
                <?php
                else:
                    print render($page['footer_3']);
                endif;
                ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="grid-row">
        <!-- social nav -->
        <?php if ($page['footer_5']) : ?>
            <?php print render($page['footer_5']); ?>
        <?php endif; ?>	
        <!--/ social nav -->						
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
        jQuery('#edit-email').val('');
        jQuery("#edit-email").attr("placeholder","Enter your e-mail");
        jQuery('#edit-newsletter-submit').val('SEND');
    });
</script>