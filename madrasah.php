<?php
/**
 * Template Name: Madrasah Page
 * @package IFC
 */

get_header(); $s1 = get_field('section_1');?>
    <section class="text-section" id="section-1-madrasah-home" style="background-image:url('<?php echo get_stylesheet_directory_uri();?>/assets/img/school-pattern.jpg');">
        <div class="container">
        <div class="row">
                <div class="col">
                <h2><?php echo $s1['title'];?></h2>
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
                <img src="<?php echo $it1['image']; ?>"/>
                </div>
                <div class="col-12 col-md-6 text">
                <h2><?php echo $it1['title'];?></h2>
                <?php echo $it1['text'];?>
                <br/>
                <p><a href="<?php echo $it1['button_link'];?>" class="btn dark-brown-on-left"><?php echo $it1['button_text'];?></a></p>
                </div>
                
            </div>
        </div>
    </section>
    <?php $it2 = get_field('image_text_2');?>
    <section class="text-image-section dark-brown-on-left">
        <div class="container-fluid">
            <div class="row d-flex flex-md-row-reverse">
                <div class="col-12 col-md-6" style="padding:0;">
                <img src="<?php echo $it2['image']; ?>"/>
                </div>
                <div class="col-12 col-md-6 text">
                <h2><?php echo $it2['title'];?></h2>
                <?php echo $it2['text'];?>
                <br/>
                <p><a href="<?php echo $it2['button_link'];?>" class="btn light-brown-on-left"><?php echo $it2['button_text'];?></a></p>
                </div>
            </div>
        </div>
    </section>
    <?php $h = get_field('help_section');?>
    <section class="text-section" id="help-section">
        <div class="container">
        <div class="row">
                <div class="col">
                <h2><?php echo $h['title'];?></h2>
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
                <p><a href="<?php echo $h['button_link'];?>" class="btn blue-on-left"><?php echo $h['button_text'];?></a></p>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();