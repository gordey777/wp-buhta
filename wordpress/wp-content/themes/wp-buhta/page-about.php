<?php /* Template Name: About Page */ get_header(); ?>

      <div class="wrapper title-wrap">
        <h1>Отдых на туристической базе <div class="main">«Бухта Песчаная»</div><span class="on-bajkal"><span>на Байкале</span><span class="link-h1"><a href="#">сайт официального представителя</a></span></span></h1>
        <p class="title-p">Нетронутая цивилизацией красота природы, скалистые обрывы, уютный полумесяц пляжа и густые таежные леса — все это ждет вас в одном из самых живописных мест на Байкале, в бухте Песчаная. А насладиться всеми прелестями дикой природы позволяет официальный представитель – турбаза «Бухта Песчаная».</p>
        <p class="title-p2">Бухта расположена вдали от цивилизации и добраться сюда можно исключительно на корабле, что гарантирует истинное наслаждение для всех, кто хочет отдохнуть в условиях первозданной природы. Отправляясь в эту заповедную зону, вы сможете незабываемо провести время и по достоинству оценить непревзойденную красоту.</p>
        <div class="button-row">
          <a href="about-base.html">Подробнее о турбазе</a>
        </div>
      </div>
    </div>
    <div class="clear"></div>
            <!-- Slider -->
    <div class="slide-content">
      <div><img src="<?php echo get_template_directory_uri(); ?>/img/home/header-slide1.jpg" alt="Песчаная бухта"></div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/img/home/header-slide2.jpg" alt="Песчаная бухта"></div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/img/home/header-slide3.jpg" alt="Песчаная бухта"></div>
    </div><!-- ./slide-content -->
  </header>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <h1 class="page-title inner-title"><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php edit_post_link(); ?>

    </article>
  <?php endwhile; else: // If 404 page error ?>
    <article>

      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

    </article>
  <?php endif; ?>
<?php get_footer(); ?>
