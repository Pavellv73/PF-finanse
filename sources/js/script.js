$(function () {
    function t(t) {
        console.log(t)
    }

//маски,обработка fancybox


    var e, i, a = /((8|\+7)-?)?\(?\d{3}\)?-?\d{1}-?\d{1}-?\d{1}-?\d{1}-?\d{1}-?\d{1}-?\d{1}/, n = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    var r = "", o = [], l = !1, d = !1;
    $("form").ajaxForm({
        clearForm: !1, resetForm: !1, beforeSubmit: function (e, i) {
            $("input").removeClass("err-form"), l = !1, o[0] = i.find(".submit"), o[1] = i.find(".submit").text(), i.addClass("dis");
            var s = new RegExp("^[-0-9a-z._]+@[-0-9a-z.]+.[a-z]{2,4}$", "i"), c = "";
            for (var m in e) {
                if ("phone" == e[m].name && !a.test(e[m].value))return i.removeClass("dis").find('input[name="phone"]').addClass("err-form invalid"), !1;
                if ("phone" == e[m].name && "" == e[m].value)return i.removeClass("dis").find('input[name="phone"]').addClass("err-form"), !1;
                if ("city" == e[m].name && "" == e[m].value)return i.removeClass("dis").find('input[name="city"]').addClass("err-form"), !1;
                if ("phone" == e[m].name && "" != e[m].value)for (var u = 0; u <= 9; u++)if (c = new RegExp(u.toString() + u.toString() + u.toString() + u.toString() + u.toString() + u.toString() + u.toString()), c.test(e[m].value))return i.removeClass("dis").find('input[name="phone"]').addClass("err-form"), !1;
                if ("name" == e[m].name && "" == e[m].value)return i.removeClass("dis").find('input[name="name"]').addClass("err-form"), !1;
                if ("email" == e[m].name && "" != e[m].value && !s.test(e[m].value))return i.removeClass("dis").find('input[name="email"]').addClass("err-form"), !1;
                if ("email" == e[m].name && !n.test(e[m].value))return i.removeClass("dis").find('input[name="phone"]').addClass("err-form invalid"), !1;
                "target" == e[m].name && (r = e[m].value), "dwnld" == e[m].name && (l = !0, t(l)), "sendmail" == e[m].name && (d = !0, mailInput = $(i).find("[name='email']"), t(mailInput), n.test(mailInput.val()) ? $("#thnx2-a").click() : mailInput.addClass("err-form"))
            }
            return !0
        }, success: function () {
            if (l) {
                var t = document.getElementById("dwnld");
                onload = t.click(), l = !1
            }
            console.log("THENKU"), d ? d = !1 : $("#thnx").click()
        }
    });

    $(document).scroll(function() {
        if ($(this).scrollTop() > 20){
            $("header").addClass("header-blue2");
            $("header-content").addClass("headerblue-content");
            $(".menu-container .menu-item a").addClass("link-white");
            $(".contacts .num").addClass("num-white");
            $(".logo").addClass("white-logo");
        }
        else{
            $("header").removeClass("header-blue2");
            $("header-content").removeClass("headerblue-content");
            $(".menu-container .menu-item a").removeClass("link-white");
            $(".contacts .num").removeClass("num-white");
            $(".logo").removeClass("white-logo");

        }
    });

    //Меню-гамбургер
    $('.burger').click(function () {

       openHabmenu();

        return false

    });

    //анимация иконки бургера
    function openHabmenu() {
        $('.habmenu').fadeToggle();
        $('.block1').toggleClass("block1-click");
        $('.block2').toggleClass("block2-click");
        $('.block3').toggleClass("block3-click");
        $('body').toggleClass('no-scroll');
        $("section, footer").toggleClass('blur');
    }

    //Меню-гамбургер

    $(".habmenu a").click(function () {
        openHabmenu();
        return true
    });

    //плавный скроллинг к нужному блока страницы
    $('.habmenu a, .menu-container a').click( function(){
        var scroll_el = $(this).attr('href');
        if ($(scroll_el).length != 0) {
            $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500);
        }
        return false;
    });

    //Слайдер главной страницы

    $('.slider-page1').slick({
        dots: true,
        appendDots:'.control-position > .dots',
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow:'.prewArrow1',
        nextArrow:'.nextArrow1',
        dotsClass:'markers'
    });


    //Анимация блока switch
    $(".switch").click(function () {
        $(".switch-tap").toggleClass("switch-click");
        $(".text-left p").toggleClass("text-noactive");
        $(".text-right p").toggleClass("text-active");

        $(".table1").toggleClass("table-novisible");
        $(".table2").toggleClass("table-novisible");

        return false;
    });

    //анимация label в фокусе
    $(".input-block").click(function () {
        $(this).find("input").addClass("input-active").focus();
        $(this).find("label").animate({
            top: "-4px"
        }, 200);
    });

    //анимация label вне фокуса
    $(".input-block input").focusout(function() {
        if ($(this).val()==""){
            $(this).removeClass("input-active");
            $(this).parent().find("label").animate({
                top: "15px"
            }, 200);
        }
    });

    //анимация движения формы на услугах
    $(".result-active").click(function () {
        $(".left-form").animate({
            left:"0"
        });
        setTimeout(function () {
            $(".result-refinanse, .result-credit").fadeIn();
        },300);

    });

    //задержка появления расчета
    setTimeout(function () {
        var widthViewPort = document.documentElement.clientWidth;
        var formOffset = 0;
        if(widthViewPort >= 768) {
            formOffset = 0;
        } else if(widthViewPort >= 1280) {
            formOffset = 0;
        }
        $("#form1 form").animate({
            right: formOffset
        },800);

    },500);

    //Яндекс карта

    ymaps.ready(function () {
        var markeroffSet = [55.810302, 37.450759];
        if ($(window).width() >= 768){
            markeroffSet = [55.807810, 37.448313];
        }
        var myMap = new ymaps.Map('map', {
                center: markeroffSet,
                zoom: 16,
                controls: []
            }, {
                searchControlProvider: 'yandex#search'
            }),
            myPlacemark = new ymaps.Placemark([55.807982, 37.450845], {
                hintContent: 'Авиационная улица, 77',
                balloonContent: 'Авиационная улица, 77'
            }, {
                preset: 'islands#circleIcon',
                iconColor: '#f75c52'

            });
        myMap.geoObjects.add(myPlacemark);
        myMap.behaviors.disable('scrollZoom');
        myMap.behaviors.disable('multiTouch');
        myMap.behaviors.disable('drag');
    });



    //попап
    $('.fancybox').fancybox();


    Share = {
        vkontakte: function(purl, ptitle, pimg, text) {
            url  = 'http://vkontakte.ru/share.php?';
            url += 'url='          + encodeURIComponent(purl);
            url += '&title= Получите от 3 000 до 10 000 рублей';
            url += '&description= Рекомендую компанию ПФ Финанс, как профессионалов в финансовых вопросах по потребительскому кредитованию и улучшению условий ипотеки (рефинансирования)';
            url += '&image=url("http://sait.worknext.ru/pf-finans/img/screen.png")';
            url += '&noparse=true';
            Share.popup(url);
        },

        facebook: function(purl, ptitle, pimg, text) {
            url  = 'http://www.facebook.com/sharer.php?s=100';
            url += '&p[title]=Получите от 3 000 до 10 000 рублей';
            url += '&p[summary]=Рекомендую компанию ПФ Финанс, как профессионалов в финансовых вопросах по потребительскому кредитованию и улучшению условий ипотеки (рефинансирования)';
            url += '&p[url]=http://sait.worknext.ru/pf-finans';
            url += '&p[images][0]=url("http://sait.worknext.ru/pf-finans/img/screen.png")';
            Share.popup(url);
        },
        popup: function(url) {
            window.open(url,'','toolbar=0,status=0,width=626,height=436');
        }
    };

    $(".statistic-visible").click(function () {
       $(".statistic-block").addClass("statistic-active");
    });
});