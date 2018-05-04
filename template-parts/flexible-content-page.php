<?php

// check if the flexible content field has rows of data
if( have_rows('page_content') ):

     // loop through the rows of data
    while ( have_rows('cta') ) : the_row();?>

    <section class="cta <?php the_sub_field('cta_colour'); ?>">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-column flex-lg-row align-items-center justify-content-around">
                    <p><?php the_sub_field('text');?></p>
                    <a href="<?php the_sub_field('link'); ?>" class="btn"><?php the_sub_field('link_text'); ?></a>
                </div>
            </div>
        </div>


    <?php endwhile;

else :

    // no layouts found

endif;

?>