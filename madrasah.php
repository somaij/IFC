<?php
/**
 * Template Name: Madrasah Page
 * @package IFC
 */

get_header();?>

    <?php

// check if the repeater field has rows of data
if( have_rows('slides') ):?>
        <section class="slides">
            <div class="owl-madrasah owl-carousel owl-theme">
                <?php 	// loop through the rows of data
    while ( have_rows('slides') ) : the_row();?>
                <div class="slide" style="background-image:url(<?php the_sub_field('image');?>)">
                    <div class="content">
                        <h1><?php the_sub_field('title'); ?></h1>
                        <?php the_sub_field('text'); ?>
                </div></div>
                <?php    endwhile;?>
            </div>
        </section>
        <?php endif;

?>

        <?php $s1 = get_field('section_1');?>
        <section class="text-section" id="section-1-madrasah-home" style="background-image:url('<?php echo get_stylesheet_directory_uri();?>/assets/img/school-pattern.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>
                            <?php echo $s1['title'];?>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <?php echo $s1['text'];?>
                    </div>
                </div>
            </div>
        </section>
        <?php $it1 = get_field('image_text_1');?>
        <section class="text-image-section light-brown-on-left">
            <div class="container-fluid">
                <div class="row d-flex">
                    <div class="col-12 col-md-6" style="padding:0;">
                        <img src="<?php echo $it1['image']; ?>" />
                    </div>
                    <div class="col-12 col-md-6 text">
                        <h2>
                            <?php echo $it1['title'];?>
                        </h2>
                        <?php echo $it1['text'];?>
                        <br/>
                        <p>
                            <a href="<?php echo $it1['button_link'];?>" class="btn dark-brown-on-left">
                                <?php echo $it1['button_text'];?>
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </section>
        <?php $it2 = get_field('image_text_2');?>
        <section class="text-image-section dark-brown-on-left">
            <div class="container-fluid">
                <div class="row d-flex flex-md-row-reverse">
                    <div class="col-12 col-md-6" style="padding:0;">
                        <img src="<?php echo $it2['image']; ?>" />
                    </div>
                    <div class="col-12 col-md-6 text">
                        <h2>
                            <?php echo $it2['title'];?>
                        </h2>
                        <?php echo $it2['text'];?>
                        <br/>
                        <p>
                            <a href="<?php echo $it2['button_link'];?>" class="btn light-brown-on-left">
                                <?php echo $it2['button_text'];?>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <?php $h = get_field('help_section');?>
        <section class="text-section" id="help-section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>
                            <?php echo $h['title'];?>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <?php echo $h['text'];?>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-10">
                        <strong><?php echo $h['cta_text'];?></strong>
                    </div>
                    <div class="col d-flex align-items-center">
                        <p>
                            <a href="<?php echo $h['button_link'];?>" class="btn blue-on-left">
                                <?php echo $h['button_text'];?>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="text-section">
            <div class="testimonials-carousel owl-carousel owl-theme">
                <div class="col testimonial-item dark-brown-on-left">
                    <p>"I can positively say that the IFC has made me into a better person. It has helped me develop a positive attitude towards my studies and discover more about myself."</p>
                    <strong>John Smith, Alumni</strong>
                </div>
            </div>
        </section>
    <script>
        jQuery(function($) {
            $(document).ready(function() {
                $(".owl-madrasah").owlCarousel({
                    loop: true,
                    nav: true,
                    autoplay: true,
                    items:1
                });
                $(".testimonials-carousel").owlCarousel({
                    loop: true,
                    nav: true,
                    margin: 15,
                    stagePadding: 15,
                    autoplay: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 4
                        }
                    }
                });
            });
        });

    </script>
        <?php
get_footer();
