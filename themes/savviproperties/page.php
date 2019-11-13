<?php get_header(); ?>

<div class="col-xs-12 col-md-10 col-md-offset-1">
    <div class="transparent-text-container col-xs-12 col-sm-10">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

            <?php the_content(); ?>

        </div>

        <div class="col-xs-12">

            <hr />

        </div>

        <?php endwhile; endif; ?>

    </div>

    <div class="col-xs-12 col-sm-2 sidebar-container">
        <?php get_sidebar(); ?>
    </div>
</div>
    <?php get_footer(); ?>
