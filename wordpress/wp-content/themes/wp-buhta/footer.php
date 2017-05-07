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
						<div class="video-body">
							<form action="http://visairkutsk.ru/robo/demo1.php" method="POST">
								<div class="form-start clearfix">
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="form-group">
											<input type="text" class="form-control" name="name" required placeholder="Ваше имя">
										</div>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="form-group">
											<input type="text" class="form-control" name="surname" required placeholder="Фамилия">
										</div>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="form-group">
											<input type="tel" class="form-control" name="tel" required placeholder="Ваш телефон">
										</div>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="form-group">
											<input type="text" class="form-control" name="mail" required placeholder="Ваш e-mail">
										</div>
									</div>
								</div>
								<div class="form-date-wrap clearfix">
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="form-group">
											<input type="date" class="form-control" id="start" onchange="getEventTime()" min="2017-07-01" max="2017-08-27">
										</div>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="form-group">
											<input type="date" class="form-control" id="end" onchange="getEventTime()" min="2017-07-01" max="2017-08-27">
										</div>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="form-group">
											<input type="tel" class="form-control" id="kol_vz" onchange="getEventTime()" name="tel" value="0" required placeholder="Количество взрослых">
										</div>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="form-group">
											<input type="text" class="form-control" id="kol_dt" onchange="getEventTime()" name="mail" value="0" required placeholder="Количество детей">
										</div>
									</div>
								</div>
								<h4 class="delivery">Способ доставки до песчанной бухты</h4>
								<div class="check-row clearfix">
									<div class="col-md-6 col-xs-12">
										<div class="check-wrap">
											<input class="go-check" type="checkbox">
											<label class="go-to" for="">Проезд на рейсовом судне "Баргузин" с пристани"Ракета", по адресу: г. Иркутск, проспект Маршала Жукова, 98б <span>(Оплата производится на пристани)</span></label>
										</div>
									</div>
									<div class="col-md-6 col-xs-12">
										<div class="check-wrap">
											<input class="go-check" id="tbnum" onchange="getEventTime()"  type="checkbox">
											<label class="go-to" for="">Трансфер до пос. Большое Галаустрое, после произодится доставка до Бухты Песчаной нанашем пассажирском корабле. <span>(Услуга доступна для групп свыше 10 человек)</span></label>
										</div>
									</div>
								</div>
								<h4 class="services">Дополнительные услуги</h4>
								<div class="check-row clearfix">
									<div class="col-sm-4 col-xs-12">
										<div class="check-wrap">
											<input id="check-1" value="1000" name="buy_tiket" onchange="getEventTime()" class="go-check check-1" type="checkbox">
											<label class="go go-1" for="check-1">Помощ в покупке билетов на судно</label>
										</div>
									</div>
									<div class="col-sm-4 col-xs-12">
										<div class="check-wrap">
											<input id="check-2" value="1000" name="buy_tiket" onchange="getEventTime()" class="go-check check-2" type="checkbox">
											<label class="go go-2" for="check-2">Встреча в аэропорту</label>
										</div>
									</div>
									<div class="col-sm-4 col-xs-12">
										<div class="check-wrap">
											<input id="check-3" value="1000" name="buy_tiket" onchange="getEventTime()" class="go-check check-3" type="checkbox">
											<label class="go go-3" for="check-3">Трансфер до пос.</label>
										</div>
									</div>
								</div>
							</div>

						<div class="calc-row">
							<div class="left-side clearfix">
								<h5>Заказать путевку просто!</h5>
								<ol>
									<li>Введите свое имя, фамилию, номер телефона и выберите удобные вам датыприезда и отъезда, после чего ведите количество взрослых и детей.</li>
									<li>Выберите удобный вам способ приезда на базу.</li>
									<li>Отметьте интересующие вас дополнительные услуги.</li>
									<li>После окончательного расчета стоимости, нажмите на кнопку "купить путевку"и завершите оплату тура, после чего с вами свяжется наш оператор, подтвердит оплату и ответит на все интересующие вас вопросы.</li>
								</ol>
								<div class="clear"></div>
							</div>
							<div class="right-side">
								<div class="side-row clearfix">
									<div class="side-row-left"><p class="diskount">Общая стоимость:</p></div>
									<div class="side-row-right"><p id="sum" class="diskount"></p></div>
								</div>
								<div class="side-row clearfix">
									<div class="side-row-left"><p class="diskount">Скидка:</p></div>
									<div class="side-row-right"><p id="skidka" class="diskount"></p></div>
								</div>
								<div class="side-row clearfix">
									<div class="side-row-left"><p class="amount">Итоговая стоимость:</p></div>
									<div class="side-row-right"><p id="itog" name="itog" class="amount"></p></div>
									<input type="hidden" id="itog_h" name="itog_h">
								</div>
								<input id="modal_order_submit" name="send" type="submit" value="Оплатить путевку">
							</div>
						</div>
						</form>



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

  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

  <script src="http://momentjs.com/downloads/moment.min.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/calc.js"></script>


</body>
</html>
