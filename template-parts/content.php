<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IFC
 */

?>

	<?php
		if ( is_singular() ) :
			get_template_part( 'template-parts/page-header');?>
			<div class="container">
			<div class="row">
		<article id="post-<?php the_ID(); ?>" class="col">
				<?php the_content();?>
		</article>
		<?php wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ifc' ),
			'after'  => '</div>',
		) );
		?>
		</div>
		</div>
		<?php
		
		else :?>
		<a href="<?php the_permalink();?>" class="col-12 col-md-6 archive-result">
		<div>
			<h3><?php the_title(); ?></h3>
			<p><?php the_excerpt();?></p>
			<br><span class="read-more">Read More</span>
		</div>
		</a>
		<?php endif;
		?>