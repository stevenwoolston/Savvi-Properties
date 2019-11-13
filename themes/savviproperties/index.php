<?php get_header(); ?>
<div class="container-fluid">
  <div class="row">
    <div class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="http://placehold.it/1000x400" alt="..." />
          <div class="carousel-caption">
            lorem ipsum
          </div>
        </div>
        <div class="item">
          <img src="http://placehold.it/1000x400" alt="..." />
          <div class="carousel-caption">
            lorem ipsum
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>

<div class="container">
    <section id="content" role="main" class="row">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'entry' ); ?>
      <?php comments_template(); ?>
      <?php endwhile; endif; ?>
      <?php get_template_part( 'nav', 'below' ); ?>
    </section>
  </div>
</div>

<div class="container-fluid">
  <?php get_footer(); ?>
</div>