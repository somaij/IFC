<section class="page-header <?php echo basename( get_page_template() ); if ( has_post_thumbnail() ) { echo ' text-white';}?>" 
<?php if ( has_post_thumbnail() ) {?>
    style="background-image:url(
    <?php the_post_thumbnail_url();?>); background-size:cover;"
    <?php }?>>
    <?php if ( has_post_thumbnail() ) {?> <div class="overlay"></div><?php }?>
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column align-items-center justify-content-center">
                <?php 
                if ( is_archive() ) {
                    echo "<h1>All ";
                    echo post_type_archive_title();
                    echo "</h1>";
                }
                else if (is_home()){
                    echo "<h1>Blog</h1>";
                }
                else{
                    the_title('<h1>', '</h1>');
                    the_field('header_body');
                }
                ?>
            </div>
        </div>
    </div>
</section>