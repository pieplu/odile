<?php get_header(); ?>
<div class="main wrapper clearfix">
  
	<div class="nouvelles mt8">
	  <?php get_template_part('loop'); ?>
	  <?php previous_posts_link(); ?>
	  <?php next_posts_link(); ?>
	  </div>
	
</div>
<?php get_footer(); ?>
