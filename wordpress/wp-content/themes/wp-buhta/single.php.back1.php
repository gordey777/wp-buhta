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
        <div class="col-md-12">
          <?php
          if( $images ) { ?>
            <div class="col-md-6 col-sm-12">
<!--               <div class="rama-wrap">
  <div class="fotorama">
    <?php //foreach( $images as $image ): ?>
      <a href="<?php //echo $image['sizes']['large']; ?>">
          <img src="<?php //echo $image['sizes']['thumbnail']; ?>">
      </a>
    <?php //endforeach; ?>
  </div>
</div> -->
              <div class="rama-wrap">


                <div id="sync1" class="owl-carousel owl-theme">
                  <?php foreach( $images as $image ): ?>
                    <div class="item">
                      <a class="post-slide-link" href="<?php echo $image['url']; ?>" rel="lightbox">
                        <img class="post-slide-img" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                      </a>
                    </div>
                  <?php endforeach; ?>
                </div>

                <div id="thumbs_navs">
                  <div id="sync2" class="owl-carousel owl-theme">
                    <?php foreach( $images as $image ): ?>
                      <div class="item">
                        <img src="<?php echo $image['sizes']['custom-size-small']; ?>" alt="<?php echo $image['alt']; ?>" />
                      </div>
                    <?php endforeach; ?>
                  </div>

                </div>


              </div>
            </div>

          <?php } ?>

            <div class="content <?php if( $images ) { ?>has__gallery<?php } ?>">


            <?php the_content(); ?>
          </div>



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
