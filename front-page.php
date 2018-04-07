<?php
/**
 * Template Name: Front Page Template
 */

get_header();
?>
    <div id="masthead" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/mast-1.jpg;">
        <div class="container">
            <div class="row">
                <div class="col text-right main-text">
                    <h2>From Our Family to Yours</h2>
                    <h1>Welcome Home</h1>
                    <a href="#" class="btn blue">Donate Now</a><a href="#" class="btn light-brown">Find Out More</a>
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
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p><br>
                            <a href="#" class="btn light-brown">Read More</a>
                    </div>
                    <div class="col text-right">
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
                <div class="col d-flex flex-direction-row align-items-center justify-content-around"><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p> <a href="#" class="btn">Learn More</a></div>
            </div>
        </div>
    </section>
    <div id="blogsevents" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/eventsblogs.jpg;">
    <section id="blog-preview">
        <div class="container">
        <div class="row"><div class="col"><h2 class="section-header">Blog</h2></div>
            <div class="row justify-content-between">
                <div class="col post black-on-left">
                    <h3>Test</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <a href="#">Read More</a>
                </div>
                <div class="col ml-auto post black-on-right text-right">
                    <h3>Test</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </section>
    </div>
    <?php
get_footer();