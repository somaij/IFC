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
                <div class="col-12 col-md-4" style="padding:0;">
                    <?php the_field('google_maps_embed', "option");?>
                </div>
                <div class="col-12 col-md-8 text">
                <?php the_content();?>
                </div>
                
            </div>
        </div>
    </section>

    <?php
get_footer();