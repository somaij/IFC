<?php
/**
 * Template Name: Front Page Template
 */

get_header();
?>
    <div id="masthead" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/mast-1.jpg;">
        <div class="container">
            <div class="row">
                <div class="col main-text">
                    <?php the_field( 'masthead_header' ); ?>

                    <a href="/donate" class="btn blue">Donate Now</a>
                    <a href="/about-islamic-forum" class="btn light-brown">Find Out More</a>
                </div>
            </div>
        </div>
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h4>Next Upcoming Event:</h4>
                    </div>
                </div>
                <div class="row flex-row-reverse flex-md-row">
                    <div class="col-12 col-md-6">
                        <?php the_field( 'masthead_body' ); ?>
                        <br>
                        <a href="/islam" class="btn light-brown">Read More</a>
                    </div>
                    <div class="col-12 col-md-6 prayer-times">
                        <h3>Prayer Times</h3>
                        <?php get_template_part( 'template-parts/prayer-times');?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <section class="cta light-brown-on-left">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-column flex-lg-row align-items-center justify-content-around">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                        rem aperiam</p>
                    <a href="#" class="btn">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <div id="blogsevents" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/eventsblogs.jpg;">
        <section id="events-preview">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="section-header">
                            <?php the_field( 'events_header' ); ?>
                        </h2>
                    </div>
                    <div class="col-12 col-sm-6 section-header-links">
                        <a href="<?php the_field( 'calendar_link' ); ?>">
                            <?php the_field( 'calendar_link_text' ); ?> </a>
                        <span class="divider">|</span>
                        <a href="<?php the_field( 'all_events_link' ); ?>">
                            <?php the_field( 'all_events_text' ); ?>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="events-carousel owl-carousel owl-theme">
                        <?php $events = tribe_get_events( array(
    'posts_per_page' => 5,
) );
 
// Loop through the events, displaying the title
// and content for each
foreach ( $events as $event ) {
    echo "<div class='col event black-on-left'>";
    echo "<h3>$event->post_title</h3>";
    echo "<p>" . tribe_get_start_date( $event ) . "</p>";
    echo "<a href='/events/$event->post_name' class='btn blue text-right'>See Event</a>";
    echo "</div>";
}?>
                    </div>
                </div>
            </div>
        </section>
        <section id="blog-preview">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="section-header">
                            <?php the_field( 'blogs_header' ); ?>
                        </h2>
                    </div>
                    <div class="col-12 col-sm-6 section-header-links">
                        <a href="<?php the_field( 'all_blogs_link' ); ?>">
                            <?php the_field( 'all_blogs_text' ); ?>
                        </a>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-12 col-lg post black-on-left">
                        <h3>Test</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                            dicta sunt explicabo.</p>
                        <a href="#">Read More</a>
                    </div>
                    <div class="col-12 col-lg post black-on-left">
                        <h3>Test</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                            dicta sunt explicabo.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <section class="cta dark-brown-on-left">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-column flex-lg-row align-items-center justify-content-around">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                        rem aperiam</p>
                    <a href="#" class="btn">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery-preview">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="section-header">
                        <?php the_field( 'gallery_header' ); ?>
                    </h2>
                </div>
                <div class="col-12 col-sm-6 section-header-links">
                    <a href="<?php the_field( 'gallery_all_link' ); ?>">
                        <?php the_field( 'gallery_all_text' ); ?>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php echo do_shortcode('[foogallery id="4341"]'); ?>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials-preview" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/mast-1.jpg;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="section-header">
                        <?php the_field( 'testimonials_header' ); ?>
                    </h2>
                </div>
                <div class="col-12 col-sm-3 section-header-links">
                    <a href="<?php the_field( 'testimonials_all_link' ); ?>">
                        <?php the_field( 'testimonials_all_text' ); ?>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="testimonials-carousel owl-carousel owl-theme">
                    <?php 
                $args = array( 'post_type' => 'testimonials', 'posts_per_page' => 5 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
  echo '<div class="col"><div class="row testimonial"><div class="col-1 big-q">"</div><div class="col">';
  echo '<h3>'; the_field( 'quote_text' ); echo '</h3>';
  echo '<p class="footer"><em class="author">— '; the_field( 'testimonial_author' ); echo '</em><a href="#" class="text-right">Read More</a></p></div>';
                    
  echo '</div></div>';
endwhile;
                ?>
                </div>
            </div>
        </div>
    </section>
    <script>
        jQuery(function ($) {
            $(document).ready(function () {
                $(".events-carousel").owlCarousel({
                    loop: true,
                    nav: true,
                    margin: 15,
                    stagePadding: 15,
                    autoplay: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 4
                        }
                    }
                });
                $(".testimonials-carousel").owlCarousel({
                    loop: true,
                    nav: true,
                    autoplay: true,
                    items: 1
                });
            });
        });
    </script>
    <?php
get_footer();