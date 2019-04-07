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
    <header class="header cnt">
      <div class="header-content row">
        <div class="logo"><a href="index.php"><img class="min-logo" src="img/logo.svg" alt=""><img class="big-logo" src="img/big-logo.svg"></a></div>
        <div class="menu-container">
          <div>
            <ul>
              <li class="menu-item"><a href="company-page.php">О компании</a></li>
              <li class="menu-item"><a href="services-page.php">Услуги</a></li>
              <li class="menu-item"><a href="result_client-page.php">Отзывы клиентов</a></li>
              <li class="menu-item"><a href="news-page.php">Новости</a></li>
              <li class="menu-item"><a href="contacts.php">Контакты</a></li>
            </ul>
          </div>
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
    <section class="company cnt" id="company">
      <div class="company-content row">
        <div class="company-head">
          <h2>О компании</h2>
        </div>
        <div class="company-img"><img src="img/company.jpg"></div>
        <div class="company-text">
          <p>40 тысяч человек в год уже получают кредиты через клиентов ООО «ПФ Финанс» в более чем 200 торговых точках в 84 городах России.</p>
          <p>Нас выбрали крупнейшие владельцы косметологических центров и оздоровительных салонов, такие как Виннер Даниэль, Семён Дойбан, Игорь Несимбоим, Вячеслав Шаулов, Эдуард Клипер. Среднегодовой оборот привлеченных кредитных средств наших клиентов составляет 10 млрд рублей, а средний процент одобрения заявок на выдачу кредитов 75%, и мы продолжаем его увеличивать.</p>
          <p>ООО «ПФ Финанс» работает с 2013 года в режиме 7 дней в неделю, чтобы обеспечить обучение персонала точек продаж, и бесперебойную техническую и организационную поддержку всех наших клиентов. Быстрый доступ к кредитованию через банки-партнеры может быть обеспечен уже в течение 2х недель для новых клиентов – юридических лиц, и в течение всего 2х дней – для физических лиц.</p>
        </div>
      </div>
    </section>
    <section class="partners cnt">
      <div class="partners-content">
        <div class="partners-head">
          <h2>Наши партнёры</h2>
        </div>
        <div class="logo-content">
          <div class="logo-position row"><img src="img/sberbank-logo.png"><img src="img/vtb-logo.png"><img src="img/vtb24-logo.png"><img src="img/gazprombank-logo.png"><img src="img/vozrozhdenie-logo.png"><img src="img/absolut-logo.png"><img src="img/aizhk-logo.png"><img src="img/deltacredit-logo.png"><img src="img/unicredit-logo.png"><img src="img/uralsib-logo.png"><img src="img/itkryrie-logo.png"><img src="img/raiffeisen-logo.png"><img src="img/vsk-logo.png"><img src="img/pari-logo.png"><img src="img/alpha-logo.png"><img src="img/neocentr-logo.png"><img src="img/srg-logo.png"><img src="img/aphill-logo.png"></div>
        </div>
      </div>
    </section>
    <section class="question cnt">
      <div class="q-bg"></div>
      <div class="question-content row">
        <div class="question-head">
          <h2>У вас есть финансовые вопросы?</h2>
          <p>Просто оставьте свои контактные данные и получите бесплатную консультацию по вашему вопросу.</p>
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