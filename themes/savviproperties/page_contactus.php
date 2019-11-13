<?php
/**
 * Template Name: With Google Map
 *
 * @package WordPress
 * @subpackage WWD BlankSlate
 * @since WWD BlankSlate 1.0
 */
?>
<?php get_header(); ?>

<div class="transparent-text-container col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

    <div class="col-xs-12">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

        <?php the_content(); ?>

    </div>

    <?php endwhile; endif; ?>

</div>

    <?php get_footer(); ?>
