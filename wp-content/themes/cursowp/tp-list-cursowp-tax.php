<?php
/**
 * Template Name: Página listagem de taxonomias.
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
                        <?php wp_reset_query();
                        $args = array(
                            "post_type"=>"cursowp_person_pt",
                            "order"=>"asc",
                            "tax_query" => array(
                                array(
                                    "taxonomy" => 'cursowp_tax',
                                    "field" => 'slug',
                                    "terms" => 'desenvolvedor'
                                )
                            )
                        );
                        query_posts($args); ?>
                        <?php while (have_posts()) { the_post(); ?>

                            <a href="<?php echo get_permalink(get_the_ID()) ?>" class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h4 class="list-group-item-heading"><?php the_title(); ?></h4>
                                        <p class="list-group-item-text"><?php the_content(); ?></p>
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