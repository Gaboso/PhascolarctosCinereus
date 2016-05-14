<?php   get_header(); ?>

<?php the_post(); ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <a href="/cursowp/pessoas" class="btn btn-lg btn-default">Voltar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->


<?php get_footer(); ?>