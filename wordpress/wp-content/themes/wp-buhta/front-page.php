<?php /* Template Name: Front Page */ get_header(); ?>
      <?php if( have_rows('slider_cont', 43 ) ): ?>
        <?php while ( have_rows('slider_cont', 43 ) ) : the_row(); ?>
          <div class="wrapper title-wrap">
            <h1>
            <?php the_sub_field('title'); ?>
            <span class="link-h1">
            <a href="<?php the_sub_field('partner_link'); ?>">сайт официального представителя</a>
            </span>
            </span>
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
          <div id="tab-<?php echo $tab_id; ?>" class="tab_content <?php //echo $car_class; ?>">
            <ul id="tab_slider<?php echo $tab_id; ?>" class="bxslider">
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
                    <li>
                      <div class="first-foto-group">
                        <div class="top-group first">
                          <div class="left-foto">
                            <div class="effect eff-2-1">
                              <?php if ($i < $i_max ) { ?>
                                <a href="<?php echo  $images[$i]['url']; ?>" rel="lightbox">
                                  <img src="<?php echo $images[$i]['sizes']['large']; ?>" alt="<?php echo $images[$i]['alt']; ?>" />
<!--                                   <div class="caption" style="background: url(<?php //echo $images[$i]['sizes']['large']; ?>) no-repeat center center;">
</div> -->
                                </a>
                              <?php $i++;
                              } ?>
                            </div>
                          </div>
                          <div class="right-foto">
                            <div class="effect eff-2-1">
                              <?php if ($i < $i_max ) { ?>
                                <a href="<?php echo  $images[$i]['url']; ?>" rel="lightbox">
                                  <img src="<?php echo $images[$i]['sizes']['large']; ?>" alt="<?php echo $images[$i]['alt']; ?>" />

                                </a>
                              <?php $i++;
                              } ?>
                            </div>
                          </div>
                        </div>
                        <div class="bottom-foto first">
                          <div class="effect eff-2-1">
                              <?php if ($i < $i_max ) { ?>
                                <a href="<?php echo  $images[$i]['url']; ?>" rel="lightbox">
                                  <img src="<?php echo $images[$i]['sizes']['large']; ?>" alt="<?php echo $images[$i]['alt']; ?>" />

                                </a>
                              <?php $i++;
                              } ?>
                          </div>
                        </div>
                      </div>
                    </li>
                  <?php
                  }

                  if ($i < $i_max ) { ?>
                    <li>
                      <div class="second-foto-group">
                        <div class="bottom-foto second">
                          <div class="effect eff-2-1">
                              <?php if ($i < $i_max ) { ?>
                                <a href="<?php echo  $images[$i]['url']; ?>" rel="lightbox">
                                  <img src="<?php echo $images[$i]['sizes']['large']; ?>" alt="<?php echo $images[$i]['alt']; ?>" />

                                </a>
                              <?php $i++;
                              } ?>
                          </div>
                        </div>
                        <div class="top-group second">
                          <div class="left-foto">
                            <div class="effect eff-2-1">
                              <?php if ($i < $i_max ) { ?>
                                <a href="<?php echo  $images[$i]['url']; ?>" rel="lightbox">
                                  <img src="<?php echo $images[$i]['sizes']['large']; ?>" alt="<?php echo $images[$i]['alt']; ?>" />

                                </a>
                              <?php $i++;
                              } ?>
                            </div>
                          </div>
                          <div class="right-foto">
                            <div class="effect eff-2-1">
                              <?php if ($i < $i_max ) { ?>
                                <a href="<?php echo  $images[$i]['url']; ?>" rel="lightbox">
                                  <img src="<?php echo $images[$i]['sizes']['large']; ?>" alt="<?php echo $images[$i]['alt']; ?>" />

                                </a>
                              <?php $i++;
                              } ?>
                            </div>
                          </div>
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


  <section class="fourth">
    <div class="container-fluid">
      <h2>Экскурсии по чудесам песчанной бухты</h2>
      <div class="row">

        <?php $args = array(
          'posts_per_page' => 4,//ID рубрики Экскурсии
          'cat' => '11',

        );

        $query = new WP_Query( $args );


        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post(); ?>
            <div class="col-md-3 col-sm-6 col-xs-12">
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
                  <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                  <?php wpeExcerpt('wpeExcerpt40'); ?>
                </div>
              </div>
            </div>

          <?php }
        }

        wp_reset_postdata(); ?>

      </div>
    </div>
  </section>

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
