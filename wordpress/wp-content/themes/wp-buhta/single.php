<?php get_header(); ?>
<?php $images = get_field('post_gallery'); ?>

      <div class="wrapper title-wrap-sinhts-inst <?php if( !$images ) { ?>no-image-title<?php } ?>" >
        <h2 <?php if( $images ) { ?>class="singht-int-h2"<?php } ?>><?php the_title(); ?></h2>
        <?php edit_post_link(); ?>
      </div>
    </div>
  </header>
  <!-- header and -->
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>


  <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container-fluid rock-slide">
      <div class="row">

        <?php
        if( $images ) { ?>
          <div class="col-md-6 col-sm-12">
            <div class="rama-wrap">
              <div class="fotorama">
                <?php foreach( $images as $image ): ?>
                  <img src="<?php echo $image['url']; ?>">
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-12 content has__gallery">
        <?php }
        else { ?>
          <div class="col-md-12 col-sm-12 content">
        <?php } ?>

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
