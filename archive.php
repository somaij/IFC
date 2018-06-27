<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IFC
 */

get_header();
get_template_part( 'template-parts/page-header');
?>
<div class="container">
			<div class="row">
		<?php
		if ( have_posts() ) :?>
		<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			else :

			get_template_part( 'template-parts/content', 'none' );?>

			<?php
		endif;
		?>
		</div>
			</div>
			<br>
<?php
get_footer();
