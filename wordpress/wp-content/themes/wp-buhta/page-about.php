<?php /* Template Name: About Page */ get_header(); ?>
      <?php if( have_rows('slider_cont', 43 ) ): ?>
        <?php while ( have_rows('slider_cont', 43 ) ) : the_row(); ?>
          <div class="wrapper title-wrap">
            <h1>
              <?php the_sub_field('title'); ?>
            </h1>
            <?php the_sub_field('content'); ?>
            <div class="button-row">
              <a href="<?php the_sub_field('link'); ?>">Подробнее о турбазе</a>
            </div>
          </div>
        <?php  endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="clear"></div>
            <!-- Slider -->
    <div class="slide-content">
      <?php if( have_rows('top_slider', 43 ) ): ?>
        <?php while ( have_rows('top_slider', 43 ) ) : the_row(); ?>
          <div>
            <?php $image = get_sub_field('image');
            if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="Песчаная бухта">
            <?php endif; ?>
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

        <div class="row row-flex">
          <?php while ( have_rows('differences') ) : the_row(); ?>

            <div class="col-md-4 col-sm-12 col-xs-12  looper_wrapp">
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

    <section class="fourth">
    <div class="container-fluid">
      <h2>достопремичательности песчанки</h2>
      <div class="row  row-flex">

        <?php
         $args = array(
                 'cat' => '11', //ID Рубрики
                 'post_type' => 'post',
                 'posts_per_page' => 4, //Количество постов в блоке ПОЛЕЗНЫЕ СТАТЬИ
                 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                 );
        query_posts($args); ?>

        <?php get_template_part('loop'); ?>

        <?php wp_reset_query(); ?>

      </div>
    </div>
  </section>

<?php get_footer(); ?>
