<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(); ?></title>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_bloginfo('template_directory');?>/img/favicons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_bloginfo('template_directory');?>/img/favicons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_bloginfo('template_directory');?>/img/favicons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_bloginfo('template_directory');?>/img/favicons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_bloginfo('template_directory');?>/img/favicons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_bloginfo('template_directory');?>/img/favicons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_bloginfo('template_directory');?>/img/favicons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_bloginfo('template_directory');?>/img/favicons/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory');?>/img/favicons/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory');?>/img/favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory');?>/img/favicons/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory');?>/img/favicons/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory');?>/img/favicons/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
    <meta name="description" content="Novogen and Yale University joint venture. Novogen has developed super-benzopyran (SBP) drugs designed to kill chemo-resistant cancer stem cells. Yale has uniquely identified and isolated the ovarian cancer stem cells that are responsible for tumor formation, heterogeneity, chemo-resistance and recurrence. This union has produced Cantrixil®, a product designed to be administered intra-peritoneally to patients with cancers confined to the abdominal cavity, starting with patients with ovarian cancer.">
    <meta name="keywords" content="CanTx brings together the collective resources of Novogen and Yale University with the objective of making a generational leap forward in the treatment of some of the most deadly cancers that our community faces." />

    <?php wp_head(); ?>

    <!--
<script>
(function(i, s, o, g, r, a, m) {
i['GoogleAnalyticsObject'] = r;
i[r] = i[r] || function() {
(i[r].q = i[r].q || []).push(arguments)
}, i[r].l = 1 * new Date();
a = s.createElement(o),
m = s.getElementsByTagName(o)[0];
a.async = 1;
a.src = g;
m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
ga('create', 'UA-55268236-1', 'auto');
ga('send', 'pageview');
</script>
-->
  </head>
  <body <?php body_class(); ?>>
    <div class="social-bar uk-hidden-small uk-flex uk-flex-right">
      <div class="uk-margin-right">
        <a href="contact.html" class="uk-icon-medium uk-icon-hover uk-icon-envelope-o"></a>
        <a href="https://www.youtube.com/channel/UCzNMflCMfqL-kTzanKU-gDQ" target="_blank" class="uk-icon-medium uk-icon-hover uk-icon-youtube"></a>
        <a href="https://twitter.com/cantx_inc" target="_blank" class="uk-icon-medium uk-icon-hover uk-icon-twitter"></a>
        <a href="https://www.linkedin.com/company/novogen" target="_blank" class="uk-icon-medium uk-icon-hover uk-icon-linkedin"></a>
      </div>
    </div>
    <nav class="uk-navbar uk-navbar-attached" data-uk-sticky>
      <a class="logo" href="<?php bloginfo('url'); ?>">
        <img src="<?php echo get_bloginfo('template_directory');?>/img/logo.png" alt="CanTx web site">
      </a>

      <?php

$defaults = array(
  'theme_location'  => 'primary-menu',
  'menu'            => '',
  'container'       => false,
  'container_class' => '',
  'container_id'    => '',
  'menu_class'      => 'uk-navbar-nav uk-navbar-flip uk-hidden-small',
  'menu_id'         => '',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth'           => 0,
  'walker'          => new walker_uikits(),

);

wp_nav_menu( $defaults );


    ?>

<!--
      <ul class="uk-navbar-nav uk-navbar-flip uk-hidden-small">
        <li class="menu-item">
          <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    </li>
  <li class="menu-item" data-uk-dropdown>
    <a href="about.html">About</a>
    <div class="long-list uk-dropdown uk-dropdown-navbar">
      <ul class="uk-nav uk-nav-navbar">
        <li>
          <a href="ceo-welcome.html">CEO Welcome</a>
        </li>
        <li>
          <a href="management.html">Management</a>
        </li>
      </ul>
    </div>
  </li>

<li class="menu-item" data-uk-dropdown>
<a href="technology.html">Technology</a>
</li>

  <li class="menu-item" data-uk-dropdown>
    <a href="research.html">Research</a>
    <div class="long-list uk-dropdown uk-dropdown-navbar">
      <ul class="uk-nav uk-nav-navbar">
        <li>
          <a href="research-data.html">RESEARCH DATA</a>
        </li>
        <li>
          <a href="latest-presentations.html">PRESENTATIONS</a>
        </li>
        <li>
          <a href="publications.html">PUBLICATIONS</a>
        </li>
      </ul>
    </div>
  </li>
  <li class="menu-item">
    <a href="latest-news.html">Latest News</a>
  </li>
  <li class="menu-item">
    <a href="contact.html">Contact</a>
  </li>
  </ul>
-->
<a href="#mobi-nav" class="uk-navbar-toggle uk-visible-small uk-float-right" data-uk-offcanvas>MENU</a>
</nav>
<div id="mobi-nav" class="uk-offcanvas">
  <div class="uk-offcanvas-bar">


   <?php

$defaults = array(
  'theme_location'  => 'offcanvas-menu',
  'menu'            => '',
  'container'       => false,
  'container_class' => '',
  'container_id'    => '',
  'menu_class'      => 'uk-nav uk-nav-offcanvas uk-nav-parent-icon',
  'menu_id'         => '',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap'      => '<ul id="%1$s" class="%2$s" data-uk-nav >%3$s</ul>',
  'depth'           => 0,
  'walker'          => new walker_uikits_offcanvas(),

);

wp_nav_menu( $defaults );

?>

<!--
    <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav>
      <li>
        <a href="">MENU</a>
      </li>
      <li class="uk-active">
        <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
      </li>
      <li class="uk-parent">
        <a href="#">ABOUT</a>
        <ul class="uk-nav-sub">
          <li>
            <a href="about.html">ABOUT PAGE</a>
          </li>
          <li>
            <a href="ceo-welcome.html">CEO WELCOME</a>
          </li>
          <li>
            <a href="management.html">MANAGEMENT</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="technology.html">TECHNOLOGY</a>
      </li>
      <li class="uk-parent">
        <a href="#">RESEARCH</a>
        <ul class="uk-nav-sub">
          <li><a href="research-data.html">RESEARCH DATA</a></li>
          <li>
            <a href="latest-presentations.html">PRESENTATIONS</a>
          </li>
          <li>
            <a href="publications.html">PUBLICATIONS</a>
          </li>
        </ul>
      </li>
-->
<!--
      <li class="uk-nav-header">Connect with us</li>
      <li>
        <a href="contact.html"><i class="uk-icon-envelope-o"></i> Contact</a>
      </li>
      <li>
        <a href="https://www.youtube.com/channel/UCzNMflCMfqL-kTzanKU-gDQ" target="_blank"><i class="uk-icon-youtube"></i> YouTube</a>
      </li>
      <li>
        <a href="https://twitter.com/cantx_inc" target="_blank"><i class="uk-icon-twitter"></i> Twitter</a>
      </li>
      <li>
        <a href="https://www.linkedin.com/company/novogen" target="_blank"><i class="uk-icon-linkedin"></i> LinkedIn</a>
      </li>
-->
<!--    </ul>-->
  </div>
</div>
