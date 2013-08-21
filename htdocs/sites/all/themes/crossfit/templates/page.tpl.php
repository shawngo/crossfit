<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
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
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<div class="page_wrap">
<div class="wrapper">
<header>
          <div class="top">
                <div class="toplogo logo">
                  <a href="index.html">Fitness Club</a>
                </div><!--end:top-->

                <div class="topmenu">
    <?php if ($main_menu || $secondary_menu): ?>
      <div id="navigation"><div class="section">
          <?php print render($page['nav']); ?>
          <?php /* print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); */ ?>
      </div></div> <!-- /.section, /#navigation -->
    <?php endif; ?>

<?php /*
	  <nav id="smoothmenu1" class="ddsmoothmenu">
	    <ul>
                        <li><a href="index.html">Home</a>
                          <ul>
                                <li class="no-border"><a href="index.html">Camera Slider</a></li>
                                <li><a href="index2.html">Refine Slider</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                          <ul>
                                <li class="no-border"><a href="about.html">About</a></li>
                                <li><a href="elements.html">HTML Elements</a></li>
                                <li><a href="404page.html">404 Error</a></li>
                            </ul>
                        </li>
                        <li><a href="classes.html">Classes</a>
                          <ul>
                                <li class="no-border"><a href="classes.html">All Classes</a></li>
                                <li><a href="single-classes.html">Single Post Classes</a></li>
                            </ul>
                        </li>
                        <li><a href="trainers.html">Trainers</a>
                            <ul>
                                <li class="no-border"><a href="trainers.html">All Trainers</a></li>
                                <li><a href="single-trainer.html">Single Post Trainer</a></li>
                            </ul>
                        </li>
                        <li><a href="gallery.html">Gallery</a>
                            <ul>
                                <li class="no-border"><a href="gallery.html">Gallery Filterable</a></li>
                                <li><a href="gallery3.html">Gallery 3 Column</a></li>
                                <li><a href="gallery4.html">Gallery 4 Column</a></li>
                                <li><a href="gallery-sidebar.html">Gallery with Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="schedule.html">Schedule</a></li>
                        <li><a href="blog.html">Blog</a>
                            <ul>
                                <li class="no-border"><a href="single.html">Single</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
*/ ?>
                </div><!--end:top-->
            </div>
        <div class="breadcrumbs">
          <img src="/sites/all/themes/crossfit/images/breadcrumbs.jpg" alt="">
        </div>
        <p class="enroll" style=" float: right; margin: 0; padding: 0; margin-bottom: -45px; ">
          <a href="#">Register Now &raquo;</a>
        </p>
    </header>

    <div class="container_wrap">
        <section class="content-section">
          <div id="content" class="column"><div class="section">
            <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
            <a id="main-content"></a>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
            <?php print render($page['help']); ?>
            <?php print $messages; ?>
            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
            <?php print render($page['content']); ?>
            <?php print $feed_icons; ?>
          </div></div> <!-- /.section, /#content -->
        </section><!--end:content-->

      <aside class="sidebar">
        <?php if ($page['sidebar_first']): ?>
          <?php print render($page['sidebar_first']); ?>
        <?php endif; ?>

<?php /*
          <div class="side contactinfo">
              <span class="contact-no">+639-123-456-789</span>
                <p class="emailaddress">Email: <a href="#"> louiejiemahusay@gmail.com</a></p>
                <p><span>Philippines - Manila</span><br><span>Villa Precy, Kumintang Ilaya Batangas</span><br><span>4506</span></p><br>
            </div>
            <div class="side">
              <h2>Opening Hours</h2>
                <ul class="caltime">
                  <li><span><a href="#">Monday</a></span><small>9:00- 22:00</small></li>
                    <li><span><a href="#">Tuesday</a></span><small>8:00- 18:00</small></li>
                    <li><span><a href="#">Wednesday</a></span><small>8:00- 20:00</small></li>
                    <li><span><a href="#">Thursday</a></span><small>9:00- 23:00</small></li>
                    <li><span><a href="#">Friday</a></span><small>7:00- 22:00</small></li>
                </ul>
            </div>
*/ ?>
            <div class="side side-noborder">
               <h2>Recent Blog</h2>
                <div class="entry-thumb">
                  <div class="date">
                    <span>March <br><strong>25</strong><br> 2013</span><br>
                        <small><a href="#">10 Comments</a></small>
                    </div>
                    <div class="entry">
                        <div class="da-thumbs">
                            <div>
                            <img src="images/blog/blog-thumb-1.jpg" alt="">
                            <article class="da-animate da-slideFromRight">
                                <p><a href="blog.html" class="link"></a></p>
                            </article>
                            </div>
                         </div>
                         <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                     </div>
                 </div>
                 <div class="entry-thumb">
                  <div class="date">
                    <span>March <br><strong>23</strong><br> 2013</span><br>
                        <small><a href="#">7 Comments</a></small>
                    </div>
                    <div class="entry">
                        <div class="da-thumbs">
                            <div>
                            <img src="images/blog/blog-thumb-2.jpg" alt="">
                            <article class="da-animate da-slideFromRight">
                                <p><a href="blog.html" class="link"></a></p>
                            </article>
                            </div>
                         </div>
                         <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                     </div>
                 </div>
            </div>
        </aside><!--end:sidebar-->
    </div><!--end:container_wrap-->
    </div><!--end:wrapper-->
    <footer>
      <div class="container_wrap">
          <ul class="fade">          
             <li class="feed">Only a week Transform your body"<br>
               <small><a href="#">&mdash; Louie Jie Mahusay &mdash;</a></small>
             </li>
             <li class="feed">Great body and a heathy diet life style"<br>
                <small><a href="#">&mdash; John Doe &mdash;</a></small>
             </li>
             <li class="feed">"It's a nice inspiration to all who want to have a good body"<br>
               <small><a href="#">&mdash; James Smith &mdash;</a></small>  
             </li>
             <li class="feed">"Good site for the fitness life style"<br>
               <small><a href="#">&mdash; Doe John &mdash;</a></small>
              </li>
            </ul>

      <?php print render($page['footer']); ?>
<?php /*
          <div class="one-fourth first">
              <h3>Contact Info</h3>
                <div class="side contactinfo">
                    <span class="contact-no">+639-123-456-789</span>
                    <p class="emailaddress">Email: <a href="#"> louiejiemahusay@gmail.com</a></p>
                    <p><span>Philippines - Manila</span><br><span>Villa Precy, Kumintang Ilaya Batangas</span><br><span>4506</span></p>
                    <ul class="social">
                        <li><a href="#" class="tip facebook" title="Facebook"><img src="/sites/all/themes/crossfit/images/social-icon-facebook.png" alt="Facebook"></a></li>
                        <li><a href="#" class="tip twitter" title="Twitter"><img src="/sites/all/themes/crossfit/images/social-icon-twitter.png" alt="Twitter"></a></li>
                        <li><a href="#" class="tip vimeo" title="Vimeo"><img src="/sites/all/themes/crossfit/images/social-icon-vimeo.png" alt="Vimeo"></a></li>
                        <li><a href="#" class="tip youtube" title="Youtube"><img src="/sites/all/themes/crossfit/images/social-icon-youtube.png" alt="Youtube"></a></li>
                        <li><a href="#" class="tip rss" title="RSS"><img src="/sites/all/themes/crossfit/images/social-icon-rss.png" alt="RSS"></a></li>
                    </ul>
              </div>
            </div>
            <div class="one-fourth">
              <h3>Opening Hours</h3>
                <ul class="caltime">
                  <li><span><a href="#">Monday</a></span><small>9:00- 22:00</small></li>
                  <li><span><a href="#">Tuesday</a></span><small>8:00- 18:00</small></li>
                  <li><span><a href="#">Wednesday</a></span><small>8:00- 20:00</small></li>
                  <li><span><a href="#">Thursday</a></span><small>9:00- 23:00</small></li>
                  <li><span><a href="#">Friday</a></span><small>7:00- 22:00</small></li>
                </ul>
            </div>
*/ ?>
            <div class="one-fourth">
              <h3><?php print t('Twitter Updates'); ?></h3>
                <div class='tweet query'></div>
            </div>
            <div class="one-fourth">
              <h3><?php print t('Facebook Activity'); ?></h3>
              <?php /* https://developers.facebook.com/docs/reference/plugins/like-box/ 
              <div id="fb-root"></div>
              <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=108768075963398";
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));</script>
              <div class="fb-like-box" data-href="https://www.facebook.com/generalfinishesusa" data-width="252" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
              */ ?>
            </div>
            <?php print $copyright; ?>
        </div>
    </footer>
</div><!--end:page_wrap-->
<script type="text/javascript" src="/sites/all/themes/crossfit/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/sites/all/themes/crossfit/js/css3-mediaqueries.js"></script><!--mediaqueries-->
<script type="text/javascript" src="/sites/all/themes/crossfit/js/modernizr-1.7.min.js"></script><!--modernizr-->
<script type="text/javascript" src="/sites/all/themes/crossfit/js/ddsmoothmenu.js"> </script> <!--menu-->
<script type="text/javascript" src="/sites/all/themes/crossfit/js/jquery.prettyPhoto.js"></script><!-- prettyPhoto -->
<script type="text/javascript" src="/sites/all/themes/crossfit/js/jquery.tipsy.js"></script><!--tooltip-->
<script type="text/javascript" src="/sites/all/themes/crossfit/js/jquery-hover-effect.js"></script><!--Image Hover Effect-->
<script type="text/javascript" src="/sites/all/themes/crossfit/js/jquery.tweet.js"></script><!--twitter plugin-->
<script type="text/javascript" src="/sites/all/themes/crossfit/js/jquery.quovolver.js"></script><!--blockquote-->
<script type="text/javascript" src="/sites/all/themes/crossfit/js/organictabs.jquery.js"></script><!--tabs-->
<script type="text/javascript" src="/sites/all/themes/crossfit/js/custom.js"></script><!--custom-->    
<script type="text/javascript">
/* <![CDATA[ */
$(function () {
  //------Tabulation-------------
  $("#tab").organicTabs({
      "speed": 200
  });
});    
/* ]]> */
</script>
