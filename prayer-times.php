<?php
/**
 * Template Name: Prayer Times Page
 * @package IFC
 */

get_header();
get_template_part( 'template-parts/page-header');?>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php the_content();?>
            </div>
            <div class="col-12 col-sm-3">

                <h3>Today's Prayer Times</h3>
                <?php get_template_part( 'template-parts/prayer-times');
                wp_reset_query();
                    if( have_rows('prayer_times', 'option') ):?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table id="prayer-times-full">
                    <thead>
                        <th>Start Date</th>
                        <th>Fajr</th>
                        <th>Shurūq</th>
                        <th>Żuhr</th>
                        <th>Asr</th>
                        <th>Maghrib</th>
                        <th>Īshā</th>
                    </thead>
                    <?php while ( have_rows('prayer_times', 'option') ) : the_row();
    $start = get_sub_field('start_date');
    $start_date_time = DateTime::createFromFormat('Y-m-d', $start);
    $start_date = $start_date_time->format('F j');
    $start_month = $start_date_time->format('mm');
    echo '<tr class="';
    echo ($start_month & 1 ? 'dark-brown-on-left' : 'light-brown-on-left');
    echo '">';
        echo '<td>' . $start_date . '</td>';
        echo '<td>' . get_sub_field('fajr') . '</td>';
        echo '<td>' . get_sub_field('shuruq') . '</td>';
        echo '<td>' . get_sub_field('zuhr') . '</td>';
        echo '<td>' . get_sub_field('asr') . '</td>';
        echo '<td>' . get_sub_field('mag') . '</td>';
        echo '<td>' . get_sub_field('isha') . '</td>';
    echo '</tr>';
    endwhile;?>
                </table>
                <br>
                <?php else :

endif;?>
            </div>

        </div>
    </div>
    <?php
get_footer();