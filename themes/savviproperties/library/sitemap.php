<?php
/*  SEO Sitemaps    */
/* function to create sitemap.xml file in root directory of site  */
add_action("publish_post", "eg_create_sitemap");
// add_action("publish_page", "eg_create_sitemap");

add_action( "save_post", "eg_create_sitemap" );
function eg_create_sitemap() {
    $postsForSitemap = get_posts( array(
        'numberposts' => -1,
        'orderby'     => 'modified',
        'post_type'   => array( 'page' ),
        'order'       => 'DESC'
        )
    );

    $sitemap = '<?xml version="1.0" encoding="UTF-8" ?>';
    $sitemap .= "\n" . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

    foreach( $postsForSitemap as $post ) {
        setup_postdata( $post );
        $postdate = explode( " ", $post->post_modified );
        $sitemap .= "\t" . '<url>' . "\n" . "\t\t" . '<loc>' . get_permalink( $post->ID ) . '</loc>' . "\n\t\t" . '<lastmod>' . $postdate[0] . '</lastmod>' .
            "\n\t\t" . '<changefreq>monthly</changefreq>' . "\n\t" . '</url>' . "\n";
    }

    $sitemap .= '</urlset>';

    $fp = fopen( ABSPATH . "sitemap.xml", 'w' );
    fwrite( $fp, $sitemap );
    fclose( $fp );

}
?>