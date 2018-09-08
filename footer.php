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
$footer_cta = get_field('footer_cta', 'option');	
if( $footer_cta ):
?>
    <section class="cta blue-on-left">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-column flex-lg-row align-items-center justify-content-around">
                    <p><?php echo $footer_cta['text']; ?></p>
                    <a href="<?php echo $footer_cta['button_link'] ?>" class="btn">
                        <?php echo $footer_cta['button_text']; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>
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
                    <a href="tel:9057990763"><i class="fas fa-phone"></i><strong>905-799-0763</strong></a><br>
                    <a href="#"><i class="fab fa-facebook-f"></i><strong>Facebook</strong></a>

                </div>
            </div>

        </div>
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col">
                        Islamic Forum of Canada ©
                        <?php echo date("Y");?>. All Rights Reserved. | <a href="#">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        jQuery(function($) {
            $('.menu-toggle').click(function() {

                $('.mobile-nav').fadeToggle("fast");
                $(this).toggleClass('open');
            });

            $(document).click(function(e) {
                var target = e.target;
                if (!$(target).is('.menu-toggle') && !$(target).parents().is('.menu-toggle')) {
                    $('.mobile-nav').fadeOut("fast");
                    $('.menu-toggle').removeClass('open');
                }
            });
            $("li.menu-item").hover(function() { // mouse enter
                $(this).find(" > .sub-menu").show(); // display immediate child

            }, function() { // mouse leave
                    $(this).find(".sub-menu").hide(); // hide if not current page
            });
        });

    </script>
    <?php wp_footer(); ?>

    </body>

    </html>
