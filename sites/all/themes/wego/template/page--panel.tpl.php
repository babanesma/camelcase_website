<?php
global $theme_root;
$curr_uri = request_uri();
$array_curr_uri = explode('/', $curr_uri);
$arrayFooterSettings = array('footer_1', 'footer_2', 'footer_3');
$count = 1;
foreach ($arrayFooterSettings as $type) {
    $var1 = 'page_style' . $count;
    $var2 = 'arrayPageStyle' . $count;
    $var3 = 'getFooterStyle' . $count;
    $$var1 = theme_get_setting($type);
    $$var1 = str_replace(" ", "", $$var1);
    $$var2 = explode(',', $$var1);
    $count++;
    $$var3 = array_intersect($$var2, $array_curr_uri);
}
if (!isset($_GET['footer'])) {
    $_GET['footer'] = NULL;
}
$coming_soon_v1 = count(array_intersect(array('coming_soon_v1'), $array_curr_uri));
$coming_soon_v2 = count(array_intersect(array('coming_soon_v2'), $array_curr_uri));
$error_404_v1 = count(array_intersect(array('404_error_page_v1'), $array_curr_uri));
$error_404_v2 = count(array_intersect(array('404_error_page_v2'), $array_curr_uri));
$is_portfolio = count(array_intersect(array('portfolio'), $array_curr_uri));
$contacts_v2 = count(array_intersect(array('contacts_v2'), $array_curr_uri));
$contacts_v3 = count(array_intersect(array('contacts_v3'), $array_curr_uri));
?>
<div class="page <?php if (theme_get_setting('layout_option') == 'boxed') { echo 'page-boxed'; } ?>">
	
    <!-- page header bottom -->
    <?php if($coming_soon_v2 == 0): ?>
		<div class="page-header-top" id="page-header-top"></div>
    <?php endif;  ?>
    <header id="page-header-bottom" class="page-header-bottom <?php if ($coming_soon_v1 > 0) { echo 'page-header-bottom-alt'; } ?>">
        <div class="grid-row">
            <div class="shopping-cart">
				<?php
					$topbar = block_get_blocks_by_region('top_bar');
					print render($topbar);
				?>
			</div>
			
			<?php if ($coming_soon_v1 == 0 && $coming_soon_v2 == 0): ?>
                <!-- main search -->
                <div id="main-search" class="main-search">
                    <button type="button" class="fa fa-search"></button>
                    <?php
						$block = module_invoke('search', 'block_view', 'form');
						print render($block['content']);
                    ?>
                </div>
                <!--/ main search -->
            <?php endif; ?>

            <!-- logo -->
            <?php if ($logo): ?>
                <div class="logo <?php if ($coming_soon_v1 > 0 || $coming_soon_v2 > 0) { echo 'logo-2'; } ?>">
                    <span>
                        <a href="<?php print $front_page; ?>">
                            <?php if ($coming_soon_v1 > 0): ?>
                                <img src="<?php print $theme_root; ?>/img/samples/logo-alt.png" width="111" height="58" alt="<?php print t('Home'); ?>">
                            <?php else: ?>
                                <img src="<?php print $logo; ?>" width="111" height="58" alt="<?php print t('Home'); ?>">
                            <?php endif; ?>
                        </a>
                    </span>
                </div>
            <?php endif; ?>
            <!--/ logo -->
            <?php if ($coming_soon_v1 == 0 && $coming_soon_v2 == 0): ?>
                <!-- main nav -->
                <nav id="main-nav" class="main-nav">
                    <a href="#" class="switcher"><?php print t('Menu'); ?><i class="fa fa-bars"></i></a>
                    <?php print render($page['menu']); ?>
                </nav>
                <!--/ main nav -->
            <?php endif; ?>
        </div>
    </header>
    <div></div>
    <!--/ page header bottom -->

    <!-- page intro -->
    <?php if ($title) : ?>
        <div class="page-intro">
            <div class="pic" style="background-image: url(<?php echo file_create_url(theme_get_setting('breadcrumbs_image')); ?>)"></div>
            <div class="grid-row clearfix">
                <div class="page-title">
                    <?php print $title; ?>
                </div>
                <div class="page-subtitle"><?php print theme_get_setting('page_title'); ?></div>
                <!--breadcrumbs-->
                <?php if (theme_get_setting('breadcrumbs') == '1'): ?>
                    <?php if ($breadcrumb): ?>
                        <?php print $breadcrumb; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
    <!--/ page intro -->

    <!-- page content -->
    <div class="page-content">
		<div class="grid-row"><?php print $messages; ?></div>
        <?php if ($coming_soon_v2 == 0 && $error_404_v2 == 0 && $contacts_v2 == 0 && $contacts_v3 == 0): ?>
            <!-- page content section -->
            <div class="page-content-section <?php if ($error_404_v1 > 0) { echo 'page-content-section-border'; } ?>">
        <?php endif; ?>
			<?php if ( ($page['sidebar_right']) ) : ?>
				<div class="grid-row">
					<div class="grid-col grid-col-9 main_content">
						<?php
							// check porfolio page to show top content
							if ($is_portfolio > 0) {
								print render($page['top_content']);
							}
						?>
						<?php if ($page['content']) : ?>
							<?php print render($page['content']); ?>
						<?php endif; ?>
						
						<?php if ($page['bottom_content']) : ?>
							<?php print render($page['bottom_content']); ?>
						<?php endif; ?>
					</div>
					<div class="grid-col grid-col-3 sidebar_right">
						<?php print render($page['sidebar_right']); ?>
					</div>
				</div>
			<?php else :?>
				<?php
					// check porfolio page to show top content
					if ($is_portfolio > 0) {
						print render($page['top_content']);
					}
				?>
				
                <?php if ($page['content']) : ?>
                    <?php print render($page['content']); ?>
                <?php endif; ?>
				
                <?php if ($page['bottom_content']) : ?>
                    <?php print render($page['bottom_content']); ?>
                <?php endif; ?>
			<?php endif; ?>
        <?php if ($coming_soon_v2 == 0 && $error_404_v2 == 0 && $contacts_v2 == 0 && $contacts_v3 == 0): ?>
            </div>
            <!--/ page content section -->
        <?php endif; ?>
    </div>
    <!--/ page content -->

    <!-- page footer -->
    <footer id="page-footer" class="page-footer">
        <?php
        if (count($getFooterStyle2) > 0 || theme_get_setting('footer_option') == 'footer2') :
            include 'footer/footer-2.php';
        elseif (count($getFooterStyle3) > 0 || theme_get_setting('footer_option') == 'footer3'):
            include 'footer/footer-3.php';
        else:
            include 'footer/footer-1.php';
        endif;
        ?>
    </footer>
    <!--/ page footer -->
</div>