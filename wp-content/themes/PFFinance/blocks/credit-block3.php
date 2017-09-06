
<section class="credit-block3 cnt">
    <div class="cb3-content row">
        <div class="cb3-head">
            <h2>Узнайте сумму экономии при обращении в ПФ Финанс</h2>
        </div>
        <div class="calculator">
            <form class="left-form" method="post" action="mailer.php">
                <p>Введите свои данные:</p>
                <div class="input-block">
                    <label for="#i1">Укажите стоимость квартиры</label>
                    <input class="inp" id="i1" name="value">
                </div>
                <div class="input-block">
                    <label for="#i2">Укажите первоначальный взнос</label>
                    <input class="inp" id="i2" name="contribution">
                </div>
                <div class="input-block">
                    <label for="#i3">Укажите процентную ставку</label>
                    <input class="inp" id="i3" name="rate">
                </div>
                <div class="input-block">
                    <label for="#i4">Укажите срок кредита (лет)</label>
                    <input class="inp" id="i4" name="term">
                </div>
                <button id="calc_pereplat" class="result-active button-blue" type="button">Рассчитать</button>
                <div class="form-info">
                    <p>Узнайте сколько вы можете сэкономить</p>
                    <div class="form-Arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/next.png"></div>
                </div>
            </form>
            <div class="result-credit">
                <div class="table">
                    <div class="table-position">
                        <table>
                            <tr>
                                <th><img src="<?php echo get_template_directory_uri(); ?>/img/error-big.svg">
                                    <p>При самостоятельном обращении в банк</p>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <p>Ежемесячный платёж:</p><span id="plat_max"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Полные затраты с учётом %:</p><span id="sum_max"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Величина переплаты</p><span id="pereplat_max"></span>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <th><img src="<?php echo get_template_directory_uri(); ?>/img/ok-big.svg">
                                    <p>При обращении в ПФ Финанс</p>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <p>Ежемесячный платёж:</p><span id="plat_min"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Полные затраты с учётом %:</p><span id="sum_min"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Величина переплаты</p><span id="pereplat_min"></span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="cash">
                        <p>Ваша экономия составит:</p>
                        <p class="green-text" id="economy"></p>
                    </div>
                </div>
                <form method="post" action="mailer.php">
                    <div class="input-block">
                        <label for="#i4">Ваш контактный телефон</label>
                        <input class="inp" id="i4" name="phone">
                    </div>
                    <button class="button-blue" type="submit">Хочу выгодную ипотеку!*</button>
                </form>
            </div>
        </div>
    </div>
</section>
