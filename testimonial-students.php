<?php
/**
 * Template Name: Student Testimonials Page
 * @package IFC
 */

get_header();
?>

<section class="page-header <?php if (has_post_thumbnail()): echo'image'; endif;?>" style="background-image:url(<?php the_post_thumbnail_url();?>">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column align-items-center justify-content-center">
                <h1><?php the_field( 'page_header' ); ?></h1>
                <?php the_field( 'page_header_content' ); ?>
            </div>
        </div>
    </div>
    <?php if (has_post_thumbnail()): echo'<div class="overlay"></div>'; endif;?>
</section>
    <div class="container">
        <div class="row">
            <?php 
                $args = array( 'post_type' => 'testimonials', 'posts_per_page' => 5, 'taxonomy' => 'category',
                'term' => 'student', );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>
            <div class="col-12 col-sm-6" class="archive-result">
                <p>"
                    <?php if (get_field('quote_text')): the_field( 'quote_text' ); else: the_excerpt(); endif;?>"</p>
                <strong>— <?php the_field( 'testimonial_author' );?></strong>
                <br><a href="<?php the_permalink();?>" class="btn light-brown">Read More</a>
            </div>
            <?php endwhile;?>
        </div>
    </div>
    <br>

    <?php
get_footer();
