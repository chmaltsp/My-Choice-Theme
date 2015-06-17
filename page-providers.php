<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( 'templates/page', 'header'); ?>
<?php endwhile; ?>
<div class="row">
    <div class="col-xs-12">
        <h3>Provider Network News</h3>
    </div>
    <?php query_posts( 'cat=5&showposts=4'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
        <p>
            <?php the_time( get_option( 'date_format' ) ); ?>
        </p>
        <p>
            <?php the_excerpt() ?>
        </p>
    </div>
    <?php endwhile; endif; ?>



</div>