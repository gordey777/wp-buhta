<?php /* Template Name: Contacts Page */ get_header(); ?>

      <div class="wrapper title-wrap-sinhts-inst">
        <h2 class="singht-int-h2 h2-contacts">Контакты</h2>
      </div>
    </div><!-- ./head-content-wrap -->
  </header>
  <!-- header and -->
  <section class="our-contacts">
    <div class="container-fluid contacts">
      <div class="row">
        <div class="col-xs-12">
          <div class="contacts-wrap">
            <div class="forms-wrap">
              <h4>Форма связи</h4>
              <div class="for-outline-forms">
                <form id="form">
                  <div class="form-group-name">
                    <input type="text" class="form-control" name="name" placeholder="Ваше имя" required>
                  </div>
                  <div class="form-group-mail">
                    <input type="mail" class="form-control" name="phone" placeholder="Ваш e-mail" required>
                  </div>
                  <div class="form-textarea">
                    <input type="textarea" class="form-control textarea" name="name" required placeholder="Введите сообщение">
                  </div>
                  <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary send-popup">Отправить</button>
                  </div>
                </form>
              </div>
              <div class="clear"></div>
            </div>
            <div class="addr-wrap">
              <p>Обращайтесь по вопросам рекламы и сотрудничества по форме указанной слева. Так же пишите, если у вас появились вопросы, либо претензии к работе наших сотрудников, либо сервису тур-базы, каждое предложение и замечание будет рассмотрено администраций.</p>
              <div class="requisites">
                <h5>Реквизиты ООО «Песчаная бухта»:</h5>
                <p class="code"><span>ИНН:</span> 7725306503, КПП: 772501001</p>
                <p class="code"><span>ОГРН:</span> 1167746153585</p>
                <p class="bank"><span>Банк-получатель:</span> Тинькофф Банк (АО)</p>
                <p class="bank"><span>Кор. счет</span> 30101810145250000974</p>
                <p class="bank"><span>БИК:</span> 044525974</p>
                <p class="bank"><span>Р/С (счет компании):</span>40702810710000003432</p>
              </div>
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
                <p>Наш номер телефона<span>+7(995) 646-83-56</span></p>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="datas data-addr">
                <p>Адрес нашего офиса<span>ул. Советская, дом 139а оф.26</span></p>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="datas data-mail">
                <p>Электронная почта<span>electro@gmail.com</span></p>
              </div>
            </div>
          </div>
        </div>
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab64f01b25fee124a5ce8786bac70762042c5e9f5a0afd2feafeac65ecbbcca3f&amp;width=100%&amp;height=490&amp;lang=ru_UA&amp;scroll=true"></script>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
