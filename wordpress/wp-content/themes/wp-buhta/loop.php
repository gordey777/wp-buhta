<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div id="post-<?php the_ID(); ?>" <?php post_class('looper'); ?>>

      <div class="box-wrap for-outline">
        <div class="img-wrap">
          <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php if ( has_post_thumbnail()) :
              the_post_thumbnail('medium');
            else: ?>
              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>
          </a><!-- /post thumbnail -->
        </div>
        <div class="box-text">
          <h3><?php the_title(); ?></h3>
          <?php wpeExcerpt('wpeExcerpt40'); ?>
        </div>
        <div class="box-wrap-detalis">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Подробнее...</a>
        </div>
      </div>

    </div><!-- /looper -->
  </div>
  <?php endwhile; else: ?>
  <div class="col-md-3 col-sm-6 col-xs-12">

    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

  </div>
<?php endif; ?>
