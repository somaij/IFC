<?php
/**
 * Template Name: Tariqa Page
 * @package IFC
 */

get_header();
get_template_part( 'template-parts/page-header');?>
        <div class="container">
            <div class="row">
                <div class="col">
                <?php the_content();?>
                </div>
                
            </div>
        </div>
<section class="timeline">
    <div class="container">
        <div class="row">
            
<?php

// check if the repeater field has rows of data
if( have_rows('timeline') ):

 	// loop through the rows of data
    while ( have_rows('timeline') ) : the_row();

        // display a sub field value
        echo '<div class="col col-sm-2"><h2>';
        the_sub_field('year');
        echo '</h2></div>';
        echo '<div class="col-sm-10"><h3>';
        the_sub_field('title');
        echo '</h3>';
        echo '<p>';
        the_sub_field('body');
        echo '</p></div>';

    endwhile;

else :

    // no rows found

endif;

?>

            </div>
        </div>
</section>    
    <?php
get_footer();