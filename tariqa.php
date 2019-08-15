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
                <?php if ( have_rows( 'section_1' ) ) : 
                    ?>
                <?php while ( have_rows( 'section_1' ) ) : the_row();?>
               
                <h2>
                    <?php the_sub_field( 'title' ); ?>
                </h2>
                </a>
                <div><?php the_sub_field( 'text' ); ?></div>
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
        <?php the_sub_field( 'text' ); ?>
        <a href="<?php the_sub_field( 'button_link' ); ?>" class="btn light-brown-on-left"><?php the_sub_field( 'button_text' ); ?></a>
		
		
	<?php endwhile; ?>
<?php endif; ?>
            </div>
        </div>
    </div>
    <section class="timeline">
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
        echo '" data-rel="lightcase"><h3>';
        the_sub_field('title');
        echo '</h3></a>';
        echo '<div id="';
        echo $i;
        echo '"><p>';
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