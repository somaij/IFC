<?php

// check if the flexible content field has rows of data
if( have_rows('page_content') ):

     // loop through the rows of data
    while ( have_rows('page_content') ) : the_row();

    if( get_row_layout() == 'cta' ):?>
    <section class="cta <?php the_sub_field('cta_colour'); ?>">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-column flex-lg-row align-items-center justify-content-around">
                    <p>
                        <?php the_sub_field('text');?>
                    </p>
                    <a href="<?php the_sub_field('link'); ?>" class="btn">
                        <?php the_sub_field('link_text'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php 
    elseif( get_row_layout() == 'text_block' ): ?>
    <section class="text-section">
        <div class="container">
        <div class="row">
                <div class="col">
                <h2><?php the_sub_field('header');?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <?php the_sub_field('body');?>
                </div>
            </div>
        </div>
    </section>
    <?php
    endif;
    endwhile;

else :

    the_content();
    // no layouts found

endif;

?>