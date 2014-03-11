<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div id="<?php the_ID(); ?>" <?php post_class(); ?>>
      <h2 class="post-title upper">
        <?php the_title(); ?>
      </h2>
      <p class="post-info">
        Posté le <?php the_date(); ?>.
      </p>
      <div class="post-content">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; ?>
<?php else : ?>
  <p class="nothing">
    Il n'y a pas de Post à afficher !
  </p>
<?php endif; ?>
