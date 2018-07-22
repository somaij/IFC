<?php
/**
 * Template Name: About Us Page
 * @package IFC
 */

get_header();
?>
<section class="page-header <?php echo basename( get_page_template() ); ?> <?php if (has_post_thumbnail()): echo'image'; endif;?>"  <?php if (has_post_thumbnail()):?> style="background-image:url(<?php the_post_thumbnail_url();?>" <?php endif;?> >
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column align-items-center justify-content-center">
                <h1><?php the_field( 'page_header' ); ?></h1>
                <div class="page-header-content"><?php the_field( 'page_header_content' ); ?></div>
                <a href="<?php the_field( 'page_header_link' ); ?>" class="btn white"><?php the_field( 'page_header_button_text' ); ?></a>
            </div>
        </div>
    </div>
    <?php if (has_post_thumbnail()): echo'<div class="overlay"></div>'; endif;?>
</section>
<section class="imam">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 bio">
            <?php if ( get_field( 'imam_image') ) { ?>
	<img src="<?php the_field( 'imam_image' ); ?>" class="img-round"/>
<?php } ?>
<div><?php the_field( 'imam_name' ); ?></div>
            </div>
            <div class="col">
                <h1><?php the_field( 'imam_section_title' ); ?></h1>
                <div class="imam-content">
                <?php the_field( 'imam_section_content' ); ?>
                    </div>
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
                $('.imam-content').readmore();
               
            $('.about-side').stickySidebar();
                 });
        });
    </script>
    <?php
get_footer();