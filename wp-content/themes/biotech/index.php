<?php get_header(); ?>

    <!-- markup for slideshow 1-->
    <div class="uk-slidenav-position" data-uk-slideshow="{kenburns:true, autoplay:true,autoplayInterval: 7000,}">
      <ul class="uk-slideshow first-show">
<!--
        <li class="uk-cover-background">
          <img  class="uk-invisible" alt="CanTx Stronger in Partnership" src="<?php echo get_bloginfo('template_directory');?>/img/can-tx-header-graphic.jpg">
          <div class="uk-caption uk-caption-panel  uk-vertical-align uk-animation-fade uk-text-center">
            <div class="uk-vertical-align-middle uk-text-center">
              <img class="uk-conatiner-center uk-align-center" src="<?php echo get_bloginfo('template_directory');?>/img/logo-tagline.png">
            </div>
          </div>
        </li>
-->

              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <li class="uk-cover-background" >
          <img  class="uk-invisible"  width="" height="" alt="CanTx Stronger in Partnership" src="<?php echo get_bloginfo('template_directory');?>/img/slide1.jpg" >
          <div class="uk-caption uk-caption-panel uk-animation-slide-right  uk-text-center">
            <div class="caption-text">
              <h3><?php the_title(); ?></h3>
              <h4>
                <?php the_content(); ?>
              </h4>
              <a href="<?php the_permalink(); ?>" target="_blank" class="uk-button uk-button-primary">More</a>
            </div>
          </div>
        </li>

        <?php endwhile; else : ?>

  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php endif; ?>

        <li class="uk-cover-background" >
          <img  class="uk-invisible" alt="stem cell" src="<?php echo get_bloginfo('template_directory');?>/img/slide2.jpg" >
          <div class="uk-caption uk-caption-panel uk-animation-slide-right  uk-text-center">
            <div class="caption-text">
              <h3>Yale University and Novogen Release Data on Cantrixil Mode of Action</h3>
              <h4>Novogen today announced the lodgement of final specifications of a patent that covers the Company’s first family of super-benzopyran compounds</h4>
              <a href="pdf/asx11Feb2015.pdf" target="_blank" class="uk-button uk-button-primary">More</a>
            </div>
          </div>
        </li>
        <li class="uk-cover-background">
          <img class="uk-invisible"  width="" height="" alt="infected cell" src="<?php echo get_bloginfo('template_directory');?>/img/slide3.jpg">
          <div class="uk-caption uk-caption-panel uk-animation-slide-right uk-text-center">
            <div class="caption-text">
              <h3>Briefing Presentation by Dr Gil Mor on Cantrixil</h3>
              <h4>Dr Gil Mor's slide show presentation during the Investor Briefing held on 18 February 2015 at the Yale Club in New York "In Vitro and In Vivo Efficacy of a novel Superbenzopyran analogue Trx-1 against Ovarian Cancer Stem Cells"</h4>
              <a href="https://youtu.be/evsZau6WEXc" target="_blank" class="uk-button uk-button-primary">More</a>
            </div>
          </div>
        </li>
      </ul>
      <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
      <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
      <ul class="uk-dotnav uk-dotnav-contrast uk-text-center uk-hidden-small">
        <li data-uk-slideshow-item="0"><a href="#"></a></li>
        <li data-uk-slideshow-item="1"><a href="#"></a></li>
        <li data-uk-slideshow-item="2"><a href="#"></a></li>
        <li data-uk-slideshow-item="3"><a href="#"></a></li>
      </ul>
    </div>
    <!-- markup for slideshow 2-->
    <div data-uk-slideshow="{autoplay:true,autoplayInterval: 9000, fade: true,}">
      <ul class="uk-slideshow uk-vertical-align uk-text-center second-show">
        <li class="uk-vertical-align">
          <div class="uk-vertical-align-middle uk-text-center slide-spacing">
            <h4 class="uk-text-center">
              NOVOGEN has developed super-benzopyran (SBP) drugs designed to kill chemo-resistant cancer stem cells.
              <br><br>
              YALE has uniquely identified and isolated the ovarian cancer stem cells that are responsible for tumor formation, heterogeneity, chemo-resistance and recurrence.
              <br><br>
              This union has produced Cantrixil®, a product designed to be administered intra-peritoneally to patients with cancers confined to the abdominal cavity, starting with patients with ovarian cancer.
            </h4>
          </div>
        </li>
        <li class="uk-vertical-align">
          <div class="uk-vertical-align-middle uk-text-center slide-spacing">
            <h3>CanTx is focused on the development of therapeutics for the treatment of those cancers that arise in the abdominal cavity. The main cancers in question are those of the ovaries, pancreas and bowel.</h3>
            <a href="pdf/cantrixil.pdf" target="_blank" class="uk-button uk-button-secondary" >Read More</a>
          </div>
        </li>
        <li class="uk-vertical-align">
          <div class="uk-vertical-align-middle uk-text-center slide-spacing">
            <h3>CanTx brings together the collective resources of Novogen and Yale University with the objective of making a generational leap forward in the treatment of some of the most deadly cancers that our community faces.</h3>
          </div>
        </li>
      </ul>
    </div>
    <!-- markup for Grid Section-->
    <ul class="uk-grid uk-grid-preserve">
      <li class="block-one uk-width-medium-1-3">
        <a href="pdf/investorFactSheetAndTimeline.pdf" target="_blank"><img  src="<?php echo get_bloginfo('template_directory');?>/img/atom-green.svg" alt="icon of atom">
          <h2>Technology</h2><p>Read about our breakthrough technology</p>
        </a>
      </li>
      <li class="block-two uk-width-medium-2-3">
        <a href="#latest-presentation-modal" data-uk-modal><img  src="<?php echo get_bloginfo('template_directory');?>/img/presentation-green.svg" alt="Corporate Presentation">
          <h2>Latest Presentation</h2>
          <p>View CanTx's Latest Presentation</p>
        </a>
      </li>
    </ul>
    <ul class="uk-grid uk-grid-preserve"  style="margin-top: 0">
      <li class="block-four uk-width-medium-2-6"><a href="blog.html">
        <img  src="<?php echo get_bloginfo('template_directory');?>/img/news-read-green.svg" alt="CEO Blog">
        <h2>CEO's Message</h2><p>Read our CEO's blog posts </p></a>
      </li>
      <li class="block-five uk-width-medium-2-6">
        <img  src="<?php echo get_bloginfo('template_directory');?>/img/stopwatch-green.svg" alt="quick overview">
        <h2>Cantrixil overview</h2>
        <p>Some relevant Content here</p>
      </a>
    </li>
  <li class="block-six uk-width-medium-2-6">
    <a href="events.html"><img  src="<?php echo get_bloginfo('template_directory');?>/img/calendar-green.svg" alt="current events">
      <h2>Current Events</h2>
      <p>Some relevant Content here</p>
    </a>
  </li>
  </ul>
<!-- Markup for the Modal Windows -->

<div id="latest-presentation-modal" class="uk-modal">
  <div class="uk-modal-dialog uk-modal-dialog-large">
    <a class="uk-modal-close uk-close"></a>
    <div class="uk-modal-header">CanTx Latest Presentation</div>
    <div class="videoWrapper">
      ...<iframe class="uk-responsive-width" width="560" height="349" src="http://www.youtube.com/embed/evsZau6WEXc?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
      <div class="uk-modal-footer">Thank you for your interest</div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
