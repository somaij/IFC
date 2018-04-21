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
            <div class="col-md-3">
                <img src="http://via.placeholder.com/240x120">
                <address>
                    <h6>Islamic Forum of Canada</h6>
                    200 Advance Blvd.<br>
                    Brampton, ON<br>
                    L6T 4V4
                </address>
                <a href="tel:9057990763"><strong>905-799-0763</strong></a><br>
                <a href="#"><strong>Facebook</strong></a>
                
            </div>
        </div>
        
    </div>
    <div id="copyright">
        <div class="container">
        <div class="row">
            <div class="col">
                Islamic Forum of Canada © <?php echo date("Y");?>. All Rights Reserved. | <a href="#">Sitemap</a>
            </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
