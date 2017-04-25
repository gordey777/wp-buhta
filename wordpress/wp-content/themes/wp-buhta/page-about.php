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

  <section class="second">
    <div class="container-fluid for-about">
      <h2>Чем можно заняться на турбазе «песчаная бухта»</h2>
      <p class="card">
        Бухта Песчаная – визитная карточка Байкала. Это место никого не оставляет равнодушным, поэтому ежегодно сюда стремится попасть все большее количество туристов, в том числе и иностранных. Это место ценят, прежде всего, за нетронутую природу, дарящую великолепные пейзажи, которые давно стали вдохновением художников.
      </p>
      <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-wrap box-wrap-about">
            <div class="underline about-icon">
              <img src="img/about/ab-icon-1.png" alt="наши преймущества">
            </div>
            <div class="box-text-wrap">
              <h3>Питание</h3>
              <p>Самый бюджетный и простой способ сделать ремонт в своей квартире и преобразить её внешний вид. Самый бюджетный и простойспособ сделать ремонт в своей квартире и преобразить её внешний вид.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-wrap box-wrap-about">
            <div class="underline about-icon">
              <img src="img/about/ab-icon-2.png" alt="теплая вода">
            </div>
            <div class="box-text-wrap">
              <h3>Проживание</h3>
              <p>Самый бюджетный и простой способ сделать ремонт в своей квартире и преобразить её внешний вид. Самый бюджетный и простойспособ сделать ремонт в своей квартире и преобразить её внешний вид.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-wrap box-wrap-about">
            <div class="underline about-icon">
              <img src="img/about/ab-icon-3.png" alt="Уединение с природой">
            </div>
            <div class="box-text-wrap">
              <h3>Благоустройство</h3>
              <p>Самый бюджетный и простой способ сделать ремонт в своей квартире и преобразить её внешний вид. Самый бюджетный и простойспособ сделать ремонт в своей квартире и преобразить её внешний вид</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-wrap box-wrap-about">
            <div class="underline about-icon">
              <img src="img/about/ab-icon-4.png" alt="наши преймущества">
            </div>
            <div class="box-text-wrap">
              <h3>Питание</h3>
              <p>Самый бюджетный и простой способ сделать ремонт в своей квартире и преобразить её внешний вид. Самый бюджетный и простойспособ сделать ремонт в своей квартире и преобразить её внешний вид.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-wrap box-wrap-about">
            <div class="underline about-icon">
              <img src="img/about/ab-icon-5.png" alt="теплая вода">
            </div>
            <div class="box-text-wrap">
              <h3>Проживание</h3>
              <p>Самый бюджетный и простой способ сделать ремонт в своей квартире и преобразить её внешний вид. Самый бюджетный и простойспособ сделать ремонт в своей квартире и преобразить её внешний вид.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-wrap box-wrap-about">
            <div class="underline about-icon">
              <img src="img/about/ab-icon-6.png" alt="Уединение с природой">
            </div>
            <div class="box-text-wrap">
              <h3>Благоустройство</h3>
              <p>Самый бюджетный и простой способ сделать ремонт в своей квартире и преобразить её внешний вид. Самый бюджетный и простойспособ сделать ремонт в своей квартире и преобразить её внешний вид</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
  <section class="third-about">
    <div class="container-fluid">
      <h2>Чем мы отличаемся от других мест на байкале?</h2>
      <div class="row first-row">
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-wrap for-outline about-3sec">
            <div class="img-wrap">
              <img src="img/home/territory.jpg" alt="наши преймущества">
            </div>
            <div class="box-text">
              <h3>Чистая территория</h3>
              <p>Администрация базы отдыха тщательно следит за чистотой и порядком на прилегающей территории, проводя регулярные уборки. Вы будете наслаждаться исключительно чистой природой Байкала.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-wrap for-outline about-3sec">
            <div class="img-wrap">
              <img src="img/home/water.jpg" alt="теплая вода">
            </div>
            <div class="box-text">
              <h3>Теплая вода</h3>
              <p>Бухта Песчаная – самое солнечное и теплое место на Байкале. Недаром Песчаную называют не иначе как Байкальская Ривьера. В самые жаркие месяцы температура воды может доходить до отметки +22°С. Бархатный сезон приходится на июль и август.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-wrap for-outline about-3sec">
            <div class="img-wrap">
              <img src="img/home/fire.jpg" alt="Уединение с природой">
            </div>
            <div class="box-text">
              <h3>Атмосфера полного уединения с природой</h3>
              <p>Бухта Песчаная – шедевр, созданный природой, который позволит забыть о повседневной суете и городской пыли. Даже фото этого места поражают воображение. Здесь нет ни автомобильных, ни железнодорожных путей, что позволяет дышать кристально чистым воздухом, наслаждаться потрясающими пейзажами, уютным пляжем, устланным нежным песком, и прозрачной бирюзовой водой Байкала.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-wrap for-outline about-3sec">
            <div class="img-wrap">
              <img src="img/home/fog.jpg" alt="наши преймущества">
            </div>
            <div class="box-text">
              <h3>Нетронутая природа заповедника</h3>
              <p>Бухта Песчаная находится на территории национального байкальского парка и признан а важным памятником природы. Именно здесь, на заповедных территориях, можно во всей красе увидеть настоящую дикую природу и посетить уникальные природные объекты.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-wrap for-outline about-3sec">
            <div class="img-wrap">
              <img src="img/home/bird.jpg" alt="теплая вода">
            </div>
            <div class="box-text">
              <h3>Уникальные животные и птицы</h3>
              <p>На территории заповедника можно встретить множество редких видов животных и птиц, в их числе бакланы, нерпы, лоси, олени, и т.д. В близи от бухты, есть уникальная возможность понаблюдать за охотой бакланов, славящихся своим рыболовным талантом.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-wrap for-outline about-3sec">
            <div class="img-wrap">
              <img src="img/home/rock.jpg" alt="Уединение с природой">
            </div>
            <div class="box-text">
              <h3>Экскурси</h3>
              <p>Туристическая база «Бухта Песчаная» предлагает посетить 3 бесплатные экскурсии в самые уникальные и труднодоступные места. Масса незабываемых эмоций вам гарантирована.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
