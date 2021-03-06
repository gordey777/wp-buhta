<?php /* Template Name: Front Page */ get_header(); ?>

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



  <?php if( have_rows('more_about', 43 ) ): ?>
    <?php while ( have_rows('more_about', 43 ) ) : the_row(); ?>

      <section class="second">
        <div class="container-fluid">
          <h2><?php the_sub_field('title'); ?></h2>
          <p class="card"><?php the_sub_field('desc'); ?></p>
          <div class="row">

            <?php if( have_rows('sub_blocks', 43 ) ): ?>
              <?php while ( have_rows('sub_blocks', 43 ) ) : the_row(); ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="box-wrap">
                    <div class="underline">
                      <img src="<?php the_sub_field('logo'); ?>" alt="наши преймущества">
                    </div>
                    <div class="box-text-wrap">
                      <h3><?php the_sub_field('sub_title'); ?></h3>
                      <?php the_sub_field('sub_desc'); ?>
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


  <?php if( have_rows('gallery_block') ): ?>
    <section class="third">
      <div class="container-fluid tabs____tabs">
        <nav id="tabs" class="sec-nav">
          <ul id="tabs_list" class="tabs">
            <?php $tab_nav = 0;
            while ( have_rows('gallery_block') ) : the_row();
            $tab_nav++; ?>
              <?php $images = get_sub_field('image'); ?>

              <li class="<?php if($tab_nav == 1){ ?>current<?php } ?>" data-tab="tab-<?php echo $tab_nav; ?>">

                  <?php the_sub_field('title'); ?>

              </li>

            <?php endwhile; ?>
          </ul>
        </nav>


          <?php $tab_id = 1;
          $car_class = '';
          while ( have_rows('gallery_block') ) : the_row(); ?>
          <?php if ($tab_id == 1){
            $car_class = 'current';
          } ?>
          <div id="tab-<?php echo $tab_id; ?>" class="tab_content header_gallery <?php //echo $car_class; ?>">
            <ul id="tab_slider<?php echo $tab_id; ?>" class="bxslider row">
            <?php  $tab_id++; ?>
            <?php $images = get_sub_field('image'); ?>

            <?php if( $images ): ?>

              <?php
              $i_max = count($images);
              $n_max = ($i_max % 6) + 1;
              $i = 0;
              $k = 0;

              while ( $k < $n_max ) { ?>
                  <?php if ( $i < $i_max ) { ?>
                    <li class="col-xs-6">
                      <div class="row top_row">

                        <div class="col-xs-6 hs_small_img">
                          <?php if ($i < $i_max ) { ?>
                            <a href="<?php echo  $images[$i]['url']; ?>" rel="lightbox">
                              <img src="<?php echo $images[$i]['sizes']['medium']; ?>" alt="<?php echo $images[$i]['alt']; ?>" />
                            </a>
                            <?php $i++;
                          } ?>
                        </div>

                        <div class="col-xs-6 hs_small_img">
                          <?php if ($i < $i_max ) { ?>
                            <a href="<?php echo  $images[$i]['url']; ?>" rel="lightbox">
                              <img src="<?php echo $images[$i]['sizes']['medium']; ?>" alt="<?php echo $images[$i]['alt']; ?>" />
                            </a>
                            <?php $i++;
                          } ?>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-12 hs_big_img">
                          <?php if ($i < $i_max ) { ?>
                            <a href="<?php echo  $images[$i]['url']; ?>" rel="lightbox">
                              <img src="<?php echo $images[$i]['sizes']['medium']; ?>" alt="<?php echo $images[$i]['alt']; ?>" />
                            </a>
                            <?php $i++;
                          } ?>
                        </div>

                      </div>
                    </li>
                  <?php
                  }

                  if ($i < $i_max ) { ?>
                    <li class="col-xs-6">
                      <div class="row top_row">

                        <div class="col-xs-12 hs_big_img">
                          <?php if ($i < $i_max ) { ?>
                            <a href="<?php echo  $images[$i]['url']; ?>" rel="lightbox">
                              <img src="<?php echo $images[$i]['sizes']['medium']; ?>" alt="<?php echo $images[$i]['alt']; ?>" />
                            </a>
                            <?php $i++;
                          } ?>
                        </div>

                      </div>

                      <div class="row">

                        <div class="col-xs-6 hs_small_img">
                          <?php if ($i < $i_max ) { ?>
                            <a href="<?php echo  $images[$i]['url']; ?>" rel="lightbox">
                              <img src="<?php echo $images[$i]['sizes']['medium']; ?>" alt="<?php echo $images[$i]['alt']; ?>" />
                            </a>
                            <?php $i++;
                          } ?>
                        </div>

                        <div class="col-xs-6 hs_small_img">
                          <?php if ($i < $i_max ) { ?>
                            <a href="<?php echo  $images[$i]['url']; ?>" rel="lightbox">
                              <img src="<?php echo $images[$i]['sizes']['medium']; ?>" alt="<?php echo $images[$i]['alt']; ?>" />
                            </a>
                            <?php $i++;
                          } ?>
                        </div>
                      </div>
                    </li>
                  <?php
                  }

                  $k++;
              }

              endif; ?>

                </ul>
              </div><!-- /.tab_content -->

            <?php endwhile; ?>



      </div>
    </section>
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
                        <img src="<?php echo $image['sizes']['medium']; ?>" title="<?php the_sub_field('title'); ?>" alt="<?php the_sub_field('title'); ?>" />
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

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <section class="price">
        <div class="price-box container-fluid">
          <?php the_content(); ?>
          <?php edit_post_link(); ?>
        </div>
      </section>
    <?php endwhile;?>
    <?php endif; ?>

    <section class="questions">
      <div class="questions-content">
        <?php echo do_shortcode('[contact-form-7 id="114" title="Остались вопросы"]'); ?>
      </div>
    </section>



<?php get_footer(); ?>
