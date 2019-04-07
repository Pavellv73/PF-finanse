
<section class="credit-block3 cnt">
  <div class="cb3-content row">
    <div class="cb3-head">
      <h2>Посмотрите сколько вы переплачиваете</h2>
    </div>
    <div class="calculator">
      <form class="left-form" method="post" action="mailer.php">
        <p>Введите ваши данные и узнайте сколько вы переплачиваете:</p>
        <div class="input-block">
          <label for="#i1">Укажите стоимость квартиры</label>
          <input class="inp" id="i1" name="value"/>
        </div>
        <div class="input-block">
          <label for="#i2">Укажите первоначальный взнос</label>
          <input class="inp" id="i2" name="contribution"/>
        </div>
        <div class="input-block">
          <label for="#i3">Укажите процентную ставку</label>
          <input class="inp" id="i3" name="rate"/>
        </div>
        <div class="input-block">
          <label for="#i4">Укажите срок кредита</label>
          <input class="inp" id="i4" name="term"/>
        </div>
        <button class="result-active button-blue" type="button">Рассчитать</button>
        <div class="form-info">
          <p>Узнайте стоимость услуги рефинансирования для вас</p>
          <div class="form-Arrow"><img src="img/next.png"/></div>
        </div>
      </form>
      <div class="result-credit">
        <div class="table">
          <div class="table-position">
            <table>
              <tr>
                <th><img src="img/error-big.svg"/>
                  <p>При самостоятельном обращении в банк</p>
                </th>
              </tr>
              <tr>
                <td>
                  <p>Ежемесячный платёж:</p><span>54 332 руб.</span>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Полные затраты с учётом %:</p><span>14 039 680 руб.</span>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Величина переплаты</p><span>8 539 680 руб.</span>
                </td>
              </tr>
            </table>
            <table>
              <tr>
                <th><img src="img/ok-big.svg"/>
                  <p>При обращении в ПФ Финанс</p>
                </th>
              </tr>
              <tr>
                <td>
                  <p>Ежемесячный платёж:</p><span>51 126 руб.</span>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Полные затраты с учётом %:</p><span>13 270 240 руб.</span>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Величина переплаты</p><span>7 770 240 руб.</span>
                </td>
              </tr>
            </table>
          </div>
          <div class="cash">
            <p>Ваша экономия составит:</p>
            <p class="green-text">769 440 руб.</p>
          </div>
        </div>
        <form method="post" action="mailer.php">
          <div class="input-block">
            <label for="#i4">Ваш контактный телефон</label>
            <input class="inp" id="i4" name="phone"/>
          </div>
          <button class="button-blue" type="submit">Хочу выгодную ипотеку!</button>
        </form>
      </div>
    </div>
  </div>
</section>