<?php
/**
 * Template Name: BKG Blog
 *
 */
get_header();?>
<div class="container">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  		<?php the_content();?>
<?php endwhile; endif; wp_reset_query(); ?>
</div>
<?php get_footer();?>
