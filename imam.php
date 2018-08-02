<?php
/**
 * Template Name: Imam Page
 * @package IFC
 */

get_header();
?>
<section class="page-header text-white image" style="background-image:url(<?php the_post_thumbnail_url();?>">
<div class="overlay"></div>
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
<section class="about-container">
    <div class="container">
        <div class="row">
            <div class="d-none d-md-block col-3">
                <div class="about-side">
                    <div class="sidebar__inner">
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
</section>
    <script>
        jQuery(function($) {
            $(document).ready(function() {               
            $('.about-side').stickySidebar();
                 });
        });
    </script>
    <?php
get_footer();