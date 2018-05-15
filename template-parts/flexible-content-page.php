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
    <section class="text-section <?php the_sub_field('background_colour'); ?>">
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
    elseif( get_row_layout() == 'text_block_image' ): ?>
    <section class="text-image-section">
        <div class="container-fluid <?php the_sub_field('background_colour'); ?>">
            <div class="row d-flex <?php the_sub_field('image_position'); $ip=get_sub_field('image_position'); if ($ip == 'Right') {
                echo ' flex-md-row-reverse';
            }?>">
                <div class="col-12 col-md-6" style="padding:0;">
                <img src="<?php the_sub_field('image');?>"/>
                </div>
                <div class="col-12 col-md-6 text">
                <h2><?php the_sub_field('header');?></h2>
                <?php the_sub_field('body');?>
                </div>
                
            </div>
        </div>
    </section>
    <?php
    endif;
    endwhile;

else :?>
<div class="container">
        <div class="row">
                <div class="col">
<?php    the_content();
    // no layouts found ?>
            </div>
    </div>
</div>
<?php
endif;

?>