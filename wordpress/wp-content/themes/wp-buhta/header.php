<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>


  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">

  <!-- icons -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="img/png">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="main-header">

    <div class="head-content-wrap">
      <div class="header-nav-row">
        <div class="nav container-fluid">
          <div class="wrapper">
            <div class="nav-row">
              <div class="logo-wrap">
<!--                 <?php if ( ! is_front_page() || ! is_home() ) { ?>
  <a href="<?php echo home_url(); ?>">
<?php  } ?>
<?php if ( ! is_front_page() || ! is_home() ) { ?>
  </a>
<?php  } ?> -->
                <a href="index.html" class="buhta">Песчаная <span>бухта</span></a>
                <a href="index.html" class="baza">лучшая база отдыха на байкале</a>

              </div>
              <div class="nav-wrap main-nav">
                <nav class="navigation">
                  <?php wpeHeadNav(); ?>
                </nav>
              </div>
              <div class="phone-wrap">
                <div class="buy"><a href="#" class="video-start">Купить путевку</a></div>
                <div class="phone-top">
                  <?php if( have_rows('phone_number', 43 ) ): ?>
                    <?php while ( have_rows('phone_number', 43 ) ) : the_row(); ?>
                        <a class="phone-top" href="tel:+<?php the_sub_field('phone_link'); ?>">
                          <?php the_sub_field('phone'); ?>
                        </a>
                    <?php  endwhile; ?>
                  <?php endif; ?>
                  <div class="phone-top-span">
                    <span data-toggle="modal" data-target=".bs-example-modal-sm">заказать обратный звонок</span>
                  </div>
                </div>
                <div class="adaptiv-button-wrap">
                  <p>меню</p>
                  <div class="span-wrap">
                    <span class="line" id="open"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clear"></div>
          </div>
          <div class="adaptive-buy"><a href="#" class="video-start">Купить путевку</a></div>
        </div>
      </div>

