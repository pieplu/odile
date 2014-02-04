<?php get_header(); ?>
<div class="main wrapper clearfix">
	<div class="grid3-1"><div class="">
	  <?php get_template_part('loop'); ?>
	  <?php previous_posts_link(); ?>
	  <?php next_posts_link(); ?>
	  </div>
	<div class="">
	  <?php get_sidebar(); ?>
    </div></div>
</div>
<?php get_footer(); ?>
<?php $points= round( 35+(Prix-35)*0.75*exp(-4.16*pow(10,-4)*Prix)); ?>