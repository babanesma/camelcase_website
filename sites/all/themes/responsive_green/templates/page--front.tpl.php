<?php
/**
 * @file
 * Responsive Green theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to main-menu administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

    <!-- Header -->
      <div id="header-wrapper" class="wrapper">
        <div id="header">
          
          <!-- Logo -->
            <div id="logo">
              <h1><a href="<?php print $front_page; ?>"><?php print $site_slogan; ?></a></h1>
              <p>A free responsive site template by HTML5 UP</p>
            </div>
          
          <!-- Nav -->
            <nav id="nav">
              <?php print drupal_render($main_menu_tree); ?>
            </nav>

        </div>
      </div>
    
    <!-- Intro -->
      <!-- <div id="intro-wrapper" class="wrapper style1">
        <div class="title">The Introduction</div>
        <section id="intro" class="container">
          <p class="style1">So in case you were wondering what this is all about ...</p>
          <p class="style2">
            Escape Velocity is a free responsive<br class="mobile-hide" />
            site template by <a href="http://html5up.net" class="nobr">HTML5 UP</a>
          </p>
          <p class="style3">It's <strong>responsive</strong>, built on <strong>HTML5</strong> and <strong>CSS3</strong>, and released for
          free under the <a href="http://html5up.net/license">Creative Commons Attribution 3.0 license</a>, so use it for any of
          your personal or commercial projects &ndash; just be sure to credit us!</p>
          <ul class="actions">
            <li><a href="#" class="button style3 big">Proceed</a></li>
          </ul>
        </section>
      </div> -->
    
    <!-- Main -->
     <div class="wrapper style2">
        <div class="title">The Details</div>
        <div id="main" class="container">
          
          <!-- Image -->
            
          
          <!-- Features -->
            <section id="features">
              <header class="style1">
                <?php if (theme_get_setting('breadcrumbs', 'responsive_green')): ?><div id="breadcrumbs"><?php if ($breadcrumb): print $breadcrumb; endif;?></div><?php endif; ?>
              </header>
                
            
                <?php print $messages; ?>
                <?php if ($page['content_top']): ?><div id="content_top"><?php print render($page['content_top']); ?></div><?php endif; ?>
                <?php print render($title_prefix); ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                <?php print render($page['content']); ?>
            </section>
        
        </div>
      </div>
    <!-- Highlights -->
     <!--  <div class="wrapper style3">
        <div class="title">The Endorsements</div>
        <div id="highlights" class="container">
          <div class="row 150%">
            <div class="4u">
              <section class="highlight">
                <a href="#" class="image featured"><img style="second" alt="" /></a>
                <h3><a href="#">Aliquam diam consequat</a></h3>
                <p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
                <ul class="actions">
                  <li><a href="#" class="button style1">Learn More</a></li>
                </ul>
              </section>
            </div>
            <div class="4u">
              <section class="highlight">
                <a href="#" class="image featured"><img class="third" alt="" /></a>
                <h3><a href="#">Nisl adipiscing sed lorem</a></h3>
                <p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
                <ul class="actions">
                  <li><a href="#" class="button style1">Learn More</a></li>
                </ul>
              </section>
            </div>
            <div class="4u">
              <section class="highlight">
                <a href="#" class="image featured"><img class="fourth" alt="" /></a>
                <h3><a href="#">Mattis tempus lorem</a></h3>
                <p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
                <ul class="actions">
                  <li><a href="#" class="button style">Learn More</a></li>
                </ul>
              </section>
            </div>
          </div>
        </div>
      </div> -->

    <!-- Footer -->
      <div id="footer-wrapper" class="wrapper">
        <div class="title">The Rest Of It</div>
        <div id="footer" class="container">
          <header class="style1">
            <h2>Ipsum sapien elementum portitor?</h2>
            <p>
              Sed turpis tortor, tincidunt sed ornare in metus porttitor mollis nunc in aliquet.<br />
              Nam pharetra laoreet imperdiet volutpat etiam consequat feugiat.
            </p>
          </header>
          <hr />



            <?php if (!empty($page['footer_first'])): $num01 = 1;  endif; ?>
                <?php if (!empty($page['footer_second'])): $num02 = 1;  endif; ?>
                <?php if (!empty($page['footer_third'])): $num03 = 1;  endif; ?>
                <?php
                  $sum1 = (isset($num01) . isset($num02) . isset($num03));
                  $result1 = strlen($sum1);
                    if ($result1 == 1):$value1 = "one";endif;
                    if ($result1 == 2):$value1 = "two";endif;
                    if ($result1 == 3):$value1 = "three";endif;
                ?>
              <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third']): ?> 
                <div id="footer-area" class="row 150% <?php print $value1 ?>">
                  <?php if ($page['footer_first']): ?>
                  <div class="6u"><section><?php print render($page['footer_first']); ?></section></div>
                  <?php endif; ?>
                  <?php if ($page['footer_second']): ?>
                  <div class="6u"><section><?php print render($page['footer_second']); ?></section></div>
                  <?php endif; ?>
                  <?php if ($page['footer_third']): ?>
                  <div class="6u"><section><?php print render($page['footer_third']); ?></section></div>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
              
       
          <hr />
        </div>
        <div id="copyright">
          <ul>
            <li><p class="copyright"><?php print t('Copyright'); ?> &copy; <?php echo date("Y"); ?>, <?php print $site_name; ?> </p> <p class="credits"> <?php print t('Designed and developed by'); ?>  <a href="http://about.me/ankithinglajia" target="_blank">Ankit Hinglajia</a></p></li>
          </ul>
        </div>
      </div>
