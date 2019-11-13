<?php get_header(); ?>
<div class="content-container search-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-9 blogroll page-container">
                <?php if ( have_posts() ) : ?>
                <header class="header">
                    <h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1>
                </header>
                <?php
                    $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $s = get_query_var('s');
                    query_posts("s=$s&cat=-9,-14&paged=$page");
                    while ( have_posts() ) : the_post();
                        get_template_part( 'entry' );
                    endwhile; 
                    wp_reset_query();
                ?>
                <?php get_template_part( 'nav', 'below' ); ?>
                <?php else : ?>
                <article id="post-0" class="post no-results not-found">
                    <header class="header">
                        <h3 class="entry-title"><?php _e( 'Nothing Found', 'blankslate' ); ?></h3>
                    </header>
                    <section class="entry-content">
                        <p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
                        <?php get_search_form(); ?>
                    </section>
                </article>
                <?php endif; ?>
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