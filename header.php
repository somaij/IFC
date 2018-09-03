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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
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
					<div class="d-none d-md-inline">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
                    </div>
                    <button class="menu-toggle d-block d-md-none text-right" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i> Menu</button>
				</nav><!-- #site-navigation -->
                
            </div>
        </div>
        <div class="mobile-nav light-brown-on-left">
            <?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-mobile-menu',
					) );
					?>
        </div>
	</header><!-- #masthead -->

