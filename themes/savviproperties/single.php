<?php get_header(); ?>
<div class="content-container cover-background-image">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-9 page-container">
                <section id="content" role="main">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'entry' ); ?>
                    <?php endwhile; endif; ?>

                    <footer class="footer">
                    </footer>
                </section>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 sidebar-container">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>    
</div>
<div class="container-fluid">
<?php get_footer(); ?>
</div>