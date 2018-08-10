<?php
/**
 * Template Name: Tariqa Page
 * @package IFC
 */

get_header();
get_template_part( 'template-parts/page-header');?>
        <div class="container">
            <div class="row">
                <div class="col">
                <?php the_content();?>
                </div>
                
            </div>
        </div>
    <?php
get_footer();