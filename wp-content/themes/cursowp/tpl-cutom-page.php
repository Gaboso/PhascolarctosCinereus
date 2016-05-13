<?php
/**
 * Template Name: Pagina com template customizado.
 *
 */
?>
<?php the_post(); ?>

<?php   get_header(); ?>

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php the_title(); ?></h3>
                    </div>
                    <div class="panel-body">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

<?php get_footer(); ?>