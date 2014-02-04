<?php get_header(); ?>
<div class="main wrapper clearfix">
  <div class="grid3-1">
	<div class="nouvelles">
	  <?php get_template_part('loop'); ?>
	  <?php previous_posts_link(); ?>
	  <?php next_posts_link(); ?>
	  </div>
	<div class="sidebar">
	  <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
