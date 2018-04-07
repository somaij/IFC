<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IFC
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header>
        <div class="container-fluid">
            <div class="row">
				<div class="site-branding col-2">
					<?php the_custom_logo();?>
				</div>
				<nav id="site-navigation" class="main-navigation col-10 text-right">
					<button class="menu-toggle d-block d-md-none" aria-controls="primary-menu" aria-expanded="false">=</button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
            </div>
        </div>
	</header><!-- #masthead -->

