
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
          <input class="inp" id="i1" name="pay"/>
        </div>
        <div class="input-block">
          <label for="#i2">В каком году заканчивается ипотека</label>
          <input class="inp" id="i2" name="year"/>
        </div>
        <div class="input-block">
          <label for="#i3">Текущий остаток основного долга</label>
          <input class="inp" id="i3" name="remainder"/>
        </div>
        <button class="result-active button-blue" type="button">Рассчитать</button>
        <div class="form-info">
          <p>Узнайте стоимость услуги рефинансирования для вас</p>
          <div class="form-Arrow"><img src="img/next.png"/></div>
        </div>
      </form>
      <div class="result-refinanse">
        <p>За 12 лет с 2017 по 2029 год вы можете сэкономить<span> 589 587 рублей</span> и приобрести:</p>
        <div class="result-images">
          <div class="result-img">
            <div class="fg">
              <p>Загородный домик</p>
            </div><img src="img/result-img1.png"/>
          </div>
          <div class="result-img">
            <div class="fg">
              <p>Роскошный отдых</p>
            </div><img src="img/result-img2.png"/>
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
            <input class="inp" id="i4" name="phone"/>
          </div>
          <button class="button-blue" type="submit">Получить расчёт стоимости</button>
        </form>
      </div>
    </div>
  </div>
</section>