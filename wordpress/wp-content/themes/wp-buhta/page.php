<?php get_header(); ?>

      <div class="wrapper title-wrap-sinhts-inst">
        <h2 class="singht-int-h2 h2-contacts"><?php the_title(); ?></h2>
      </div>
    </div>
  </header>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


      <?php the_content(); ?>
      <?php edit_post_link(); ?>

    </article>
  <?php endwhile; else: // If 404 page error ?>
    <article>

      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

    </article>
  <?php endif; ?>

<?php get_footer(); ?>
