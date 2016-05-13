<?php
/**
 * Created by Gaboso
 * User: gaboso
 * Date: 13/05/2016
 */
?>
<?php the_post(); ?>

<?php get_header(); ?>

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

<?php get_footer(); ?>

