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
                <p>The Islamic Forum of Canada hosts religious, educational and celebratory events. Please join us for any event that piques your interest!</p>
                <p>If you are in need of assistance for any religious function, please do not hestitate to <a href="/contact-us">contact us</a>.</p>

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
<?php
get_footer();
