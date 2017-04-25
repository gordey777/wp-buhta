<?php get_header(); ?>

      <div class="wrapper title-wrap-sinhts-inst">
        <h2 class="singht-int-h2 h2-contacts"><?php the_title(); ?></h2><?php edit_post_link(); ?>
      </div>
    </div>
  </header>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container-fluid rock-slide content">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <?php the_content(); ?>
        </div>

      </div><!-- /.row -->
    </div>
  </section>

  <?php endwhile; else: ?>
    <section>

      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

    </section>
  <?php endif; ?>
<?php get_footer(); ?>
