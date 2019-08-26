<?php
/**
 * Template Name: Events Page
 * @package IFC
 */


get_header();
?>
<?php if(is_archive()):?>
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column align-items-center justify-content-center">

                <h1>Events</h1>
                <p>The Islamic Forum of Canada hosts religious, educational and celebratory events. Please join us for
                    any event that piques your interest!</p>
                <p>If you are in need of assistance for any religious function, please do not hestitate to <a
                        href="/contact-us">contact us</a>.</p>

            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<br>
<?php
        while ( have_posts() ) :
            the_post();
			get_template_part( 'template-parts/flexible-content-page');
		endwhile; // End of the loop.
		?>
<br>
<section id="events-gallery">
    <div class="container">
        <div class="row no-gutters">
            <?php 

$images = get_field('events_gallery', 'options');

if( $images ): ?>
            <?php foreach( $images as $image ): ?>
            <a href="<?php echo $image['url']; ?>" data-rel="lightcase:eventsgallery"
                data-lc-caption="<?php echo $image['caption']; ?>" class="col-6 col-md-4 col-lg-3 image-wrapper">
                <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
            </a>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php
get_footer();