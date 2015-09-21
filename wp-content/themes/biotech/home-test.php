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

               <?php $icontext = get_field('icon'); // Get the icon here so we can get the alt value later ?>
                <div class="uk-width-small-1-1 uk-width-medium-1-3 quick">
            <a href="<?php the_field( 'external_link' ) ?>" target="_blank">
                <span class="fa <?php echo $icontext['alt']; // Get the alt value from the icon custom field ?> fa-spin fa-2x"></span>
                <h2><?php the_field( 'heading' );?></h2><p><?php the_field( 'subheading' );?></p>
            </a>
        </div>

    <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>
</div>


<div  style="background:pink; width: 100%;">
    <div data-uk-grid data-uk-grid-match >
        <div class="uk-width-small-1-1 uk-width-medium-1-3 quick">
            <a href="pdf/investorFactSheetAndTimeline.pdf" target="_blank">
                <span class="fa fa-cog fa-spin fa-2x"></span>
                <h2>Drop Report</h2><p>Read about our latest report</p>
            </a>
        </div>
        <div class="uk-width-small-1-1 uk-width-medium-1-3 quick">
            <a href="shares.html" target="_blank">
                <table class="uk-table-striped">
                    <thead> </thead>
                    <caption align="bottom" class="uk-text-muted">*As at 17 September  2015 | °As at 17 September 2015</caption>
                    <tbody>
                        <tr>
                            <th>ASX code</th>
                            <td> NRT</td>
                        </tr>
                        <tr>
                            <th>NASDAQ code</th>
                            <td>NVGN</td>
                        </tr>
                        <tr>
                            <th><span class="long-text">Share price AUD* - 17/SEP/2015</span><span class="brief-text">Shares* AUD</span>
                            </th>
                            <td>14.5cents</td>
                        </tr>
                        <tr>
                            <th><span class="long-text">Share price USD° - 17/SEP/2015</span><span class="brief-text">Shares^ USA</span>
                            </th>
                            <td>$2.79</td>
                        </tr>
                        <tr>
                            <th><span class="long-text">Number of shares</span><span class="brief-text">No. of Shares</span>
                            </th>
                            <td>~424m</td>
                        </tr>
                        <tr>
                            <th><span class="long-text">Market capitalisation AUD</span><span class="brief-text">Market Cap AUD</span>
                            </th>
                            <td>~$61.49m</td>
                        </tr>
                        <tr>
                            <th>52 week range</th>
                            <td>46c/8cents</td>
                        </tr>
                    </tbody>
                </table>
            </a>
        </div>
        <div class="uk-width-small-1-1 uk-width-medium-1-3 quick">
            <a href="blog.html">
                <span class="fa fa-cog fa-spin fa-2x"></span>
                <h2>Drop Presentation</h2><p>Read our Latest Presentation</p></a>
        </div>
        <div class="uk-width-small-1-1 uk-width-medium-1-3 quick">
            <span class="fa fa-cog fa-spin fa-2x"></span>

            <h2>Drop Announcements</h2>
            <p>View our latest announcements here</p>
            </a>
    </div>
    <div class="uk-width-small-1-1 uk-width-medium-1-3 quick">
        <a href="events.html">
            <span class="fa fa-cog fa-spin fa-2x"></span>
            <h2>Drop Overview</h2>
            <p>Some relevant Content here</p>
        </a>
    </div>
    <div class="uk-width-small-1-1 uk-width-medium-1-3 quick">
        <a href="blog.html">
            <span class="fa fa-cog fa-spin fa-2x"></span>
            <h2>Current Events</h2><p>Read about our events</p></a>
    </div>
    <div class="uk-width-small-1-1 uk-width-medium-1-3 quick">
        <span class="fa fa-cog fa-spin fa-2x"></span>
        <h2>Drop Newsletter</h2>
        <p>Some relevant Content here</p>
        </a>
</div>
<div class="uk-width-small-1-1 uk-width-medium-2-3 quick">
    <a href="events.html">
        <span class="fa fa-cog fa-spin fa-2x"></span>
        <h2>Investor Information</h2>
        <p>Some relevant Content here</p>
    </a>
</div>
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
