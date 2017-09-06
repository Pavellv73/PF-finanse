jQuery(function ($) {
    $(function () {
        function e(e) {
            console.log(e)
        }

        function t() {
            $(".habmenu").fadeToggle(), $(".block1").toggleClass("block1-click"), $(".block2").toggleClass("block2-click"), $(".block3").toggleClass("block3-click"), $("body").toggleClass("no-scroll"), $("section, footer").toggleClass("blur")
        }

        var n = /((8|\+7)-?)?\(?\d{3}\)?-?\d{1}-?\d{1}-?\d{1}-?\d{1}-?\d{1}-?\d{1}-?\d{1}/, a = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/, o = "", i = [], r = !1, l = !1;
        $("form:not(#searchform)").ajaxForm({
            clearForm: !1, resetForm: !1, beforeSubmit: function (t, s) {
                $("input").removeClass("err-form"), r = !1, i[0] = s.find(".submit"), i[1] = s.find(".submit").text(), s.addClass("dis");
                var c = new RegExp("^[-0-9a-z._]+@[-0-9a-z.]+.[a-z]{2,4}$", "i"), u = "";
                for (var d in t) {
                    if ("phone" == t[d].name && !n.test(t[d].value))return s.removeClass("dis").find('input[name="phone"]').addClass("err-form invalid"), !1;
                    if ("phone" == t[d].name && "" == t[d].value)return s.removeClass("dis").find('input[name="phone"]').addClass("err-form"), !1;
                    if ("city" == t[d].name && "" == t[d].value)return s.removeClass("dis").find('input[name="city"]').addClass("err-form"), !1;
                    if ("phone" == t[d].name && "" != t[d].value)for (var m = 0; m <= 9; m++)if (u = new RegExp(m.toString() + m.toString() + m.toString() + m.toString() + m.toString() + m.toString() + m.toString()), u.test(t[d].value))return s.removeClass("dis").find('input[name="phone"]').addClass("err-form"), !1;
                    if ("name" == t[d].name && "" == t[d].value)return s.removeClass("dis").find('input[name="name"]').addClass("err-form"), !1;
                    if ("email" == t[d].name && "" != t[d].value && !c.test(t[d].value))return s.removeClass("dis").find('input[name="email"]').addClass("err-form"), !1;
                    if ("email" == t[d].name && !a.test(t[d].value))return s.removeClass("dis").find('input[name="phone"]').addClass("err-form invalid"), !1;
                    "target" == t[d].name && (o = t[d].value), "dwnld" == t[d].name && (r = !0, e(r)), "sendmail" == t[d].name && (l = !0, mailInput = $(s).find("[name='email']"), e(mailInput), a.test(mailInput.val()) ? $("#thnx2-a").click() : mailInput.addClass("err-form"))
                }
                return !0
            }, success: function () {
                if (r) {
                    var e = document.getElementById("dwnld");
                    onload = e.click(), r = !1
                }
                console.log("THENKU");
                document.location.href="http://pf.worknext.ru/%d1%81%d0%bf%d0%b0%d1%81%d0%b8%d0%b1%d0%be/";
            }
        }), $(document).scroll(function () {
            $(this).scrollTop() > 20 ? ($("header").addClass("header-blue2"), $("header-content").addClass("headerblue-content"), $(".menu a").addClass("link-white"), $(".contacts .num").addClass("num-white"), $(".logo").addClass("white-logo")) : ($("header").removeClass("header-blue2"), $("header-content").removeClass("headerblue-content"), $(".menu a").removeClass("link-white"), $(".contacts .num").removeClass("num-white"), $(".logo").removeClass("white-logo"))
        }), $(".burger").click(function () {
            return t(), !1
        }), $(".habmenu a").click(function () {
            return t(), !0
        }), $(".habmenu a, .menu a, .black-text a, .rb7-infoblok .inf-text a").click(function () {
            var e = $(this).attr("href");
            return 0 != $(e).length && $("html, body").animate({scrollTop: $(e).offset().top}, 500), !1
        }), $(".slider-page1").slick({
            dots: !0,
            appendDots: ".control-position > .dots",
            infinite: !0,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: ".prewArrow1",
            nextArrow: ".nextArrow1",
            dotsClass: "markers"
        }), $(".switch").click(function () {
            return $(".switch-tap").toggleClass("switch-click"), $(".text-left p").toggleClass("text-noactive"), $(".text-right p").toggleClass("text-active"), $(".table1").toggleClass("table-novisible"), $(".table2").toggleClass("table-novisible"), !1
        }), $(".input-block").click(function () {
            $(this).find("input").addClass("input-active").focus(), $(this).find("label").animate({top: "-4px"}, 200)
        }), $(".input-block input").focusout(function () {
            "" == $(this).val() && ($(this).removeClass("input-active"), $(this).parent().find("label").animate({top: "15px"}, 200))
        }), $(".result-active").click(function () {
            $(".left-form").animate({left: "0"}), setTimeout(function () {
                $(".result-refinanse, .result-credit").fadeIn()
            }, 300)
        }), setTimeout(function () {
            var e = document.documentElement.clientWidth, t = 0;
            e >= 768 ? t = 0 : e >= 1280 && (t = 0), $("#form1 form").animate({right: t}, 800)
        }, 500), ymaps.ready(function () {
            var e = [55.810302, 37.450759];
            $(window).width() >= 768 && (e = [55.80781, 37.448313]);
            var t = new ymaps.Map("map", {
                center: e,
                zoom: 16,
                controls: []
            }, {searchControlProvider: "yandex#search"}), n = new ymaps.Placemark([55.807982, 37.450845], {
                hintContent: "Авиационная улица, 77",
                balloonContent: "Авиационная улица, 77"
            }, {preset: "islands#circleIcon", iconColor: "#f75c52"});
            t.geoObjects.add(n), t.behaviors.disable("scrollZoom"), t.behaviors.disable("multiTouch"), t.behaviors.disable("drag")
        }), $(".fancybox").fancybox(), Share = {
            vkontakte: function (e, t, n, a) {
                url = "http://vkontakte.ru/share.php?", url += "url=" + encodeURIComponent(e), url += "&title= Получите от 3 000 до 10 000 рублей", url += "&description= Рекомендую компанию ПФ Финанс, как профессионалов в финансовых вопросах по потребительскому кредитованию и улучшению условий ипотеки (рефинансирования)", url += '&image=url("http://sait.worknext.ru/pf-finans/img/screen.png")', url += "&noparse=true", Share.popup(url)
            }, facebook: function (e, t, n, a) {
                url = "http://www.facebook.com/sharer.php?s=100", url += "&p[title]=Получите от 3 000 до 10 000 рублей", url += "&p[summary]=Рекомендую компанию ПФ Финанс, как профессионалов в финансовых вопросах по потребительскому кредитованию и улучшению условий ипотеки (рефинансирования)", url += "&p[url]=http://sait.worknext.ru/pf-finans", url += '&p[images][0]=url("http://sait.worknext.ru/pf-finans/img/screen.png")', Share.popup(url)
            }, popup: function (e) {
                window.open(e, "", "toolbar=0,status=0,width=626,height=436")
            }
        }, $(".statistic-visible").click(function () {
            $(".statistic-block").addClass("statistic-active")
        })
    });
});
