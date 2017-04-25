<?php get_header(); ?>
    </div>
  </header>

  <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container-fluid rock-slide">
      <div class="row">
          <div class="col-md-12 col-sm-12">
            <h1 class="ctitle"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
            <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
        </div>

      </div><!-- /.row -->
    </div>
  </section>

<?php get_footer(); ?>
