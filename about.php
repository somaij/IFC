<?php
/**
 * Template Name: About Us Page
 * @package IFC
 */

get_header();
?>
<section class="page-header text-white" style="background-image:url(<?php the_post_thumbnail_url();?>">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column align-items-center justify-content-center">
                <h1><?php the_field( 'page_header' ); ?></h1>
                <?php the_field( 'page_header_content' ); ?>
                <br><a href="<?php the_field( 'page_header_link' ); ?>" class="btn white"><?php the_field( 'page_header_button_text' ); ?></a>
            </div>
        </div>
    </div>
</section>
<section class="imam">
    <div class="container">
        <div class="row">
            <div class="col-3">
            <?php if ( get_field( 'imam_image') ) { ?>
	<img src="<?php the_field( 'imam_image' ); ?>" class="img-round"/>
<?php } ?>
<?php the_field( 'imam_name' ); ?>
            </div>
            <div class="col">
                <h1><?php the_field( 'imam_section_title' ); ?></h1>
                <?php the_field( 'imam_section_content' ); ?>
            </div>
        </div>
    </div>
</section>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="about-side">
                    <h3>Table of Contents</h3>
                    <ul class="sidebar">
                        <?php
// check if the repeater field has rows of data
if( have_rows('content') ):
$i = 0;
    // loop through the rows of data
   while ( have_rows('content') ) : the_row(); $i++;?>
                            <li>
                                <a href="#<?php echo $i;?>">
                                    <?php the_sub_field('header'); ?>
                                </a>
                            </li>
                            <?php    endwhile;

else :

   // no rows found

endif;
				


        ?>
                </div>
            </div>
            <div class="col">

                <?php
// check if the repeater field has rows of data
if( have_rows('content') ):
$z = 0;
    // loop through the rows of data
   while ( have_rows('content') ) : the_row();
        $z++;?>
                    <section id="<?php echo $z;?>">
                        <h2>
                            <?php the_sub_field('header'); ?>
                        </h2>
                        <?php
		the_sub_field('content');
		?>
                    </section>

                    <?php

   endwhile;

else :

   // no rows found

endif;
				


        ?>
            </div>
        </div>
    </div>
    <?php
get_footer();