<?php
/**
 * Template Name: Show Contact Form
 *
 * @package WordPress
 * @subpackage WWD BlankSlate
 * @since WWD BlankSlate 1.0
 */
?>
<?php get_header(); ?>

<div class="col-xs-12 col-md-10 col-md-offset-1">
    <div class="transparent-text-container col-xs-12 col-sm-10">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 coming-soon-content">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

            <?php the_content(); ?>

        </div>

        <div class="col-xs-12">

            <hr />

        </div>

        <?php endwhile; endif; ?>

        <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-6 col-lg-offset-3">

            <?php echo do_shortcode( '[contact-form-7 id="6" html_class="form-horizontal" title="Contact form 1"]' ); ?>

        </div>

    </div>

    <div class="col-xs-12 col-sm-2 sidebar-container">
        <?php get_sidebar(); ?>
    </div>
</div>
<script type="text/javascript">
$(function() {

    var dateStart = moment(),
        dateEnd = moment().add("month", 11),
        timeValues = [],
        $elem = $("[name=move-in]");

    $elem.empty();
    while (dateEnd > dateStart || dateStart.format('M') === dateEnd.format('M')) {
        var monthName = dateStart.format('MMMM');
        $elem.append($("<option />").val(monthName).html(monthName));
        dateStart.add(1,'month');
    }
});
</script>
    <?php get_footer(); ?>
