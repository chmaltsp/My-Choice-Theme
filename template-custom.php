<?php
/**
 * Template Name: Custom Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
 <div class="row"><div class="col-xs-12"> <?php get_template_part('templates/page', 'header'); ?></div></div>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
