<div class="clear"></div>
</div><!-- /row -->
<footer id="footer" role="contentinfo" class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <ul class="social-media-list">
          <?php   if ( get_option( 'facebook_url' ) != "" ) { ?>
          <li>
            <span class="sprite facebook-sprite"></span>
            <a href=""
              <?php echo get_option( 'facebook_url' ); ?>" target="_blank">Facebook
            </a>
          </li>
          <?php   }
        if ( get_option( 'twitter_url' ) != "" ) { ?>
          <li>
            <div class="sprite twitter-sprite"></div>
            <a href=""
              <?php echo get_option( 'twitter_url' ); ?>" target="_blank">Twitter
            </a>
          </li>
          <?php   }
        if ( get_option( 'google_url' ) != "" ) { ?>
          <li>
            <div class="sprite google-sprite"></div>
            <a href=""
              <?php echo get_option( 'google_url' ); ?>" target="_blank">Google +
            </a>
          </li>
          <?php   }
        if ( get_option( 'youtube_url' ) != "" ) { ?>
          <li>
            <div class="sprite youtube-sprite"></div>
            <a href=""
              <?php echo get_option( 'youtube_url' ); ?>" target="_blank">Youtube
            </a>
          </li>
          <?php   } ?>
        </ul>
      </div>

      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <?php query_posts('category_name=footer-column-1&posts_per_page=1&order=ASC'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php 
              endwhile; endif; 
              wp_reset_query();
            ?>
      </div>

      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <?php query_posts('category_name=footer-column-2&posts_per_page=1&order=ASC'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php 
              endwhile; endif; 
              wp_reset_query();
            ?>
      </div>
    </div>

    <hr />

    <div class="row">
      <div class="col-xs-12 col-sm-6 text-center">
        <?php echo '&copy;&nbsp;', date( 'Y' ).' ', esc_html( get_bloginfo( 'name' ) ); ?>
      </div>
      <div class="col-xs-12 col-sm-6 text-center">
        Design by <a href="http://www.woolston.com.au" target="_blank">Woolston Web Design</a>
      </div>
    </div>

  </div>
</footer>
</div>
<!-- /page-wrap -->
</div>
<?php wp_footer(); ?>
</body>
</html>