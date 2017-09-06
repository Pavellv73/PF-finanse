
<section class="refinans-block3 cnt" id="calculator">
    <div class="rb3-content row">
        <div class="rb3-head">
            <h2>Посмотрите сколько вы переплачиваете</h2>
        </div>
        <div class="calculator">
            <form class="left-form" method="post" action="mailer.php">
                <p>Введите свои данные и узнайте сколько вы переплачиваете:</p>
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
                <button id="calc_vygod" class="result-active button-blue" type="button">Рассчитать</button>
                <div class="form-info">
                    <p>Узнайте стоимость услуги рефинансирования для вас</p>
                    <div class="form-Arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/next.png"></div>
                </div>
            </form>
            <div class="result-refinanse">
                <p>С <span id="year_begin"></span> по <span id="year_end"></span> год вы можете сэкономить
                    <span id="sum_vygod"></span> и приобрести:</p>
                <div class="result-images">
                    <div class="result-img">
                        <div class="fg">
                            <p></p>
                        </div><img src="<?php echo get_template_directory_uri(); ?>/img/result-img1.png">
                    </div>
                    <div class="result-img">
                        <div class="fg">
                            <p></p>
                        </div><img src="<?php echo get_template_directory_uri(); ?>/img/result-img2.png">
                    </div>
                </div>
                <div class="result-cash">
                    <p>С нашей услугой рефинансирования ипотеки вы можете платить всего: <br><span id="new_plat"></span></p>
                </div>
                <div class="overpayments">
                    <p>Ежемесячно Вы переплачиваете: <span id="pereplat"></span></p>
                </div>
                <form method="post" action="mailer.php">
                    <div class="input-block">
                        <label for="#i4">Ваш контактный телефон</label>
                        <input class="inp" id="i4" name="phone">
                    </div>
                    <button class="button-blue" type="submit">Получить расчёт стоимости*</button>
                </form>
            </div>
        </div>
    </div>
</section>
