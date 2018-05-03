<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IFC
 */

?>
<section class="page-header">
<div class="container">
	<div class="row">
		<div class="col">
			<h1><?php the_title(); ?></h1>
</div>
</div>
</div>
</section>
<div class="container">
	<div class="row">
		<div class="col">
		<?php
		the_content();
		?>
		</div>
	</div>	
</div>
<!-- #post-<?php the_ID(); ?> -->
