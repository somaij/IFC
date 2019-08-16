<?php
/**
 * Template Name: Tariqa Page
 * @package IFC
 */

get_header();
get_template_part( 'template-parts/page-header');?>
<section class="tariqa-content">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php if ( have_rows( 'section_1' ) ) : 
                    ?>
                <?php while ( have_rows( 'section_1' ) ) : the_row();?>
               
                <h2>
                    <?php the_sub_field( 'title' ); ?>
                </h2>
                </a>
                <div class="regular-text"><?php the_sub_field( 'text' ); ?></div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
            <?php if ( have_rows( 'section_2' ) ) : ?>
	<?php while ( have_rows( 'section_2' ) ) : the_row(); ?>
		<h2><?php the_sub_field( 'title' ); ?></h2>
        <div class="regular-text"><?php the_sub_field( 'text' ); ?></div>
        <a href="<?php the_sub_field( 'button_link' ); ?>" class="btn light-brown-on-left"><?php the_sub_field( 'button_text' ); ?></a>
		
		
	<?php endwhile; ?>
<?php endif; ?>
            </div>
        </div>
    </div>
                </section>
    <section class="timeline" style="background:linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)),url(<?php the_field('timeline_bg');?>);" >
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="timeline-list">


                        <?php

// check if the repeater field has rows of data
if( have_rows('timeline') ):
    $i = 0;
 	// loop through the rows of data
    while ( have_rows('timeline') ) : the_row();
    $i++;

        // display a sub field value

        echo '<li>';
        echo '<div class="content"><a href="#';
        echo $i;
        echo '" data-rel="lightcase:tariqa"><h3>';
        the_sub_field('title');
        echo '<br><small>';
        the_sub_field('year');
        echo '</small></h3></a>';
        echo '<div id="';
        echo $i;
        echo '" class="tariqa-popup regular-text" style="display:none;"><h3>';
        the_sub_field('title');
        echo '<br><small>';
        the_sub_field('year');
        echo '</small></h3><p>';
        the_sub_field('body');
        echo '</p></div></div></li>';

    endwhile;

else :

    // no rows found

endif;

?>


                    </ul>
                </div>

            </div>
        </div>
    </section>
    <?php
get_footer();