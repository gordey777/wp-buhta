  <footer>
    <div class="container-fluid footer-contain">
      <div class="box-row containe footer-box">
        <div class="footer-item left">
          <div class="footer-logo">

                <?php if ( ! is_front_page() ) { ?>
                  <a href="<?php echo home_url(); ?>">
                <?php  } ?>
                  <span class="buhta">Песчаная <span>бухта</span></span>
                  <span class="baza">лучшая база отдыха на байкале</span>
                <?php if ( ! is_front_page() ) { ?>
                  </a>
                <?php  } ?>

          </div>
          <p>Турбаза «Бухта Песчаная» — официальный<br>  представитель активного отдыха на байкале.</p>
          <?php if( have_rows('socials', 43 ) ): ?>
            <div class="social-row">
              <ul>
                <?php while ( have_rows('socials', 43 ) ) : the_row(); ?>
                  <li>
                    <a href="<?php the_sub_field('link'); ?>" class="" title="<?php the_sub_field('desc'); ?>">
                      <img src="<?php the_sub_field('ico'); ?>" alt="<?php the_sub_field('desc'); ?>">
                    </a>
                  </li>
                <?php  endwhile; ?>
              </ul>
            </div>
          <?php endif; ?>
        </div>

        <div class="footer-item-wrap">
          <nav class="footer-item center">
            <h5>Пункты меню</h5>
            <?php wpeFootNav(); ?>
          </nav>
          <div class="footer-item right">
            <h5>Контактная информация</h5>
            <ul>
              <li class="addr"><?php the_field('address', 43 ); ?></li>
              <?php if( have_rows('phone_number', 43 ) ): ?>
                <?php while ( have_rows('phone_number', 43 ) ) : the_row(); ?>
                  <li class="foot-tel">
                    <a href="tel:+<?php the_sub_field('phone_link'); ?>">
                      <?php the_sub_field('phone'); ?>
                    </a>
                  </li>
                <?php  endwhile; ?>
              <?php endif; ?>
              <li class="foot-mail">
                <a href="mailto:<?php the_field('email', 43 ); ?>">
                  <?php the_field('email', 43 ); ?>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
    <div class="copyright">
      <p>© 2017 Copyright.<span> Бухта Песчаная.</span> Лучшая база отдыха на байкале 1995 - <?php echo date("Y"); ?> г.</p>
    </div>
  </footer>

  <!-- MODAL VINDOW Order-->
  <div id="modal_order" class="modal fade  bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="video-window">
      <span  data-dismiss="modal" aria-label="Close" class="close-nav close-video"><img src="<?php echo get_template_directory_uri(); ?>/img/home/close-modal.png" alt=""></span>
      <h4 class="for-radius">Форма заказа путевки для отдыха в песчанной бухте</h4>
        <?php echo do_shortcode('[contact-form-7 id="214" title="Купить путевку"]'); ?>

    </div>
  </div>
  <!-- / MODAL VINDOW Order-->
  <!--Модальное окно-слайдер-->
  <div id="modal_callback" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content clearfix">
        <div class="modal-header">
        <span  data-dismiss="modal" aria-label="Close" class="close-nav close-video"><img src="<?php echo get_template_directory_uri(); ?>/img/home/close-modal.png" alt=""></span>
          <div class="button-wrap close" data-dismiss=modal aria-hidden=true>
            <span class="top-line"></span>
          </div>
          <h4 class="modal-title">Обратный звонок</h4>
        </div>
        <div class="modal-body">
          <div class="col-xs-12">
            <?php echo do_shortcode('[contact-form-7 id="30" title="Модальное Обратный звонок"]'); ?>

          </div>
        </div>
      </div>
    </div>
  </div>


  <?php wp_footer(); ?>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

<?php $images = get_field('post_gallery');
if( $images ) { ?>

  <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/fotorama_options.js"></script>
<?php } ?>

</body>
</html>
