<?php if (have_posts()) : ?>

<button class="css1">★ CHECKOUT ★</button>
  <?php while (have_posts()) : the_post(); ?>
    <div id="<?php the_ID(); ?>" <?php post_class(); ?>>
      <h3 class="post-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h3>
      <p class="post-info">
        Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
      </p>
      <div class="post-excerpt">
        <?php the_excerpt(); ?>
      </div>
    </div>
  <?php endwhile; ?>
<?php else : ?>
  <p class="nothing">
    Il n'y a pas de Post à afficher !
  </p>
<?php endif; ?>
