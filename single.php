<?php get_header(); ?>
<div class="main wrapper clearfix">
 <div class="grid3-1">
	  <div class="nouvelle">
		  <?php if (have_posts()) : ?>
		    <?php while (have_posts()) : the_post(); ?>
		      <div class="post">
		        <h1 class="post-title"><?php the_title(); ?></h1>
		        <p class="post-info">
		          Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
		        </p>
		        <div class="post-content">
		          <?php the_content(); ?>
		        </div>
		        <?php the_tags('<p class="post-tags">Tags : ', ', ', '</p>'); ?>
		
				<div class="post-comments">
		          <?php comments_template(); ?>
		        </div>
		
		      </div>
		    <?php endwhile; ?>
		  <?php endif; ?>
	  </div>
	  <div class="sidebar">
	  	<?php get_sidebar(); ?>
	  </div>
  </div>
</div>

<?php get_footer(); ?>