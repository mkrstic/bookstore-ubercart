<?php

/**
 * @file
 * Boldy's theme implementation to display the front page.
 *
 * This template has no content area as the design doesn't allow for it.
 * If you require content to show up on the front page, copy and paste the
 * content related regions from page.tpl.php into this template or remove this
 * template all together.
 * Remember to clear your site caches after editing or removing any template
 * files.
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system folder.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/boldy.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
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
 * - $page['header']: Items for the header region.
 * - $page['nav_bar']: Items for the navigation bar region.
 * - $page['search_box']: Items for the search box region. Replaces Search in D6
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['slider']: Items for the slider content region.
 * - $page['mission']: Items for the mission region. Replaces $mission in D6
 * - $page['home_boxes']: Items for the hoiem boxes region.
 * - $page['right']: Items for the right sidebar.
 * - $page['footer_actions']: Items for the footer action region.
 * - $page['footer_message']: Items for the footer message region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see boldy_process_page()
 */
?>
  <?php print render($page['header']); ?>
    <div id="mainWrapper"> <!-- BEGIN MAINWRAPPER -->
      <div id="wrapper" class="clearfix"> <!-- BEGIN WRAPPER -->
        <div id="header"> <!-- BEGIN HEADER -->
          <?php if ($logo || $site_title): ?>
            <div id="logo"><h1>
              <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print $site_title; ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name_and_slogan; ?>" id="logo" /></a>
              <?php endif; ?>
              <?php if ($site_title): ?>
                <a href="<?php print $front_page; ?>" title="<?php print $site_title; ?>"><?php print $site_html; ?></a>
              <?php endif; ?>
            </h1></div>
          <?php endif; ?>
          <div id="mainMenu"> <!-- BEGIN MAIN MENU -->
            <?php if ($primary_nav): print $primary_nav; endif; ?>
            <?php if ($secondary_nav): print $secondary_nav; endif; ?>
            <?php if ($page['nav_bar']): ?>
              <?php print render($page['nav_bar']); ?>
            <?php endif; ?>
          </div> <!-- END MAIN MENU -->
          <?php if ($page['search_box']): ?>
            <div id="topSearch"> <!-- BEGIN TOP SEARCH -->
              <?php print render($page['search_box']); ?>
            </div> <!-- END TOP SEARCH -->
          <?php endif; ?>
          <div id="topSocial"> <!-- BEGIN TOP SOCIAL LINKS -->
            <ul>
              <?php if (theme_get_setting('boldy_linkedin_link') != ""): ?>
                <li><a href="<?php print theme_get_setting('boldy_linkedin_link'); ?>" class="linkedin" title="Join us on LinkedIn!"><img src="<?php print base_path() . drupal_get_path('theme', 'boldy'); ?>/images/ico_linkedin.png" alt="LinkedIn" /></a></li>
              <?php endif; ?>
              <?php if (theme_get_setting('boldy_twitter_user') != ""): ?>
                <li><a href="http://www.twitter.com/<?php print theme_get_setting('boldy_twitter_user'); ?>" class="twitter" title="Follow Us on Twitter!"><img src="<?php print base_path() . drupal_get_path('theme', 'boldy'); ?>/images/ico_twitter.png" alt="Follow Us on Twitter!" /></a></li>
              <?php endif; ?>
              <?php if (theme_get_setting('boldy_facebook_link') != ""): ?>
                <li><a href="<?php print theme_get_setting('boldy_facebook_link'); ?>" class="twitter" title="Join Us on Facebook!"><img src="<?php print base_path() . drupal_get_path('theme', 'boldy'); ?>/images/ico_facebook.png" alt="Join Us on Facebook!" /></a></li>
              <?php endif; ?>
              <li><a href="/rss" title="RSS" class="rss"><img src="<?php print base_path() . drupal_get_path('theme', 'boldy'); ?>/images/ico_rss.png" alt="Subcribe to Our RSS Feed" /></a></li>
            </ul>
          </div> <!-- END TOP SOCIAL LINKS -->
        </div> <!-- END HEADER -->
        <div id="content"> <!-- BEGIN CONTENT -->
          <?php if ($page['slider']): ?>
            <div id="slider-wrapper">
              <div id="slider"> <!-- BEGIN SLIDER -->
                <?php print render($page['slider']); ?>
              </div> <!-- END SLIDER -->
            </div>
          <?php endif; ?>
          <?php if ($page['mission']): ?>
            <div id="blurb"> <!-- BEGIN BLURB -->
              <p>
                <a href="<?php print theme_get_setting('boldy_blurb_link'); ?>"><img src="<?php print drupal_get_path('theme', 'boldy'); ?>/images/but_blurb.png" alt="Contact Us" /></a>
                <?php print render($page['mission']); ?>
              </p>
            </div> <!-- END BLURB -->
          <?php endif; ?>
          <!-- begin home boxes -->
          <?php if ($page['home_boxes']): ?>
            <div id="homeBoxes" class="clearfix">
              <?php print render($page['home_boxes']); ?>
            </div> <!-- end home boxes -->
          <?php endif; ?>
          <!-- END HOME CONTENT -->
        </div> <!-- END CONTENT -->
      </div> <!-- END WRAPPER -->
      <div id="footer"> <!-- BEGIN FOOTER -->
        <?php if (theme_get_setting('boldy_footer_actions')): ?>
          <div style="width:960px; margin: 0 auto; position:relative;">
            <a href="#" id="showHide" <?php if (theme_get_setting('boldy_actions_hide') == "hidden"): print 'style="background-position:0 -16px"';
            endif; ?>>Show/Hide Footer Actions</a>
          </div>
          <div id="footerActions" <?php if (theme_get_setting('boldy_actions_hide') == "hidden"): print 'style="display:none"';
            endif; ?>>
            <div id="footerActionsInner">
              <?php if (theme_get_setting('boldy_twitter_user') != "" && theme_get_setting('boldy_latest_tweet')): ?>
                <div id="twitter">
                  <a href="http://twitter.com/<?php print theme_get_setting('boldy_twitter_user'); ?>" class="action">Follow Us!</a>
                  <div id="latest">
                    <div id="tweet">
                      <div id="twitter_update_list"></div>
                    </div>
                    <div id="tweetBottom"></div>
                  </div>
                </div>
              <?php endif; ?>
              <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
              <script type="text/javascript" src="http://twitter.com/statuses/user_timeline/<?php print theme_get_setting('boldy_twitter_user'); ?>.json?callback=twitterCallback2&amp;count=<?php
            if (theme_get_setting('boldy_number_tweets') != "") {
              print theme_get_setting('boldy_number_tweets');
            }
            else {
              print "1";
            }
            ?>">
              </script>
              <?php if ($page['footer_actions']): ?>
                <div id="quickContact">
                  <?php print render($page['footer_actions']); ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>
        <div id="footerWidgets">
          <div id="footerWidgetsInner">
            <?php if ($page['footer']): ?>
              <?php print render($page['footer']); ?>
            <?php endif; ?>
            <?php if ($page['footer_message']): ?>
              <div id="copyright"> <!-- BEGIN COPYRIGHT -->
                <?php print render($page['footer_message']); ?>
              </div> <!-- END COPYRIGHT -->
            <?php endif; ?>
          </div>
        </div>
      </div> <!-- END FOOTER -->
    </div> <!-- END MAINWRAPPER -->
