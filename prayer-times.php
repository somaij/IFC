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
                    <?php get_template_part( 'template-parts/prayer-times');
                    if( have_rows('prayer_times', 'option') ):?>
 <table>
    <?php while ( have_rows('prayer_times', 'option') ) : the_row();

       $start = get_sub_field('start_date');
        $start_date_time = DateTime::createFromFormat('Y-m-d', $start);
        $start_date = $start_date_time->format('F j');
      echo $start_date;
    endwhile;?>
</table>
   <?php else :

endif;?>
                </div>
                
            </div>
        </div>
    <?php
get_footer();