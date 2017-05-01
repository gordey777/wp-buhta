  <div class="col-md-3 col-sm-6 col-xs-12 looper_wrapp">
    <div id="post-<?php the_ID(); ?>" <?php post_class('looper'); ?>>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

          <div class="img-wrap">

              <?php if ( has_post_thumbnail()) :
                the_post_thumbnail('medium');
              else: ?>
                <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
              <?php endif; ?>

          </div>
          <div class="box-text">
            <?php $post_id = get_the_ID();
            if( have_rows('category_title', $post_id ) ) { ?>
              <?php while ( have_rows('category_title', $post_id ) ) : the_row(); ?>
                <?php the_sub_field('title'); ?>
                <h3><?php the_sub_field('sub_title'); ?></h3>

                  <?php the_sub_field('sub_desc'); ?>

              <?php  endwhile; ?>
            <?php }
            else { ?>
              <h3><?php the_title(); ?></h3>
              <?php wpeExcerpt('wpeExcerpt40'); ?>
            <?php } ?>

          </div>
          <div class="box-wrap-detalis">
            <span>Подробнее...</span>
          </div>

      </a>
    </div><!-- /looper -->
  </div>
