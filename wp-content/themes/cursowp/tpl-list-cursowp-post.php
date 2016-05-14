<?php
/**
 * Template Name: Página listagem de CursoWP Posts.
 *
 */
?>
<?php get_header(); ?>
<?php the_post();   ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1><?php the_title(); ?></h1>


                    <div class="list-group">
                        <?php query_posts("post_type=cursowp_posttype"); ?>
                        <?php while (have_posts()) { the_post(); ?>

                            <a href="<?php echo get_permalink(get_the_ID()) ?>" class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h4 class="list-group-item-heading"><?php the_title(); ?></h4>
                                        <p class="list-group-item-text"><?php the_content(); ?></p>
                                    </div>
                                    <div class="col-lg-2">
                                        <?php the_post_thumbnail('full', array('style'=>'width:100%;height:100%')); ?>
                                    </div>
                                </div>
                            </a>

                        <?php } ?>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

<?php get_footer(); ?>