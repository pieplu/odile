<?php get_header(); ?>
<div class="main">
  <div class="wrapper">
	  <?php get_template_part('loop'); ?>
	  <?php previous_posts_link(); ?>
	  <?php next_posts_link(); ?>
  </div>
</div>
<?php $Prix = 310;
$points= round( 35+($Prix-35)*0.75*exp(-4.16*pow(10,-4)*$Prix));
echo $points; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php $points= round( 35+(Prix-35)*0.75*exp(-4.16*pow(10,-4)*Prix)); ?>