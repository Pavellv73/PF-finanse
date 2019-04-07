<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ПФ ФИНАНС</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="js/jquery.fancybox.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="js/slick.css">
    <link rel="stylesheet" type="text/css" href="js/slick-theme.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/jquery.form.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
    <header class="header-blue cnt">
      <div class="headerblue-content row">
        <div class="logo"><a href="index.php"><img class="min-logo" src="img/min-logowhite.svg" alt=""><img class="big-logo" src="img/logo-white.svg"></a></div>
        <div class="menu-container">
          <ul>
            <li class="menu-item"><a href="company-page.php">О компании</a></li>
            <li class="menu-item"><a href="services-page.php">Услуги</a></li>
            <li class="menu-item"><a href="result_client-page.php">Отзывы клиентов</a></li>
            <li class="menu-item"><a href="news-page.php">Новости</a></li>
            <li class="menu-item"><a href="contacts.php">Контакты</a></li>
          </ul>
        </div>
        <div class="contact-hab">
          <div class="contacts"><a class="num" href="tel:+74953171239">+7(495)317-12-39</a></div>
          <div class="burger">
            <div class="block1"></div>
            <div class="block2"></div>
            <div class="block3"></div>
          </div>
          <div class="habmenu">
            <ul>
              <li class="menu-item"><a href="company-page.php">О компании</a></li>
              <li class="menu-item"><a href="services-page.php">Услуги</a></li>
              <li class="menu-item"><a href="result_client-page.php">Отзывы клиентов</a></li>
              <li class="menu-item"><a href="news-page.php">Новости</a></li>
              <li class="menu-item"><a href="contacts.php">Контакты</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <section class="refinans-block1 cnt">
      <div class="rb1-content row">
        <div class="rd-bg"></div>
        <div class="video-block">
          <video class="bgvideo" autoplay muted>
            <source src="img/videos/anim-01.mov">
          </video>
        </div>
        <div class="headrd1-text">
          <h2>Снизим вашу ипотеку до 8,5%</h2>
          <p>Мы поможем вам снизить процент, уменьшить платежи, изменить валюту платежа и срок ипотеки на законных основаниях.</p>
        </div>
        <div class="form" id="form1">
          <form class="form-right" method="post" action="mailer.php">
            <p>Получите бесплатную консультацию сейчас</p>
            <input class="inp" placeholder="Ваш контактный телефон" name="phone">
            <button class="button-blue" type="submit">Хочу снизить ипотеку!</button>
          </form>
        </div>
      </div>
    </section>
    <section class="refinans-block2 cnt">
      <div class="fb2-content row">
        <div class="info-block"><img src="img/ipoteka-icon.svg">
          <p>Снизим ипотеку <br> до 8,5%</p>
        </div>
        <div class="info-block"><img src="img/minpay-icon.svg">
          <p>Уменьшим <br> платежи в 1,5-2 раза</p>
        </div>
        <div class="info-block"><img src="img/currency-icon.svg">
          <p>Изменим валюту <br> платежа на рубли</p>
        </div>
        <div class="info-block"><img src="img/calendar-icon.svg">
          <p>Продлим <br> срок ипотеки</p>
        </div>
      </div>
    </section>
    <section class="refinans-block3 cnt">
      <div class="rb3-content row">
        <div class="rb3-head">
          <h2>Посмотрите сколько вы переплачиваете</h2>
        </div>
        <div class="calculator">
          <form class="left-form" method="post" action="mailer.php">
            <p>Введите ваши данные и узнайте сколько вы переплачиваете:</p>
            <div class="input-block">
              <label for="#i1">Укажите ваш ежемесячный платёж</label>
              <input class="inp" id="i1" name="pay">
            </div>
            <div class="input-block">
              <label for="#i2">В каком году заканчивается ипотека</label>
              <input class="inp" id="i2" name="year">
            </div>
            <div class="input-block">
              <label for="#i3">Текущий остаток основного долга</label>
              <input class="inp" id="i3" name="remainder">
            </div>
            <button class="result-active button-blue" type="button">Рассчитать</button>
            <div class="form-info">
              <p>Узнайте стоимость услуги рефинансирования для вас</p>
              <div class="form-Arrow"><img src="img/next.png"></div>
            </div>
          </form>
          <div class="result-refinanse">
            <p>За 12 лет с 2017 по 2029 год вы можете сэкономить<span> 589 587 рублей</span> и приобрести:</p>
            <div class="result-images">
              <div class="result-img">
                <div class="fg">
                  <p>Загородный домик</p>
                </div><img src="img/result-img1.png">
              </div>
              <div class="result-img">
                <div class="fg">
                  <p>Роскошный отдых</p>
                </div><img src="img/result-img2.png">
              </div>
            </div>
            <div class="result-cash">
              <p>С нашей услугой рефинансирования ипотеки вы можете платить всего: <br><span> 11 587 руб./мес</span></p>
            </div>
            <div class="overpayments">
              <p>Вы переплачиваете:<span> 347 руб./мес</span></p>
            </div>
            <form method="post" action="mailer.php">
              <div class="input-block">
                <label for="#i4">Ваш контактный телефон</label>
                <input class="inp" id="i4" name="phone">
              </div>
              <button class="button-blue" type="submit">Получить расчёт стоимости</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="refinans-block4 cnt">
      <div class="rb4-content row">
        <div class="rb4-head">
          <h2>Оценитие преимущества работы с нами</h2>
        </div>
        <div class="advantages-blocks">
          <div class="advantages-block"><img src="img/2-01.svg">
            <p>Низкие процентные ставки — от 8,5%</p>
          </div>
          <div class="advantages-block"><img src="img/2-02.svg">
            <p>Рассмотение заявки банками 2-3 дня и такой же быстрый выход на сделку</p>
          </div>
          <div class="advantages-block"><img src="img/2-03.svg">
            <p>Рефинансируем как рублевую, так и валютную ипотеку</p>
          </div>
          <div class="advantages-block"><img src="img/2-04.svg">
            <p>Урегулирование фактов допущения просроченной задолженности</p>
          </div>
          <div class="advantages-block"><img src="img/2-05.svg">
            <p>Регистрация документов в Росреестре</p>
          </div>
          <div class="advantages-block"><img src="img/2-06.svg">
            <p>Оплата наших услуг по факту выполненных работ</p>
          </div>
        </div>
      </div>
    </section>
    <section class="refinans-block5 cnt">
      <div class="rb5-content row">
        <div class="rb5-head">
          <h2>Простая схема работы в 4 шага</h2>
        </div>
        <div class="diagram-position">
          <div class="nombers">
            <div class="nomber">
              <p>1</p>
            </div>
            <div class="line"></div>
            <div class="nomber">
              <p>2</p>
            </div>
            <div class="line"></div>
            <div class="nomber">
              <p>3</p>
            </div>
            <div class="line"></div>
            <div class="nomber">
              <p>4</p>
            </div>
          </div>
          <div class="diagram">
            <div class="diagram-blocks">
              <div class="diagram-img"><img src="img/buttom-img.jpg"></div>
              <div class="diagram-text">
                <h3>Оформление заявки</h3>
                <p>Вы заключаете с нами договор и предоставляете пакет документов по действующему кредиту.<a class="fancybox" href="#thnx">Подробнее</a></p>
              </div>
            </div>
            <div class="diagram-blocks">
              <div class="diagram-img"><img src="img/gifts-img.jpg"></div>
              <div class="diagram-text">
                <h3>Получение предложений</h3>
                <p>Вы получите решение одновременно от нескольких банков и сможете выбрать наиболее выгодные для Вас условия.</p>
              </div>
            </div>
            <div class="diagram-blocks">
              <div class="diagram-img"><img src="img/case-img.jpg"></div>
              <div class="diagram-text">
                <h3>Совершение сделки</h3>
                <p>Для выхода на сделку мы собственными силами урегулируем все вопросы с оценочными и страховыми компаниями всего за 3 дня.</p>
              </div>
            </div>
            <div class="diagram-blocks">
              <div class="diagram-img"><img src="img/planset-img.jpg"></div>
              <div class="diagram-text">
                <h3>Регистрация документов</h3>
                <p>Наши регистраторы избавят вас от необходимости многократно посещать Росреестр. Ваши проценты по ипотеке снижены!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="hiddensection">
      <div class="thnx" id="thnx">
        <p>1. Заявление-анкета, копия паспорта, трудовой книжки заявителя, созаемщика и поручителя</p>
        <p>2. Справка о доходах</p>
        <p>3. Копия действующего кредитного договора со всеми дополнениями</p>
        <p>4. Выписка по текущему счету за последний год</p>
        <p>5. Справка о задолженности, реквизиты счета и т.д</p>
        <p>Банк в праве запросить дополнительные документы, которые могут быть не указаны в данном списке.</p>
      </div>
    </div>
    <section class="refinans-block6 cnt">
      <div class="rb6-bg"></div>
      <div class="rb6-content">
        <div class="rb6-head">
          <h2>Оставьте заявку на рефинансирование вашей ипотеки</h2>
          <p>Уже через 14 дней после обращения у вас будет всего от 8,5% по ипотеке</p>
        </div>
        <form action="mailer.php" method="post">
          <input class="inp" placeholder="Ваш контактный телефон" name="phone" required>
          <button class="button-blue" type="submit">Получить консультацию</button>
        </form>
      </div>
    </section>
    <section class="refinans-block7 cnt">
      <div class="rb7-content row">
        <div class="rb7-head">
          <h2>Что мы можем сделать для вас</h2>
        </div>
        <div class="rb7-infobloks">
          <div class="rb7-infoblok">
            <div class="inf-img"><img src="img/good-icon.svg"></div>
            <div class="inf-text">
              <p><span>Подберём несколько оптимальных программ рефинансирования,</span>что принесет вам максимальную финансовую выгоду.</p>
            </div>
          </div>
          <div class="rb7-infoblok">
            <div class="inf-img"><img src="img/good-icon.svg"></div>
            <div class="inf-text">
              <p><span>Подадим заявки в несколько банков одновременно,</span>что сэкономит вам массу времени.</p>
            </div>
          </div>
          <div class="rb7-infoblok">
            <div class="inf-img"><img src="img/good-icon.svg"></div>
            <div class="inf-text">
              <p><span>Возьмём на себя взаимодействие с оценочными и страховыми компаниями,</span>предложив оптимальные тарифы, что сэкономит вам время и деньги.</p>
            </div>
          </div>
          <div class="rb7-infoblok">
            <div class="inf-img"><img src="img/good-icon.svg"></div>
            <div class="inf-text">
              <p>Предоставим такие уникальные финансовые инструменты, как дифференцированный платеж или списание основного долга 1 раз в 2 недели.</p>
            </div>
          </div>
          <div class="rb7-infoblok">
            <div class="inf-img"><img src="img/good-icon.svg"></div>
            <div class="inf-text">
              <p><span>Снизим ежемесячный платеж</span>по кредиту, облегчив вашу финансовую нагрузку, а также сократим срок кредитования,<span>уменьшив общую переплату по кредиту.</span></p>
            </div>
          </div>
          <div class="rb7-infoblok">
            <div class="inf-img"><img src="img/good-icon.svg"></div>
            <div class="inf-text">
              <p>Переведём валютную ипотеку в рублёвую, что принесёт финансовую стабильность.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="refinans-block8 cnt">
      <div class="rb8-bg"></div>
      <div class="rb8-content">
        <div class="rb8-head">
          <h2>Вы можете продолжать платить больше по ипотеке</h2>
          <p>Или узнать как уже через 14 дней начать погашать кредит на самых выгодных условиях.</p>
        </div>
        <form action="mailer.php" method="post">
          <input class="inp" placeholder="Ваш контактный телефон" name="phone" required>
          <button class="button-blue" type="submit">Хочу узнать подробнее</button>
        </form>
      </div>
    </section>
    <section class="refinans-block9 cnt">
      <div class="rb9-content row">
        <div class="rb9-head">
          <h2>О рефинансировании</h2>
        </div>
        <div class="refinans-text">
          <p>Рефинансировать ипотеку в классическом понимании — значит сменить организацию-кредитора с целью изменения параметров займа.</p>
          <p>
            Необходимость рефинансирования ипотечного кредита может быть обусловлена разными факторами – например, изменением зарплатных условий клиента или желанием снизить размер ежемесячных выплат по другим причинам.Рефинансирование ипотеки предусматривает досрочное погашение имеющегося долга средствами, полученными по новому договору на более мягких условиях.</p>
          <p>Перекредитоваться можно в банке, с которым уже заключен ипотечный договор, либо в любом другом банке, который готов предоставить более выгодные условия.</p>
          <p>В рамках рефинансирования ипотеки вы с помощью заемных средств погашаете прежний кредит, а затем — в рамках нового, более выгодного договора — постепенно выплачиваете займ.</p>
          <p class="black-text"><span>Результат</span>— уменьшение ежемесячного платежа за счет продления срока выплат или сниженной ставки рефинансирования ипотечных кредитов.</p>
          <p>Программы рефинансирования ипотеки специально разработаны для потребителей, которые имеют положительную кредитную историю.</p>
          <p>Важно понимать, что под программу не будут подпадать ранее реструктуризированные ссуды. Положительным образом может повлиять на принятие окончательного решения банком о рефинансировании наличие дополнительного обеспечения займа (привлечение заемщиков).</p>
          <p>В процессе рассмотрения предоставленной заявки на рефинансирование ипотечного займа банк индивидуально подходит к каждому случаю.</p>
        </div>
      </div>
    </section>
    <section class="home-page2 cnt" id="services">
      <div class="page2-content row">
        <div class="page2-head">
          <h2>Другие услуги «ПФ Финанс»</h2>
        </div>
        <div class="services-blocks">
          <div class="credit services-min">
            <div class="s-bg"></div>
            <p>Ипотечное кредитование</p>
            <button class="button-white">Подробнее</button>
          </div>
          <div class="fed-network services-min">
            <div class="s-bg"></div>
            <p>Потребительское кредитование в федеральных сетях</p>
            <button class="button-white">Подробнее</button>
          </div>
          <div class="reg-network services-min">
            <div class="s-bg"></div>
            <p>Потребительское кредитование в региональных сетях</p>
            <button class="button-white">Подробнее</button>
          </div>
          <div class="no-point services-min">
            <div class="s-bg"></div>
            <p>Потребительское кредитование в не сетевых точках продаж</p>
            <button class="button-white">Подробнее</button>
          </div>
        </div>
      </div>
    </section>
    <section class="refinans-block11 cnt">
      <div class="rb11-bg"></div>
      <div class="rb11-content row">
        <div class="rb11-head">
          <h2 class="red-text">Теперь вы можете закрыть сайт</h2>
          <p>1. Если Вас не волнует переплата по ипотеке!</p>
          <p>2. Вам некуда вкладывать сэкономленные деньги!</p>
          <h2 class="green-text">Или сделать правильный выбор</h2>
          <p>Получите консультацию специалистов «ПФ Финанс»</p>
        </div>
        <form action="mailer.php" method="post">
          <input class="inp" placeholder="Ваш контактный телефон" name="phone" required>
          <button class="button-blue" type="submit">Получить консультацию</button>
        </form>
      </div>
    </section>
    <footer class="footer cnt">
      <div class="footer-content row">
        <div class="comp-menu">
          <p>Компания</p>
          <ul>
            <li><a href="#">О компании</a></li>
            <li><a href="#">Новости</a></li>
            <li><a href="#">Отзывы</a></li>
            <li><a href="#">Контакты</a></li>
            <p class="ogrn">ОГРН 1137746773691</p>
            <p class="inn">ИНН 7734707068</p>
          </ul>
        </div>
        <div class="serv-menu">
          <p>Услуги</p>
          <ul>
            <li><a href="#">Ипотечное кредитование</a></li>
            <li><a href="#">Рефинансирование ипотеки</a></li>
            <li><a href="#">Потребительское кредитование для федеральных сетей</a></li>
            <li><a href="#">Потребительское кредитование для региональных сетей</a></li>
            <li><a href="#">Потребительское кредитование для не сетевых точек продаж</a></li>
          </ul>
        </div>
        <div class="pay">
          <div class="pay-content">
            <h3>Мы принимаем к оплате</h3>
            <div class="card-icon"><img src="img/visa-icon.png"><img src="img/mastercard-icon.png"></div>
            <input placeholder="Поиск по сайту">
            <div class="nt-logo"><a href="http://next-team.ru/"><img src="img/nextteam-logo.png"></a></div>
          </div>
        </div>
        <div class="nav">
          <ul>
            <li><a href="#">Компания</a></li>
            <li><a href="#">Услуги</a></li>
            <li><a href="http://next-team.ru/"><img src="img/nextteam-logo.png"></a></li>
          </ul>
        </div>
      </div>
    </footer>
    <div class="footer-end cnt">
      <div class="fe-content">
        <p>2017 «ПФ Финанс». Все права защищены.</p><a class="fancybox" href="#politic">Политика конфиденциальности</a>
      </div>
    </div>
    <div class="hiddensection">
      <div class="politic" id="politic">
        <p>Политика конфиденциальности</p>
        <p>Данное соглашение об обработке персональных данных разработано в соответствии с законодательством Российской Федерации.</p>
        <p>Все лица, заполнившие сведения, составляющие персональные данные на данном сайте, а также разместившие иную информацию обозначенными действиями подтверждают свое согласие на обработку персональных данных и их передачу оператору обработки персональных данных.</p>
        <p>Под персональными данными Гражданина понимается нижеуказанная информация: общая информация (имя и адрес электронной почты, телефон).</p>
        <p>Гражданин, принимая настоящее Соглашение, выражают свою заинтересованность и полное согласие, что обработка их персональных данных может включать в себя следующие действия: сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, уничтожение.</p>
        <p>Гражданин гарантирует: информация, им предоставленная, является полной, точной и достоверной; при предоставлении информации не нарушается действующее законодательство Российской Федерации, законные права и интересы третьих лиц; вся предоставленная информация заполнена Гражданина в отношении себя лично.</p>
      </div>
    </div>
  </body>
</html>