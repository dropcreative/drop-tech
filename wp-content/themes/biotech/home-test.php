<?php

/*

     Template Name: Grid Template

  */

get_header(); ?>

 <!-- markup for slideshow 1-->


       <?php

$args = array(

  'post_type' => 'slideshow'

);

$query = new WP_Query ($args);


    ?>
     <div class="uk-slidenav-position uk-text-center" data-uk-slideshow="{kenburns:true, autoplay:true,autoplayInterval: 7000,}">

      <ul class="uk-slideshow"  >

    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <li class="sheight uk-overlay-active" >

          <img  class="uk-invisible"  width="" height="" alt="/*insert text dynamically*/" src="<?php the_field('slide_image'); ?>" >

        <div class="uk-overlay-panel uk-overlay-background  uk-animation-slide-right  uk-animation-5 swidth">

              <h3><?php the_field('slide_main_heading'); ?></h3>
              <h4>
                <?php the_field('secondary_heading'); ?>
              </h4>
              <a href="<?php the_field('file_for_current_slide'); ?><?php the_field('link_for_current_slide'); ?>" target="_blank" class="uk-button uk-button-primary">More</a>

              </div>




        </li>

<? endwhile; endif; wp_reset_postdata(); ?>
      </ul>
      <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
      <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
      <ul class="uk-dotnav uk-dotnav-contrast uk-flex-center uk-hidden-small dotnav">
           <?php
$postCount = 0; //Count posts starting from 0
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<?php
?>
        <li data-uk-slideshow-item="<?php echo $postCount; ?>"><a href="#"></a></li>
        <?php $postCount++;?>
        <? endwhile; endif; wp_reset_postdata(); ?>

<!--
        <li data-uk-slideshow-item="1"><a href="#"></a></li>
        <li data-uk-slideshow-item="2"><a href="#"></a></li>
        <li data-uk-slideshow-item="3"><a href="#"></a></li>
-->
      </ul>

</div>

<!-- markup for second slideshow-->


<?php

$args = array(

  'post_type' => 'textslide'

);

$query = new WP_Query ($args);


    ?>
     <div class="uk-slidenav-position uk-text-center" data-uk-slideshow="{fade:true, autoplay:true,autoplayInterval: 7000,}">

      <ul class="uk-slideshow"  >

    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <li class="uk-vertical-align textslide" style="background-color:<?php the_field( 'background_color' );?>">
<div class="uk-vertical-align-middle uk-text-center textslide-container" >

   <h2><?php the_field( 'heading' ); ?></h2>
<h3> <?php the_field( 'subheading' ); ?></h3><br>
<a href="<?php the_field( 'website_link' );?><?php the_field( 'file_link' );?>" target="_blank" class="uk-button uk-button-secondary uk-hidden<?php the_field( 'website_link' );?><?php the_field( 'file_link' );?>">Open</a><!-- uk-hidden used here if custom field is empty! -->
                    </div>
                </li>

<? endwhile; endif; wp_reset_postdata(); ?>
      </ul>
      <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
      <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
      <ul class="uk-dotnav uk-dotnav-contrast uk-flex-center uk-hidden-small dotnav">
           <?php
$postCount = 0; //Count posts starting from 0
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<?php
?>
        <li data-uk-slideshow-item="<?php echo $postCount; ?>"><a href="#"></a></li>
        <?php $postCount++;?>
        <? endwhile; endif; wp_reset_postdata(); ?>

<!--
        <li data-uk-slideshow-item="1"><a href="#"></a></li>
        <li data-uk-slideshow-item="2"><a href="#"></a></li>
        <li data-uk-slideshow-item="3"><a href="#"></a></li>
-->
      </ul>

</div>

<!-- markup for Grid Section-->



<?php

$args = array(
    'post_type' => 'grid'
);

$query = new WP_Query( $args );

?>

<div  class="grid-wrap">
    <div data-uk-grid data-uk-grid-match >

    <?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>

   <?php
if (get_field('table_row_1_column_1')) {
    echo
        " <div class='uk-width-small-1-1 uk-width-medium-1-3 quick'>
            <a href='";?><?php the_field( 'table_link' ); ?><?php echo"' target='_blank'>
            <table class='uk-table-striped droptable'>
                    <thead> </thead>
                    <caption align='bottom' class='uk-text-muted'>";?><?php the_field( 'table_information' ); ?><?php echo "</caption>
                    <tbody>
                    <tr><th class='uk-text-muted thead'>";?><?php the_field( 'table_heading' );?><?php echo"</th></tr>
                        <tr>
                            <th>";?><?php the_field( 'table_row_1_column_1' ); ?><?php echo "</th>
                            <td>";?><?php the_field( 'table_row_1_column_2' ); ?><?php echo "</td>
                        </tr>
                        <tr>
                            <th>";?><?php the_field( 'table_row_2_column_1' ); ?><?php echo "</th>
                            <td>";?><?php the_field( 'table_row_2_column_2' ); ?><?php echo "</td>
                        </tr>
                        <tr>
                            <th><span class='long-text'>";?><?php the_field( 'table_row_3_column_1' ); ?><?php echo "</span><span class='brief-text'></span>
                            </th>
                            <td>";?><?php the_field( 'table_row_3_column_2' ); ?><?php echo "</td>
                        </tr>
                        <tr>
                            <th><span class='long-text'>";?><?php the_field( 'table_row_4_column_1' ); ?><?php echo "</span><span class='brief-text'></span>
                            </th>
                            <td>";?><?php the_field( 'table_row_4_column_2' ); ?><?php echo "</td>
                        </tr>
                        <tr>
                            <th><span class='long-text'>";?><?php the_field( 'table_row_5_column_1' ); ?><?php echo "</span><span class='brief-text'></span>
                            </th>
                            <td>";?><?php the_field( 'table_row_5_column_2' ); ?><?php echo "</td>
                        </tr>
                        <tr>
                            <th><span class='long-text'>";?><?php the_field( 'table_row_6_column_1' ); ?><?php echo "</span><span class='brief-text'>";?><?php the_field( 'table_row_1_column_1' ); ?><?php echo "</span>
                            </th>
                            <td>";?><?php the_field( 'table_row_6_column_2' ); ?><?php echo "</td>
                        </tr>
                        <tr>
                            <th>";?><?php the_field( 'table_row_7_column_1' ); ?><?php echo "</th>
                            <td>";?><?php the_field( 'table_row_7_column_2' ); ?><?php echo "</td>
                        </tr>
                    </tbody>
                </table>";
} elseif(get_field('heading')){
             echo
                 "<div class='uk-width-small-1-1 uk-width-medium-1-3 quick'>";?>
                 <?php $icontext = get_field('icon'); // Get the icon here so we can get the alt value later ?>
           <?php echo"<a href='";?><?php the_field( 'external_link' ); ?><?php echo"' target='_blank'>
                <span class='fa";?> <?php echo $icontext["alt"]; // Get the alt value from the icon custom field ?><?php echo "fa-spin fa-2x'></span>
                <h2>";?><?php the_field( 'heading' );?><?php echo "</h2><p>";?><?php the_field( 'subheading' );?><?php echo "</p>
                <p><em>";?><?php the_field( 'attention_text' ); ?><?php echo "</em></p>";
}else{
             echo
                 "<div class='uk-width-small-1-1 uk-width-medium-1-3 quick'>
                <div class='customgrid'>";?><?php the_field( 'custom_content' );?><?php echo "</div>";
}
?>
            </a>
        </div>

    <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>



<?php get_footer(); ?>
