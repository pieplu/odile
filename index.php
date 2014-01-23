<?php get_header(); ?>
<div class="main">
  <div class="wrapper">
	  <?php get_template_part('loop'); ?>
	  <?php previous_posts_link(); ?>
	  <?php next_posts_link(); ?>
  </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>