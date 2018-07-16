<?php
/**
 * Template Name: Student Testimonials Page
 * @package IFC
 */

get_header();
?>

<section class="page-header text-white image" style="background-image:url(<?php the_post_thumbnail_url();?>">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column align-items-center justify-content-center">
                <h1><?php the_field( 'page_header' ); ?></h1>
                <?php the_field( 'page_header_content' ); ?>
            </div>
        </div>
    </div>
</section>
    <div class="container">
        <div class="row">
            <?php 
                $args = array( 'post_type' => 'testimonials', 'posts_per_page' => 5, 'taxonomy' => 'category',
                'term' => 'student', );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>
            <div class="col-12 col-sm-6">
                <p>"
                    <?php the_field( 'quote_text' );?>"</p>
                <strong>— <?php the_field( 'testimonial_author' );?></strong>
            </div>
            <?php endwhile;?>
        </div>
    </div>
    <br>

    <?php
get_footer();
