<?php get_header(); ?>
<div class="main wrapper clearfix">
	<div class="w75 left">
	  <?php get_template_part('loop'); ?>
	  <?php previous_posts_link(); ?>
	  <?php next_posts_link(); ?>
	  </div>
	<div class="w20 Pml5 left">
	  <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
<?php $points= round( 35+(Prix-35)*0.75*exp(-4.16*pow(10,-4)*Prix)); ?>