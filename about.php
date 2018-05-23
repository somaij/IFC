<?php
/**
 * Template Name: About Us Page
 * @package IFC
 */

get_header();
?>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="about-side">
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