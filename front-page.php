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
                    <h2>From Our Family to Yours</h2>
                    <h1>Welcome Home</h1>
                    <a href="#" class="btn blue">Donate Now</a>
                    <a href="#" class="btn light-brown">Find Out More</a>
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
                <div class="row">
                    <div class="col">
                        <h3>Our Beliefs and Values</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                        <br>
                        <a href="#" class="btn light-brown">Read More</a>
                    </div>
                    <div class="col prayer-times">
                        <h3>Prayer Times</h3>
                        <ul class="pt">
                            <li>Today</li>
                            <li>Fajr - 4 am</li>
                            <li>Dhur - 1 pm</li>
                            <li>Asr - 7 pm</li>
                            <li>Maghrib - 9 pm</li>
                            <li>Isha - 11 pm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <section class="cta light-brown-on-left">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-direction-row align-items-center justify-content-around">
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
                        <h2 class="section-header">Events</h2>
                    </div>
                    <div class="col text-right section-header-links">
                        <a href="#">View Calendar </a>
                        <span class="divider">|</span>
                        <a href="#"> See Event List</a>
                    </div>
                </div>
                <div class="row">
                    <div class="events-carousel owl-carousel owl-theme">
                        <div class="col event black-on-left">
                            <h3>Event 1</h3>
                            <p>123 St.
                                <br>July 24th, 2017. 9:00 am to 12:00 pm</p>
                            <a href="#" class="btn blue text-right">See Event</a>
                        </div>
                        <div class="col event black-on-left">
                            <h3>Event 2</h3>
                            <p>123 St.
                                <br>July 24th, 2017. 9:00 am to 12:00 pm</p>
                            <a href="#" class="btn blue text-right">See Event</a>
                        </div>
                        <div class="col event black-on-left">
                            <h3>Event 3</h3>
                            <p>123 St.
                                <br>July 24th, 2017. 9:00 am to 12:00 pm</p>
                            <a href="#" class="btn blue text-right">See Event</a>
                        </div>
                        <div class="col event black-on-left">
                            <h3>Event 4</h3>
                            <p>123 St.
                                <br>July 24th, 2017. 9:00 am to 12:00 pm</p>
                            <a href="#" class="btn blue text-right">See Event</a>
                        </div>
                        <div class="col event black-on-left">
                            <h3>Event 5</h3>
                            <p>123 St.
                                <br>July 24th, 2017. 9:00 am to 12:00 pm</p>
                            <a href="#" class="btn blue text-right">See Event</a>
                        </div>
                        <div class="col event black-on-left">
                            <h3>Event 6</h3>
                            <p>123 St.
                                <br>July 24th, 2017. 9:00 am to 12:00 pm</p>
                            <a href="#" class="btn blue text-right">See Event</a>
                        </div>
                        <div class="col event black-on-left">
                            <h3>Event 7</h3>
                            <p>123 St.
                                <br>July 24th, 2017. 9:00 am to 12:00 pm</p>
                            <a href="#" class="btn blue text-right">See Event</a>
                        </div>
                        <div class="col event black-on-left">
                            <h3>Event 8</h3>
                            <p>123 St.
                                <br>July 24th, 2017. 9:00 am to 12:00 pm</p>
                            <a href="#" class="btn blue text-right">See Event</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="blog-preview">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="section-header">Blog</h2>
                    </div>
                    <div class="col text-right section-header-links">
                        <a href="#">See All Blogs</a>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col post black-on-left">
                        <h3>Test</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                            dicta sunt explicabo.</p>
                        <a href="#">Read More</a>
                    </div>
                    <div class="col ml-auto post black-on-right text-right">
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
                    <div class="col d-flex flex-direction-row align-items-center justify-content-around">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
<section id="gallery-preview">
               <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="section-header">Gallery</h2>
                    </div>
                    <div class="col text-right section-header-links">
                        <a href="#">View Gallery</a>
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
                        <h2 class="section-header">In the Community</h2>
                    </div>
                    <div class="col text-right section-header-links">
                        <a href="#">View Testimonials</a>
                    </div>
                </div>
            <div class="row">
                <div class="testimonials-carousel owl-carousel owl-theme">
                <?php 
                $args = array( 'post_type' => 'testimonials', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
  echo '<div class="col"><div class="row testimonial"><div class="col-1 big-q">"</div><div class="col">';
  echo '<h3>'; the_field( 'quote_text' ); echo '</h3>';
  echo '<p class="footer"><em class="author">— '; the_field( 'testimonial_author' ); echo '</em><a href="#" class="text-right">Read More</a></p></div>';
                    
  echo '</div>';
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
                    items:1                    
                });
            });
        });
    </script>
    <?php
get_footer();