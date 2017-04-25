<?php /* Template Name: About Page */ get_header(); ?>
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


  <?php if( have_rows('about_do') ): ?>
    <?php while ( have_rows('about_do') ) : the_row(); ?>

      <section class="second">
        <div class="container-fluid for-about">
          <h2><?php the_sub_field('title'); ?></h2>
          <p class="card"><?php the_sub_field('desc'); ?></p>
          <div class="row">

            <?php if( have_rows('sub_items') ): ?>
              <?php while ( have_rows('sub_items') ) : the_row(); ?>
                <div class="col-md-4 col-sm-12 col-xs-12">
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

        <div class="row">
          <?php while ( have_rows('differences') ) : the_row(); ?>

            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="box-wrap for-outline about-3sec">
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


  <section class="selection">
    <div class="container-fluid select">
      <div class="row">
        <div class="col-xs-12">
          <div class="linc-select">
            <a href="#">Хотите буджетно отдохнуть на байкале, но еще не определились с выбором?</a>
          </div>
          <h2 class="select-title">Выбирая турбазу «песчанка» вас ожидают
          <span>незабываемые впечатления от летнего отдыха!</span>
          </h2>
          <ul>
            <li>Цена для взрослых - 2200 руб/в день</li>
            <li>Цена для детей не старше 22 лет - 1900руб/в день</li>
            <li>Проезд на теплоходе "Баргузин" туда -обратно - 4200 руб</li>
            <li>Трансфер в Большое Галаусное и доставка до турбазы на нашем судне туда-обратно - 2700 руб</li>
          </ul>
          <div class="select-button-row">
            <a href="#" class="select-button video-start">купить путевку</a>
          </div>
          <div class="payments-row">
            <p>Все платежи осуществляются посредством сервиса безопасных платежей<a href="https://www.payanyway.ru">www.payanyway.ru</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
    <section class="fourth">
    <div class="container-fluid">
      <h2>достопремичательности песчанки</h2>
      <div class="row">

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
