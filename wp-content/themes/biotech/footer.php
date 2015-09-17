<footer>
  <div class="uk-grid grey">


       <div class="uk-width-1-1 uk-width-medium-1-3 uk-vertical-align uk-vertical-align-middle">
<div class="sign-up">
<!-- Mailchimp Signup -->
<?php echo do_shortcode('[mc4wp_form]'); ?>
</div>

    </div>

       <ul class="social-footer uk-visible-small uk-list uk-width-1-1 uk-width-medium-1-3 uk-vertical-align uk-vertical-align-middle uk-text-center">
      <li>        <a href="https://twitter.com/cantx_inc" target="_blank" class="uk-icon-large uk-icon-hover uk-icon-twitter"></a>
      </li>
      <li>        <a href="https://www.linkedin.com/company/novogen" target="_blank" class="uk-icon-large uk-icon-hover uk-icon-linkedin"></a>
      </li>
      <li>        <a href="https://www.youtube.com/channel/UCzNMflCMfqL-kTzanKU-gDQ" target="_blank" class="uk-icon-large uk-icon-hover uk-icon-youtube"></a>
      </li>
    </ul>
    <ul class="social-footer-hidden-small uk-hidden-small uk-list uk-width-1-1 uk-width-medium-1-3 uk-vertical-align uk-vertical-align-middle uk-text-center">
      <li>        <a href="https://twitter.com/cantx_inc" target="_blank" class="uk-icon-large uk-icon-hover uk-icon-twitter"></a>
      </li>
      <li>        <a href="https://www.linkedin.com/company/novogen" target="_blank" class="uk-icon-large uk-icon-hover uk-icon-linkedin"></a>
      </li>
      <li>        <a href="https://www.youtube.com/channel/UCzNMflCMfqL-kTzanKU-gDQ" target="_blank" class="uk-icon-large uk-icon-hover uk-icon-youtube"></a>
      </li>
    </ul>
    <div class="uk-vertical-align uk-vertical-align-middle uk-width-1-1 uk-width-medium-1-3 footer-nav-wrap" >

        <?php

$defaults = array(
  'theme_location'  => 'footer-menu',
  'menu'            => '',
  'container'       => false,
  'container_class' => '',
  'container_id'    => '',
  'menu_class'      => 'uk-list footer-links',
  'menu_id'         => '',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth'           => 0,
  'walker'          => '',

);

wp_nav_menu( $defaults );

?>

    </div>



  </div>
  <div class="code-of-best-practice uk-width-1-1">
    <a href="http://www.ausbiotech.org/content.asp?pageid=172" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/img/Code-of-Best-Practice.png" alt="Code of Best Practice"></a>
         <div class="uk-text-muted uk-text-right uk-margin-bottom uk-margin-right">Copyright <?php echo date('Y'); ?></li>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
