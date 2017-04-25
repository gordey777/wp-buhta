<?php /* Template Name: Contacts Page */ get_header(); ?>

      <div class="wrapper title-wrap-sinhts-inst">
        <h2 class="singht-int-h2 h2-contacts"><?php the_title(); ?></h2><?php edit_post_link(); ?>
      </div>
    </div><!-- ./head-content-wrap -->
  </header>
  <!-- header and -->
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>


      <section class="our-contacts">
        <div class="container-fluid contacts">
          <div class="row">
            <div class="col-xs-12">
              <div class="contacts-wrap">
                <div class="forms-wrap">
                  <h4>Форма связи</h4>
                  <div class="for-outline-forms">
                    <?php echo do_shortcode('[contact-form-7 id="157" title="Форма связи"]'); ?>
                  </div>
                  <div class="clear"></div>
                </div>
                <div class="addr-wrap">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="map">
        <div class="container-fluid contacts">
          <div class="map-wrap">
            <div class="contacts-row">
              <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="datas data-tel">
                    <p>Наш номер телефона
                      <span>
                        <?php if( have_rows('phone_number', 43 ) ): ?>
                          <?php while ( have_rows('phone_number', 43 ) ) : the_row(); ?>
                            <?php the_sub_field('phone'); ?>
                          <?php  endwhile; ?>
                        <?php endif; ?>
                      </span>
                    </p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="datas data-addr">
                    <p>Адрес нашего офиса<span><?php the_field('address', 43 ); ?></span></p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="datas data-mail">
                    <p>Электронная почта<span><?php the_field('email', 43 ); ?></span></p>
                  </div>
                </div>
              </div>
            </div>
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab64f01b25fee124a5ce8786bac70762042c5e9f5a0afd2feafeac65ecbbcca3f&amp;width=100%&amp;height=490&amp;lang=ru_UA&amp;scroll=true"></script>
          </div>
        </div>
      </section>
    <?php endwhile;?>
  <?php endif; ?>
<?php get_footer(); ?>
