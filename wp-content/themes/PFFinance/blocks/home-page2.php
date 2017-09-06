
<section class="home-page2 cnt" id="services">
  <div class="page2-content row">
    <div class="page2-head">
      <h2>Все услуги «ПФ Финанс»</h2>
    </div>
    <div class="services-blocks">
      <div class="mortgage services-min <?php if(isset($refinans)) echo 'services-minna'?>">
        <div class="s-bg <?php if(isset($refinans)) echo 's-bgna'?>"></div>
        <p>Рефинансирование ипотеки</p>
        <?php if(!isset($refinans)) { ?>
          <a href="/рефинансирование/">
            <button class="button-white">Подробнее</button>
          </a>
        <?php } ?>
      </div>
      <div class="credit services-min <?php if(isset($credit)) echo 'services-minna'?>">
        <div class="s-bg <?php if(isset($credit)) echo 's-bgna'?>"></div>
        <p>Ипотечное кредитование</p>
        <?php if(!isset($credit)) { ?>
          <a href="/ипотечное-кредитование/">
            <button class="button-white">Подробнее</button>
          </a>
        <?php } ?>
      </div>
      <div class="fed-network services-big <?php if(isset($federal)) echo 'services-bigna'?>">
        <div class="s-bg <?php if(isset($federal)) echo 's-bgna'?>"></div>
        <p>Потребительское кредитование в федеральных сетях</p>
        <?php if(!isset($federal)) { ?>
          <a href="/потребительское-кредитование-для-фе/">
            <button class="button-white">Подробнее</button>
          </a>
        <?php } ?>
      </div>
      <div class="reg-network services-min <?php if(isset($region)) echo 'services-minna'?>">
        <div class="s-bg <?php if(isset($region)) echo 's-bgna'?>"></div>
        <p>Потребительское кредитование в региональных сетях</p>
        <?php if(!isset($region)) { ?>
          <a href="/потребительское-кредитование-для-ре/">
            <button class="button-white">Подробнее</button>
          </a>
        <?php } ?>
      </div>
      <div class="no-point services-min <?php if(isset($network)) echo 'services-minna'?>">
        <div class="s-bg <?php if(isset($network)) echo 's-bgna'?>"></div>
        <p>Потребительское кредитование в не сетевых точках продаж</p>
        <?php if(!isset($network)) { ?>
          <a href="/потребительское-кредитование-для-не/">
            <button class="button-white">Подробнее</button>
          </a>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
