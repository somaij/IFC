<?php
/**
 * Template Name: Contact Page
 * @package IFC
 */

get_header();
get_template_part( 'template-parts/page-header');?>
    <section class="text-image-section">
        <div class="container-fluid light-brown-on-left">
            <div class="row d-flex">
                <div class="col-12 col-md-6" style="padding:0;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2884.9071065736866!2d-79.69773178407856!3d43.69169457912011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3e61e6bdbf2b%3A0xa2e3516b778d5a0c!2sIslamic+Forum+Of+Canada!5e0!3m2!1sen!2sca!4v1531884900253" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-6 text">
                <?php the_content();?>
                </div>
                
            </div>
        </div>
    </section>

    <?php
get_footer();