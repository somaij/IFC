<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IFC
 */

?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>About the Mosque</h4>
                <?php
					wp_nav_menu( array(
						'theme_location' => 'footer-1',
						'menu_id'        => 'footer-menu-1',
					) );
					?>
            </div>
            <div class="col-md-3">
                <h4>Islam</h4>
                <?php
					wp_nav_menu( array(
						'theme_location' => 'footer-2',
						'menu_id'        => 'footer-menu-2',
					) );
					?>
            </div>
            <div class="col-md-3">
                <h4>Events</h4>
                <?php
					wp_nav_menu( array(
						'theme_location' => 'footer-3',
						'menu_id'        => 'footer-menu-3',
					) );
					?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
