<?php

/*

     Template Name: Grid Template

  */

get_header(); ?>

<!-- markup for Grid Section-->



<?php

$args = array(
    'post_type' => 'grid'
);

$query = new WP_Query( $args );

?>

<div  style="background:pink; width: 100%;">
    <div data-uk-grid data-uk-grid-match >

    <?php if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>

   <?php
if (get_field('table_row_1_column_1')) {
    echo
        " <div class='uk-width-small-1-1 uk-width-medium-1-3 quick'>
            <a href='";?><?php the_field( 'table_link' ); ?><?php echo"' target='_blank'>
            <table class='uk-table-striped'>
                    <thead> </thead>
                    <caption align='bottom' class='uk-text-muted'>";?><?php the_field( 'table_information' ); ?><?php echo "</caption>
                    <tbody>
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
} else {
             echo
                 "<div class='uk-width-small-1-1 uk-width-medium-1-3 quick'>";?>
                 <?php $icontext = get_field('icon'); // Get the icon here so we can get the alt value later ?>
           <?php echo"<a href='";?><?php the_field( 'external_link' ); ?><?php echo"' target='_blank'>
                <span class='fa";?> <?php echo $icontext["alt"]; // Get the alt value from the icon custom field ?><?php echo "fa-spin fa-2x'></span>
                <h2>";?><?php the_field( 'heading' );?><?php echo "</h2><p>";?><?php the_field( 'subheading' );?><?php echo "</p>
                <p><em>";?><?php the_field( 'attention_text' ); ?><?php echo "</em></p>";
}
?>
            </a>
        </div>

    <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>
</div>


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
