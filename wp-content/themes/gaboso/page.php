<?php
/**
 * Created by Gaboso
 * User: gaboso
 * Date: 13/05/2016
 */
?>
<?php the_post(); ?>

<?php get_header(); ?>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center orange-text"><?php the_title(); ?></h1>
        <br><br>
    </div>
</div>

<div class="container">
    <div class="section">
        <?php the_content(); ?>
    </div>
</div>


<?php get_footer(); ?>
