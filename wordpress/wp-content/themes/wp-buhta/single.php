<?php get_header(); ?>
<?php $images = get_field('post_gallery'); ?>

      <div class="wrapper title-wrap-sinhts-inst" >
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

              <ul class="bxpost-gallery">
                <?php foreach( $images as $image ): ?>
                  <li>
                    <a href="<?php echo $image['url']; ?>" rel="lightbox">
                         <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>

              <div class="pager_wrapp">
                <ul id="bx-pager">
                <?php $i = 0;
                  foreach( $images as $image ): ?>
                    <li>
                      <a data-slide-index="<?php echo $i; ?>" href="">
                        <img src="<?php echo $image['sizes']['custom-size-small']; ?>" alt="<?php echo $image['alt']; ?>" />
                      </a>
                    </li>
                    <?php $i++;
                  endforeach; ?>
                </ul>
              </div>

            </div>
          </div>
          <div class="col-md-6 col-sm-12">
        <?php }
        else { ?>
          <div class="col-md-12 col-sm-12">
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
