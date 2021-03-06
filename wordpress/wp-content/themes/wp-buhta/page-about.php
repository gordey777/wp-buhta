<?php /* Template Name: About Page */ get_header(); ?>

            <!-- Slider -->
    <div class="slide-content">
      <?php if( have_rows('header_slider') ): ?>
        <?php while ( have_rows('header_slider') ) : the_row(); ?>
            <?php $image = get_sub_field('img'); ?>
          <div class="content-slide" <?php if( !empty($image) ) { ?> style="background: url(<?php echo $image['url']; ?>) no-repeat center center; background-size: cover;"<?php } ?>>

          <div class="wrapper title-wrap">
              <?php the_sub_field('content'); ?>
            <div class="button-row">
              <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('btn_title'); ?></a>
            </div>
          </div>
          </div>
        <?php  endwhile; ?>
      <?php endif; ?>
    </div><!-- ./slide-content -->
  </header>


  <?php if( have_rows('about_do') ): ?>
    <?php while ( have_rows('about_do') ) : the_row(); ?>

      <section class="second">
        <div class="container-fluid for-about">
          <h2><?php the_sub_field('title'); ?></h2>
          <p class="card"><?php the_sub_field('title_desc'); ?></p>
          <div class="row row-flex">

            <?php if( have_rows('sub_items') ): ?>
              <?php while ( have_rows('sub_items') ) : the_row(); ?>
                <div class="col-md-3 col-md-offset-1 col-sm-offset-0 col-sm-6">
                  <div class="col-lg-9 col-md-12">
                    <div class="box-wrapbox-wrap-about">
                      <div class="underline about-icon">
                        <img src="<?php the_sub_field('sub_img'); ?>">
                      </div>
                      <div class="box-text-wrap">
                        <h3><?php the_sub_field('sub_title'); ?></h3>
                        <?php the_sub_field('sub_desc'); ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php  endwhile; ?>
            <?php endif; ?>

          </div>
        </div>
      </section>

    <?php  endwhile; ?>
  <?php endif; ?>


  <section class="price about-form">
    <div class="price-box container-fluid">
      <div class="about-form-left ">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php edit_post_link(); ?>
            <?php the_content(); ?>

          </article>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="about-form-right">
        <?php echo do_shortcode('[contact-form-7 id="159" title="Быстрая заявка"]'); ?>
      </div>
    </div>
  </section>

  <?php if( have_rows('differences') ): ?>
    <section class="third-about">
      <div class="container-fluid">
        <h2>Чем мы отличаемся от других мест на байкале?</h2>

        <div class="row differences">
          <?php while ( have_rows('differences') ) : the_row(); ?>

            <div class="col-md-4 col-sm-12 col-xs-12 looper_wrapp">
              <div class="looper-about">
                <div class="img-wrap">
                  <img src="<?php the_sub_field('img'); ?>" alt="наши преймущества">
                </div>
                <div class="box-text">
                  <h3><?php the_sub_field('title'); ?></h3>
                  <p><?php the_sub_field('description'); ?></p>
                </div>
              </div>
            </div>
          <?php  endwhile; ?>
        </div>

      </div>
    </section>
  <?php endif; ?>

<?php if( have_rows('selection') ): ?>
  <?php while ( have_rows('selection') ) : the_row(); ?>
    <section class="selection" style="background: url(<?php the_sub_field('image_bg'); ?>) no-repeat top center;">
      <div class="container-fluid select">
        <div class="row">
          <div class="col-xs-12">
            <?php the_sub_field('content'); ?>

          </div>
        </div>
      </div>
    </section>
  <?php  endwhile; ?>
<?php endif; ?>

<?php if( have_rows('cards') ): ?>
  <section class="fourth">
    <div class="container-fluid">
      <h2><?php the_field('cards_title'); ?></h2>
      <div class="row row-flex">
        <?php while ( have_rows('cards') ) : the_row(); ?>
          <div class="col-md-3 col-sm-6 col-xs-12 looper_wrapp">
            <div class="looper">
              <a href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('title'); ?>">
                  <div class="img-wrap">
                  <?php $image = get_sub_field('img'); ?>
                      <?php if ( !empty($image)) : ?>
                        <img src="<?php echo $image['sizes']['thumbnail']; ?>" title="<?php the_sub_field('title'); ?>" alt="<?php the_sub_field('title'); ?>" />
                      <?php else: ?>
                        <img src="<?php get_template_directory_uri();?>/img/noimage.jpg" title="<?php the_sub_field('title'); ?>" alt="<?php the_sub_field('title'); ?>" />
                      <?php endif; ?>
                  </div>
                  <div class="box-text">
                    <h3><?php the_sub_field('title'); ?></h3>
                    <?php the_sub_field('desc'); ?>
                  </div>
                  <div class="box-wrap-detalis">
                    <span>Подробнее...</span>
                  </div>
              </a>
            </div><!-- /looper -->
          </div>
        <?php  endwhile; ?>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php get_footer(); ?>
