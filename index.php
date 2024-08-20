<?php
$cms = require_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';
$cms->landing( 1, 2 );
?>
<!DOCTYPE html>
<html lang="cs" dir="ltr" class="  webp webp-alpha webp-animation webp-lossless"
data-scrapbook-create="20240819205353386"
  data-scrapbook-title="Koupit Eronex Forte levně. Ceny, recenze. Objednejte Eronex Forte teď!">

<head>
  <!-- <script async="" src="js/fbevents.js"></script> -->

  <script src="js/jquery.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#ffffff">
  <script src="js/_.js"></script>
  <title>
    Koupit Eronex Forte levně. Ceny, recenze. Objednejte Eronex Forte teď!
  </title>
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/style.min.css">
  <script>
    $(document).ready(function () {
      $("a").not('.policy').on("click", function (e) {
        var anchor = $(this);
        $("html, body")
          .stop()
          .animate(
            {
              scrollTop: $(anchor.attr("href")).offset().top,
            },
            777
          );
        e.preventDefault();
        return false;
      });
    });
  </script>
  <script data-polyfil="webp">
    !(function (e, n, A) {
      function o(e, n) {
        return typeof e === n;
      }

      function t() {
        var e, n, A, t, a, i, l;
        for (var f in r)
          if (r.hasOwnProperty(f)) {
            if (
              ((e = []),
                (n = r[f]),
                n.name &&
                (e.push(n.name.toLowerCase()),
                  n.options && n.options.aliases && n.options.aliases.length))
            )
              for (A = 0; A < n.options.aliases.length; A++)
                e.push(n.options.aliases[A].toLowerCase());
            for (
              t = o(n.fn, "function") ? n.fn() : n.fn, a = 0;
              a < e.length;
              a++
            )
              (i = e[a]),
                (l = i.split(".")),
                1 === l.length
                  ? (Modernizr[l[0]] = t)
                  : (!Modernizr[l[0]] ||
                    Modernizr[l[0]] instanceof Boolean ||
                    (Modernizr[l[0]] = new Boolean(Modernizr[l[0]])),
                    (Modernizr[l[0]][l[1]] = t)),
                s.push((t ? "" : "no-") + l.join("-"));
          }
      }

      function a(e) {
        var n = u.className,
          A = Modernizr._config.classPrefix || "";
        if ((c && (n = n.baseVal), Modernizr._config.enableJSClass)) {
          var o = new RegExp("(^|\s)" + A + "no-js(\s|$)");
          n = n.replace(o, "$1" + A + "js$2");
        }
        Modernizr._config.enableClasses &&
          ((n += " " + A + e.join(" " + A)),
            c ? (u.className.baseVal = n) : (u.className = n));
      }

      function i(e, n) {
        if ("object" == typeof e) for (var A in e) f(e, A) && i(A, e[A]);
        else {
          e = e.toLowerCase();
          var o = e.split("."),
            t = Modernizr[o[0]];
          if ((2 == o.length && (t = t[o[1]]), "undefined" != typeof t))
            return Modernizr;
          (n = "function" == typeof n ? n() : n),
            1 == o.length
              ? (Modernizr[o[0]] = n)
              : (!Modernizr[o[0]] ||
                Modernizr[o[0]] instanceof Boolean ||
                (Modernizr[o[0]] = new Boolean(Modernizr[o[0]])),
                (Modernizr[o[0]][o[1]] = n)),
            a([(n && 0 != n ? "" : "no-") + o.join("-")]),
            Modernizr._trigger(e, n);
        }
        return Modernizr;
      }
      var s = [],
        r = [],
        l = {
          _version: "3.6.0",
          _config: {
            classPrefix: "",
            enableClasses: !0,
            enableJSClass: !0,
            usePrefixes: !0,
          },
          _q: [],
          on: function (e, n) {
            var A = this;
            setTimeout(function () {
              n(A[e]);
            }, 0);
          },
          addTest: function (e, n, A) {
            r.push({
              name: e,
              fn: n,
              options: A,
            });
          },
          addAsyncTest: function (e) {
            r.push({
              name: null,
              fn: e,
            });
          },
        },
        Modernizr = function () { };
      (Modernizr.prototype = l), (Modernizr = new Modernizr());
      var f,
        u = n.documentElement,
        c = "svg" === u.nodeName.toLowerCase();
      !(function () {
        var e = {}.hasOwnProperty;
        f =
          o(e, "undefined") || o(e.call, "undefined")
            ? function (e, n) {
              return n in e && o(e.constructor.prototype[n], "undefined");
            }
            : function (n, A) {
              return e.call(n, A);
            };
      })(),
        (l._l = {}),
        (l.on = function (e, n) {
          this._l[e] || (this._l[e] = []),
            this._l[e].push(n),
            Modernizr.hasOwnProperty(e) &&
            setTimeout(function () {
              Modernizr._trigger(e, Modernizr[e]);
            }, 0);
        }),
        (l._trigger = function (e, n) {
          if (this._l[e]) {
            var A = this._l[e];
            setTimeout(function () {
              var e, o;
              for (e = 0; e < A.length; e++) (o = A[e])(n);
            }, 0),
              delete this._l[e];
          }
        }),
        Modernizr._q.push(function () {
          l.addTest = i;
        }),
        Modernizr.addAsyncTest(function () {
          function e(e, n, A) {
            function o(n) {
              var o = n && "load" === n.type ? 1 == t.width : !1,
                a = "webp" === e;
              i(e, a && o ? new Boolean(o) : o), A && A(n);
            }
            var t = new Image();
            (t.onerror = o), (t.onload = o), (t.src = n);
          }
          var n = [
            {
              uri: "data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",
              name: "webp",
            },
            {
              uri: "data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",
              name: "webp.alpha",
            },
            {
              uri: "data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",
              name: "webp.animation",
            },
            {
              uri: "data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",
              name: "webp.lossless",
            },
          ],
            A = n.shift();
          e(A.name, A.uri, function (A) {
            if (A && "load" === A.type)
              for (var o = 0; o < n.length; o++) e(n[o].name, n[o].uri);
          });
        }),
        t(),
        a(s),
        delete l.addTest,
        delete l.addAsyncTest;
      for (var p = 0; p < Modernizr._q.length; p++) Modernizr._q[p]();
      e.Modernizr = Modernizr;
    })(window, document);
  </script>
  <style>
    .ever-popup-build {
      position: fixed;
      opacity: 0;
      z-index: -1;
      top: 0;
      left: -9999px;
    }
  </style>
  <?php $cms->header(); ?>
</head>

<body class="timer-different ev-date">
  <div class="header">
    <div class="container">
      <div class="burger"><img src="img/menu.png" loading="lazy" alt=""></div>
      <div class="menu-mob">
        <div class="menu-mob__bg"></div>
        <div class="menu-mob__content">
          <div class="menu-mob__header">
            <img class="mob-logo" src="img/logo.png" loading="lazy" alt=""><img class="mob-close" src="img/close.png" loading="lazy" alt="">
          </div>
          <ul class="menu-list">
            <li class="menu-list__item">
              <a class="list-item__link scroll-link" href="#composition"><img class="list-item__img"
                  src="img/header-formula.png" loading="lazy" alt="formula"><span class="menu-list__text">Složení</span></a>
            </li>
            <li class="menu-list__item">
              <a class="list-item__link scroll-link" href="#reviews"><img class="list-item__img" src="img/header-review.png" loading="lazy"
                  alt="reviews"><span class="menu-list__text">Reference</span></a>
            </li>
          </ul>
          <div class="timer">
            <div class="timer__text">Do konce akce zbývá:</div>
            <div class="timer__num text-bold">
              <div class="hours">0</div>
              <div class="hours">0</div>
              <div class="dots">:</div>
              <div class="minutes">1</div>
              <div class="minutes">0</div>
              <div class="dots">:</div>
              <div class="seconds">4</div>
              <div class="seconds">6</div>
            </div>
          </div>
          <button class="button btn-mob ever-popup-btn" type="button">
            Objednat
          </button>
        </div>
      </div>
      <div class="menu-desc">
        <!-- <img class="logo" src="img/logo.png" alt=""> -->
        <ul class="menu-list">
          <li class="menu-list__item">
            <a class="list-item__link" href="#composition"><img class="list-item__img" src="img/header-formula.png" loading="lazy"
                alt=""><span class="menu-list__text">Složení</span></a>
          </li>
          <li class="menu-list__item">
            <a class="list-item__link" href="#reviews"><img class="list-item__img" src="img/header-review.png" loading="lazy" alt=""><span
                class="menu-list__text">Reference</span></a>
          </li>
        </ul>
        <div class="timer">
          <div class="timer__text">Do konce akce zbývá:</div>
          <div class="timer__num text-bold">
            <div class="hours">0</div>
            <div class="hours">0</div>
            <div class="dots">:</div>
            <div class="minutes">1</div>
            <div class="minutes">0</div>
            <div class="dots">:</div>
            <div class="seconds">4</div>
            <div class="seconds">6</div>
          </div>
        </div>
        <a href="#form" class="button header__btn ever-popup-btn" type="button">
          Objednat
        </a>
      </div>
    </div>
  </div>
  <section class="promo block">
    <div class="container">
      <div class="promo-content">
        <div class="promo-couple">
          <picture>
            <source media="(max-width:1023px)" srcset="
                  img/d6a236035029c6bf9aefe795c6bbacb9e17c17c7.png
                " loading="lazy">
            <source type="image/webp" srcset="img/promo-couple.webp" loading="lazy">
            <img src="img/promo-couple.png" alt="couple" loading="lazy">
          </picture>
        </div>
        <div class="promo-advantage">
          <div class="promo-text">
            <h1 class="promo__title title">Eronex Forte</h1>
            <p class="promo__subtitle text-bold">
              Vaše šance na prodloužení mládí
            </p>
          </div>
          <ul class="promo-list">
            <li class="promo-item">
              <span class="promo-item__circle"><img src="img/gender.png" loading="lazy" alt="gender"></span>
              <div class="promo-item__desc">
                <strong class="promo-item__desc-bold text-bold">Pomáhá obnovit hladinu testosteronu</strong>, zlepšuje
                zdraví mužů
              </div>
            </li>
            <li class="promo-item">
              <span class="promo-item__circle"><img src="img/gender.png" loading="lazy" alt="gender"></span>
              <div class="promo-item__desc">
                <strong class="promo-item__desc-bold text-bold">Pomáhá zvyšit erekci,</strong>
                normalizuje práci genitourinárního systému
              </div>
            </li>
            <li class="promo-item">
              <span class="promo-item__circle"><img src="img/gender.png" loading="lazy" alt="gender"></span>
              <div class="promo-item__desc">
                <strong class="promo-item__desc-bold text-bold">Pomáhá zastavit úpadek síl,</strong>
                obnovuje hladinu mužských hormonů
              </div>
            </li>
          </ul>
          <div class="promo-partners desk">
            <img src="img/partners.png"  loading="lazy" alt="partners">
          </div>
          <div class="promo__product">
            <picture>
              <source type="image/webp" srcset="img/eronex-eu.webp" loading="lazy">
              <img src="img/eronex-eu.png" loading="lazy"  alt="prod">
            </picture>
          </div>
        </div>
        <div class="promo-form-wrap">
          <div class="promo-form">
            <div class="form">
              <div class="form__discount">
                <?=$cms->discount;?>%
              </div>
              <div class="form__wrapper">
                <div class="form__subtitle">
                  Jenom dnes
                  <span class="date-0 form__subtitle--date" data-format="dd monthFull">19&nbsp;srpen</span>
                </div>
                <div class="form__price">
                  <div class="form__price-val">
                    <h5 class="form__price-title">Původní cena</h5>
                    <p class="form__price-before">
                      <span class="x_price_previous form__price-before_line"><?=$cms->oldpr;?></span><span
                        class="x_currency form__price-before_size"><?=$cms->currency;?></span>
                    </p>
                  </div>
                  <div class="form_before"></div>
                  <div class="form__price-val">
                    <h5 class="form__price-title form__price-title--new">
                      Nová cena
                    </h5>
                    <p class="form__price-after">
                      <span class="x_price_current"><?=$cms->price;?></span><span class="x_currency form__price-after_size"><?=$cms->currency;?></span>
                    </p>
                  </div>
                </div>
                <form class="x_order_form" action="#" method="post">
                  <?=$cms->params();?>
                  <div>
                    Například: Lukáš Aragonský
                  </div>
                  <label class="form__name">
                    <img src="img/name-icon.png" loading="lazy" alt="image">
                    <input class="input name" type="text" name="name" placeholder="Jméno" required=""
                      data-scrapbook-input-value="">
                  </label>
                  <div>
                    Například: +420 777888555
                  </div>
                  <div class="form__phone">
                    <img src="img/phone-solid.svg" alt="" loading="lazy">
                    <input class="form__input input form__input-phone" aria-label="phone" name="phone"
                      placeholder="Číslo" required="" type="tel" data-scrapbook-input-value="">
                  </div>
                  <button class="btn form-btn">
                    Objednat<br>
                    <span class="btn--small">se slevou</span>
                  </button>

                </form>
                <div class="online-block">
                  <div class="online-wrapper">
                    <div class="online-people online-1 active">
                      <img src="img/eye.png" loading="lazy" alt="online">
                      <p>
                        Nyní je online
                        <span class="text-bold online-dynamic online-dynamic-1">27</span>
                        lidí
                      </p>
                    </div>
                    <div class="online-people online-2">
                      <img src="img/eye.png" loading="lazy" alt="online">
                      <p>
                        <span class="text-bold online-dynamic online-dynamic-2">116</span>
                        objednávek za poslední hodinu
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form__left">
                Zbývá <span class="lastpack">80</span> balení
              </div>
            </div>
            <div class="form-protected">
              <div class="form-protected__img">
                <img src="img/protected.png" loading="lazy" alt="">
              </div>
              <p class="form-protected__text">Vaše data jsou chráněna!</p>
            </div>
          </div>
          <div class="promo-partners mob">
            <img src="img/partners.png" loading="lazy" alt="partners">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="check block">
    <div class="container">
      <h2 class="check__title title">Otestujte se:</h2>
      <p class="check__subtitle">
        Měli byste se starat o hladinu testosteronu
      </p>
      <div class="check-content">
        <ul class="check-list">
          <li class="check-item">
            <div class="check-item__circle">1</div>
            <div class="check-item__img">
              <picture>
                <source type="image/webp" srcset="img/check1.webp" loading="lazy">
                <img src="img/check1.jpg" alt="man" loading="lazy">
              </picture>
            </div>
            <div class="check-item__bg">
              <img src="img/check-item__bg.svg" alt="wave" loading="lazy">
            </div>
            <strong class="check-item__desc text-bold">Kvalita erekci se zhoršila</strong>
          </li>
          <li class="check-item">
            <div class="check-item__circle">2</div>
            <div class="check-item__img">
              <picture>
                <source type="image/webp" srcset="img/check2.webp" loading="lazy">
                <img src="img/check2.jpg" alt="man" loading="lazy">
              </picture>
            </div>
            <div class="check-item__bg">
              <img src="img/check-item__bg.svg" alt="wave" loading="lazy">
            </div>
            <strong class="check-item__desc text-bold">Snížení svalové hmotnosti</strong>
          </li>
          <li class="check-item">
            <div class="check-item__circle">3</div>
            <div class="check-item__img">
              <picture>
                <source type="image/webp" srcset="img/check3.webp" loading="lazy">
                <img src="img/check3.jpg" alt="man" loading="lazy">
              </picture>
            </div>
            <div class="check-item__bg">
              <img src="img/check-item__bg.svg" alt="wave" loading="lazy">
            </div>
            <strong class="check-item__desc text-bold">Kůže se stala méně pružnou</strong>
          </li>
          <li class="check-item">
            <div class="check-item__circle">4</div>
            <div class="check-item__img">
              <picture>
                <source type="image/webp" srcset="img/check4.webp" loading="lazy">
                <img src="img/check4.jpg" alt="man" loading="lazy">
              </picture>
            </div>
            <div class="check-item__bg">
              <img src="img/check-item__bg.svg" alt="wave" loading="lazy">
            </div>
            <strong class="check-item__desc text-bold">Objevila se nadváha</strong>
          </li>
          <li class="check-item">
            <div class="check-item__circle">5</div>
            <div class="check-item__img">
              <picture>
                <source type="image/webp" srcset="img/check5.webp" loading="lazy">
                <img src="img/check5.jpg" alt="man" loading="lazy">
              </picture>
            </div>
            <div class="check-item__bg">
              <img src="img/check-item__bg.svg" alt="wave" loading="lazy">
            </div>
            <strong class="check-item__desc text-bold">Snížila se energie</strong>
          </li>
          <li class="check-item">
            <div class="check-item__circle">6</div>
            <div class="check-item__img">
              <picture>
                <source type="image/webp" srcset="img/check6.webp" loading="lazy">
                <img src="img/check6.jpg" alt="man" loading="lazy">
              </picture>
            </div>
            <div class="check-item__bg">
              <img src="img/check-item__bg.svg" alt="wave" loading="lazy">
            </div>
            <strong class="check-item__desc text-bold">Trápí plešatost</strong>
          </li>
        </ul>
        <div class="check-info">
          <div class="check-info__arrow">
            <img src="img/check-arrow.png" loading="lazy" alt="arrow">
          </div>
          <div class="check-info__desc">Shodují se některé body?</div>
          <div class="check-info__desc-accent text-bold">
            S největší pravděpodobností kvůli nízkému testosteronu jste začali
            rychle stárnout a ztrácet mužskou sílu
          </div>
          <div class="check-info-warning">
            Potřebujete odbornou konzultaci
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="problem block">
    <div class="container">
      <div class="expert">
        <div class="expert-text text-bold">
          <h2 class="expert__title title">
            Nedostatek testosteronu po 40&nbsp;letech
          </h2>
          <span class="expert__accent">hrozí všem mužům</span>
        </div>
        <div class="expert-info">
          <div class="expert__men">
            <picture>
              <source type="image/webp" srcset="img/expert.webp" loading="lazy">
              <img src="img/expert.png" loading="lazy" alt="expert">
            </picture>
          </div>
          <div class="expert-desc">
            <p class="expert__response">
              "Ztráta mužské síly je ovlivněna testosteronem, který začíná
              postupně klesat od 30&nbsp;let"
            </p>
            <div class="expert-bio">
              <div class="expert-bio-wrapper">
                <strong class="expert-bio__name text-bold">Martin Veneček,
                </strong>
                <p class="expert-bio__prof">expert na zdraví mužů</p>
              </div>
              <div class="expert-bio-picture">
                <div class="expert-bio__sign">
                  <img src="img/sign.png" loading="lazy" alt="sign">
                </div>
                <div class="expert-bio__approved">
                  <img src="img/approved.png" loading="lazy" alt="approved">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="info">
        <div class="info-content">
          <div class="info-hormone">
            <div class="info-text">
              <h3 class="info-text__title text-bold">
                Testosteron je hlavní mužský androgen.
              </h3>
              <p class="info-text__desc">
                V klinické praxi s poruchami mužského zdraví se nejčastěji
                zkoumají hladiny testosteronu v krvi. Krevní testosteron
                zahrnuje dvě frakce: vázané a volné. Když se podíl vázaného
                testosteronu zvyšuje a svobodného klesá, muž ztrácí svou sílu
                a reprodukční funkci. Proto je důležité používat prostředky,
                které obnovují hladinu volného testosteronu. Takový je
                Eronex Forte.
              </p>
            </div>
            <div class="info-picture">
              <picture>
                <source type="image/webp" srcset="img/info-gormone.webp" loading="lazy">
                <img src="img/info-gormone.jpg" alt="blood" loading="lazy">
              </picture>
            </div>
          </div>
          <div class="info-box">
            <h4 class="info-box__title text-bold">
              Díky vyváženému složení má nástroj Eronex Forte řadu&nbsp;výhod:
            </h4>
            <ul class="info-list">
              <li class="info-item">
                <div class="info-item__check">
                  <img src="img/check.png" loading="lazy" alt="check">
                </div>
                <p class="info-item__desc">
                  Pomáhá zpomalit stárnutí těla a ztrátu svalové hmoty
                </p>
              </li>
              <li class="info-item">
                <div class="info-item__check">
                  <img src="img/check.png" loading="lazy" alt="check">
                </div>
                <p class="info-item__desc">
                  Pomáhá zvyšit libido a zlepšovat erektilní funkci
                </p>
              </li>
              <li class="info-item">
                <div class="info-item__check">
                  <img src="img/check.png" loading="lazy" alt="check">
                </div>
                <p class="info-item__desc">
                  Pomáhá zvýšit energii a vytrvalost
                </p>
              </li>
            </ul>
            <div class="info-prod">
              <picture>
                <source type="image/webp" srcset="img/eronex-eu.webp" loading="lazy">
                <img src="img/eronex-eu.png"loading="lazy"  alt="prod">
              </picture>
            </div>
            <div class="info-partners">
              <img src="img/partners.png" loading="lazy" alt="partners">
            </div>
          </div>
        </div>
      </div>
      <div class="doctor">
        <div class="doctor-content">
          <div class="doctor-text">
            <h5 class="doctor__title text-bold">
              Eronex Forte je prostředek, který obnovuje hladinu volného
              testosteronu
            </h5>
            <p class="doctor__subtitle">
              Jedná se o jediný produkt, který působí komplexně na zdraví mužů
              a okamžitě na příčinu problému
            </p>
          </div>
          <div class="doctor-info">
            <div class="doctor-info-desc">
              <div class="doctor-info__men">
                <img src="img/doctor.png" loading="lazy" alt="doctor">
              </div>
              <ul class="doctor-list">
                <li class="doctor-item">
                  <div class="doctor-item__circle">
                    <img src="img/gender.png" loading="lazy" alt="gender">
                  </div>
                  <p class="doctor-item__desc">
                    <strong class="doctor-item__desc-accent text-bold">Pro urychlení účinku Eronex Forte</strong>,
                    nekonzumujte alkohol a&nbsp;nekouříte
                  </p>
                </li>
                <li class="doctor-item">
                  <div class="doctor-item__circle">
                    <img src="img/gender.png" loading="lazy" alt="gender">
                  </div>
                  <p class="doctor-item__desc">
                    <strong class="doctor-item__desc-accent text-bold">
                      Pro maximální účinek přípravku Eronex Forte</strong>
                    používejte produkty užitečné pro potenci
                  </p>
                </li>
                <li class="doctor-item">
                  <div class="doctor-item__circle">
                    <img src="img/gender.png" loading="lazy" alt="gender">
                  </div>
                  <p class="doctor-item__desc">
                    <strong class="doctor-item__desc-accent text-bold">Chcete-li zabránit problémům s potencí
                    </strong>musíte&nbsp;cvičit
                  </p>
                </li>
              </ul>
              <div class="doctor-bio desk">
                <strong class="doctor-bio__name text-bold">Václav Horák</strong>
                <p class="doctor-bio__prof">lékař-urolog</p>
                <div class="doctor-bio__sign">
                  <img src="img/doc-sign.png" loading="lazy" alt="sign">
                </div>
              </div>
            </div>
            <div class="doctor-bio mob">
              <strong class="doctor-bio__name text-bold">Václav Horák</strong>
              <p class="doctor-bio__prof">lékař-urolog</p>
              <div class="doctor-bio__sign">
                <img src="img/doc-sign.png" loading="lazy" alt="sign">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="health bg">
    <section class="changes block">
      <div class="container">
        <h2 class="title changes__title">
          Jak se Eronex Forte může změnit váš život
        </h2>
        <ul class="changes__list changes-list">
          <li class="changes__item">
            <div class="changes-list__img">
              <picture>
                <source srcset="img/changes1.webp" loading="lazy" type="image/webp">
                <img class="changes-list__photo" src="img/changes1.jpg" alt="" loading="lazy">
              </picture>
              <p class="changes-list__stage">Před užíváním prostředku</p>
            </div>
            <p class="changes__item-title">
              Problémy s erekcí, nedostatek energie a první známky starnutí
            </p>
            <p class="changes__item-text">
              Nemůžete fyzicky mít sex, touha zmizí, stres se hromadí. Cítíte
              se únavu a frustraci z odrazu v&nbsp;zrcadle
            </p>
          </li>
          <li class="changes__item">
            <div class="changes-list__img">
              <picture>
                <source srcset="img/changes2.webp" loading="lazy" type="image/webp">
                <img class="changes-list__photo" src="img/changes2.jpg" alt="" loading="lazy">
              </picture>
              <p class="changes-list__stage">Během užívání</p>
            </div>
            <p class="changes__item-title">
              Vzrušení může přijít rychleji, zlepší se celkový stav těla
            </p>
            <p class="changes__item-text">
              S vysokou pravděpodobností se erekce posílí, objeví se vzrušení,
              můžete znovu mít sex. Pravděpodobně se budete cítit plný síly a
              energie i po fyzické aktivitě
            </p>
          </li>
          <li class="changes__item">
            <div class="changes-list__img">
              <picture>
                <source srcset="img/changes3.webp" loading="lazy" type="image/webp">
                <img class="changes-list__photo" src="img/changes3.jpg" alt="" loading="lazy">
              </picture>
              <p class="changes-list__stage">Po kúře</p>
            </div>
            <p class="changes__item-title">
              S největší pravděpodobností budete mít vynikající sílu a budete
              se cítit mladší
            </p>
            <p class="changes__item-text">
              Jistě se znovu vrátí ranní erekce, bude rychle vzrušeni, erekce
              je silná a může trvat dlouho. Vaši energii a vzhledu
              pravděpodobně závidí mladí
            </p>
          </li>
        </ul>
      </div>
    </section>
    <div class="possibility block">
      <div class="container">
        <div class="changes__full full">
          <picture>
            <source srcset="img/changes-people.webp" loading="lazy" type="image/webp">
            <img class="full__photo" src="img/changes-people.png" loading="lazy" alt="">
          </picture>
          <h3 class="full__title title">
            Můžete se cítit jako plnohodnotný muž i po 40&nbsp;letech
          </h3>
        </div>
        <div class="formland">
          <div class="formland__prod">
            <picture>
              <source srcset="img/eronex-eu.webp" loading="lazy" type="image/webp">
              <img class="formland__pack" src="img/eronex-eu.png" loading="lazy" alt="">
            </picture>
          </div>
          <div class="formland__content">
            <p class="formland__title">
              Jenom dnes
              <span class="date-0 text-accent" data-format="dd monthFull">19&nbsp;srpen</span>
              <p class="formland__title_discount"><?=$cms->discount;?>%</p>
            </p>
            <div class="formland__timer">
              <div class="timer">
                <div class="timer__text">Do konce akce zbývá:</div>
                <div class="timer__num text-bold">
                  <div class="hours">0</div>
                  <div class="hours">0</div>
                  <div class="dots">:</div>
                  <div class="minutes">1</div>
                  <div class="minutes">0</div>
                  <div class="dots">:</div>
                  <div class="seconds">4</div>
                  <div class="seconds">6</div>
                </div>
              </div>
            </div>
            <div class="formland__form">
              <form class="x_order_form" action="#" method="post">
                <?=$cms->params();?>
                <label class="form__name"><img src="img/name-icon.png" loading="lazy" alt="image"><input class="input nameland" type="text"
                    name="name" placeholder="Jméno" required="" data-scrapbook-input-value=""></label>
                <div class="form__phone">
                  <img src="img/phone-solid.svg" alt="" loading="lazy">
                  <input class="form__input input" aria-label="phone" name="phone" placeholder="Číslo" required=""
                    type="tel" data-scrapbook-input-value="">
                </div>
                <button class="btn form-btn">
                  Objednat
                  <span class="btn--small">se slevou</span>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="complex">
    <div class="composition block">
      <div class="container" id="composition">
        <h2 class="title composition__title">
          Eronex Forte má několik výhod<br>
          v jednom prostředku
        </h2>
        <h3 class="composition__subtitle">
          Kapsle s komplexem přírodních extraktů pomáhají posílit erekci a
          vytrvalost, stejně jako prodloužit mládí
        </h3>
        <ul class="composition__list active">
          <li class="composition__item">
            <div class="composition__img composition__img--skew">
              <picture>
                <source srcset="img/composition-1.webp" loading="lazy" type="image/webp">
                <img src="img/composition-1.jpg" alt="composition" loading="lazy">
              </picture>
            </div>
            <h4 class="composition__name composition__name--ant">
              Extrakt z kořene Maki
              <span class="composition__name--small">Studie ukazují, že konzumace extraktu z Maki zmenšuje
                prostatu.
              </span>
            </h4>
          </li>
          <li class="composition__item">
            <div class="composition__img">
              <picture>
                <source srcset="img/composition-2.webp" loading="lazy" type="image/webp">
                <img src="img/composition-2.jpg" alt="composition" loading="lazy">
              </picture>
            </div>
            <h4 class="composition__name">
              Rostlinný extrakt Tribulus
              <span class="composition__name--small">extrakt obsahuje 90% saponinů typu furostanol, jedná se
                hlavní účinnou látku</span>
            </h4>
          </li>
          <li class="composition__item">
            <div class="composition__img composition__img--skew">
              <picture>
                <source srcset="img/composition-3.webp" loading="lazy" type="image/webp">
                <img src="img/composition-3.jpg" alt="composition" loading="lazy">
              </picture>
            </div>
            <h4 class="composition__name composition__name--ant">
              Extrakt z kořene kopřivy
              <span class="composition__name--small">kořen se často používá k léčbě zánětu prostaty.
              </span>
            </h4>
          </li>
          <li class="composition__item">
            <div class="composition__img">
              <picture>
                <source srcset="img/composition-4.webp" loading="lazy" type="image/webp">
                <img src="img/composition-4.jpg" alt="composition" loading="lazy">
              </picture>
            </div>
            <h4 class="composition__name">
              Zinek
              <span class="composition__name--small">podílí se na potlačení enzymu, který řídí přeměnu
                testosteronu na dihydrotestosteron, čímž udržuje jeho normální
                hladinu.</span>
            </h4>
          </li>
        </ul>
        <a href="#form" class="btn ever-popup-btn composition__btn">
          Objednat<br><span class="btn--small"> se slevou</span>
        </a>
      </div>
    </div>
    <section class="statistics block">
      <div class="container">
        <h2 class="statistics__title title">Průzkum 462&nbsp;mužů,</h2>
        <p class="statistics__subtitle">
          kteří užívali Eronex Forte po dobu nejméně 1 měsíce, uvedli
          následující výsledky:
        </p>
        <ul class="statistics-list">
          <li class="statistics-item">
            <div class="statistics-item__circle blue">98%</div>
            <p class="statistics-item__desc">
              Odstranili problémy <br>s erektilní dysfunkcí
            </p>
          </li>
          <li class="statistics-item">
            <div class="statistics-item__circle yellow">97%</div>
            <p class="statistics-item__desc">
              Dokázali zvýšit <br>hladinu testosteronu
            </p>
          </li>
          <li class="statistics-item">
            <div class="statistics-item__circle green">99%</div>
            <p class="statistics-item__desc">
              Odstraňují nebo zpomalují <br>známky stáří
            </p>
          </li>
        </ul>
      </div>
    </section>
  </section>
  <div class="wrapper">
    <section class="reviews block" id="reviews">
      <div class="container">
        <h2 class="title reviews__title">
          Příběhy o úspěchu našich zákazníků
        </h2>
        <h3 class="reviews__subtitle">
          Eronex Forte pomohl mnoha mužům ve věku od
          <span class="subtitle__accent text-nowrap">25 do 60</span> let
          překonat sexuální poruchy a zlepšit a zpříjemnit život
        </h3>
        <div class="reviews-content">
          <div class="reviews-panel">
            <div class="star-box">
              <div class="reviews-headStar" style="width: 89px"></div>
              <div class="reviews-amount">130 recenzí</div>
            </div>
            <button class="btn reviews-btn">Zanechat svůj komentář</button>
          </div>
          <div class="feedback">
            <div class="feedback-form">
              <div class="feedback-top">
                <div class="feedback-name">
                  <input class="feedback-name-input input__val-1 reviewInput2" type="text" name="name" required=""
                    placeholder="Vaše jméno" data-scrapbook-input-value="">
                </div>
                <div class="feedback-age">
                  <input class="feedback-name-input feedback-age input__val-2 reviewInput2" type="text" name="age"
                    required="" placeholder="Váš věk" data-scrapbook-input-value="">
                </div>
                <div class="feedback-assessment-wrap">
                  <div class="feedback-assessment">Vaše hodnocení</div>
                  <div class="feedback-rating">
                    <img class="star1" src="img/star.png" loading="lazy" alt="image"><img class="star2" src="img/star.png" loading="lazy" alt="image"><img
                      class="star3" src="img/star.png" loading="lazy" alt="image"><img class="star4" src="img/star.png" loading="lazy" alt="image"><img
                      class="star5" src="img/star.png" loading="lazy" alt="image">
                  </div>
                </div>
                <div class="feedback-form__internal-col">
                  <label class="feedback-form__file" for="file"><span class="feedback-form__file-img"><span
                        class="feedback-form__checkmark-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                          height="24" viewBox="0 0 24 24">
                          <path fill="#0f0" d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
                          </path>
                        </svg></span></span><span class="feedback-form__file-text">Nahrát svou
                      fotografii</span></label><input class="visually-hidden input-file reviews-input" id="file"
                    type="file" accept="image/*">
                </div>
              </div>
              <div class="feedback-text">
                <textarea class="feedback-text-input input__val-4" placeholder="Vaše zpětná vazba"></textarea>
              </div>
              <div class="feedback-btn btn reviews-btn">Odeslat</div>
            </div>
            <div class="feedback-modal" style="display: none;">
              <div class="feedback-modal__inner">
                <div class="feedback-modal__title">Děkujeme!</div>
                <div class="feedback-modal__text">
                  Váš komentář je odeslán k moderování
                </div>
              </div>
            </div>
          </div>
          <ul class="reviews-list">
            <li class="reviews-list-item reviews--full">
              <div class="reviews-item-top">
                <div class="reviews-item-avatar">
                  <picture>
                    <source type="image/webp" srcset="img/ava-1.webp" loading="lazy">
                    <img src="img/ava-1.png" loading="lazy" alt="avatar">
                  </picture>
                </div>
                <div class="reviews-item-title">
                  <h4 class="reviews-item__name">Marek, 46&nbsp;let</h4>
                  <div class="reviews-item__rating"></div>
                </div>
                <div class="reviews__date date-0">19.08.2024</div>
              </div>
              <div class="reviews-item__text">
                Dokonce i když si nestěžujete na problémy v posteli,
                nezapomeňte si vyzkoušet tyto kapsle! Vaše erekce bude tak
                silná jako nikdy předtím! A pro prevenci impotence, myslím, že
                Eronex Forte je vhodný. Plánuji si objednat tento přípravek
                znovu.
              </div>
              <div class="reviews-bottom">
                <div class="reviews-assessment">
                  <div class="social__button">
                    <span class="like social__img"> </span><span class="social__count">12</span>
                  </div>
                  <div class="social__button">
                    <span class="dislike social__img"></span><span class="social__count">0</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="reviews-list-item reviews--full">
              <div class="reviews-item-top">
                <div class="reviews-item-avatar">
                  <picture>
                    <source type="image/webp" srcset="img/ava-2.webp" loading="lazy">
                    <img src="img/ava-2.png" loading="lazy" alt="avatar">
                  </picture>
                </div>
                <div class="reviews-item-title">
                  <h4 class="reviews-item__name">Robert, 54&nbsp;let</h4>
                  <div class="reviews-item__rating"></div>
                </div>
                <div class="reviews__date date-0">19.08.2024</div>
              </div>
              <div class="reviews-item__text">
                S věkem se začaly objevovat problémy v sexu, začal jsem si
                všímat vrásky, plešatosti, rostlo břicho. To všechno mě velmi
                rozčilovalo. Bral jsem různé léky,ale pomohly pouze s
                erektilní dysfunkcí a jen dočasně. Eronex Forte se stal mou
                záchranou. Velmi se mi líbí jeho komplexní účinek.
              </div>
              <div class="reviews-bottom">
                <div class="reviews-assessment">
                  <div class="social__button">
                    <span class="like social__img"> </span><span class="social__count">12</span>
                  </div>
                  <div class="social__button">
                    <span class="dislike social__img"></span><span class="social__count">1</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="reviews-list-item reviews--full">
              <div class="reviews-item-top">
                <div class="reviews-item-avatar">
                  <picture>
                    <source type="image/webp" srcset="img/ava-3.webp" loading="lazy">
                    <img src="img/ava-3.png" loading="lazy" alt="avatar">
                  </picture>
                </div>
                <div class="reviews-item-title">
                  <h4 class="reviews-item__name">Antonín, 29&nbsp;let</h4>
                  <div class="reviews-item__rating"></div>
                </div>
                <div class="reviews__date date-1">18.08.2024</div>
              </div>
              <div class="reviews-item__text">
                Měl jsem problémy v sexu, ale psychicky. Dlouho jsem nemohl
                najít vhodný prášek, byl jsem v depresi. Když jsem začal
                užívat Eronex Forte, nálada se zvýšila, mám více energie a
                erekce se vrátila.
              </div>
              <div class="reviews-bottom">
                <div class="reviews-assessment">
                  <div class="social__button">
                    <span class="like social__img"> </span><span class="social__count">44</span>
                  </div>
                  <div class="social__button">
                    <span class="dislike social__img"></span><span class="social__count">0</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="reviews-list-item reviews--full">
              <div class="reviews-item-top">
                <div class="reviews-item-avatar">
                  <picture>
                    <source type="image/webp" srcset="img/ava-4.webp" loading="lazy">
                    <img src="img/ava-4.png" loading="lazy" alt="avatar">
                  </picture>
                </div>
                <div class="reviews-item-title">
                  <h4 class="reviews-item__name">Erik, 56&nbsp;let</h4>
                  <div class="reviews-item__rating" style="width: 85px"></div>
                </div>
                <div class="reviews__date date-2">17.08.2024</div>
              </div>
              <div class="reviews-item__text">
                Vynikající produkt, zcela splnil očekávání. Jsem ohromen
                neobvyklými pocity, energií a touhou udělat všechno možné.
              </div>
              <div class="reviews-bottom">
                <div class="reviews-assessment">
                  <div class="social__button">
                    <span class="like social__img"> </span><span class="social__count">24</span>
                  </div>
                  <div class="social__button">
                    <span class="dislike social__img"></span><span class="social__count">1</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="reviews-list-item">
              <div class="reviews-item-top">
                <div class="reviews-item-avatar">
                  <picture>
                    <source type="image/webp" srcset="img/ava-5.webp" loading="lazy">
                    <img src="img/ava-5.png" loading="lazy" alt="avatar">
                  </picture>
                </div>
                <div class="reviews-item-title">
                  <h4 class="reviews-item__name">Jan, 46&nbsp;let</h4>
                  <div class="reviews-item__rating"></div>
                </div>
                <div class="reviews__date date-3">16.08.2024</div>
              </div>
              <div class="reviews-item__text">
                Po kúře Eronex Forte chci sdílet své výsledky. Nečekejte na
                rychlý účinek-účinnost kapslí můžete zajistit po několika
                týdnech užívání. Kapsle jsou středně velké, pohodlné polykání.
                Nezpůsobil žádnou závislost. Balíček přišel poměrně rychle a
                zaplatil jsem až po doručení
              </div>
              <div class="reviews-bottom">
                <div class="reviews-assessment">
                  <div class="social__button">
                    <span class="like social__img"> </span><span class="social__count">46</span>
                  </div>
                  <div class="social__button">
                    <span class="dislike social__img"></span><span class="social__count">0</span>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="use block">
      <div class="container">
        <div class="use__content">
          <h2 class="title use__title">Jak užívat Eronex Forte</h2>
          <ul class="use__list">
            <li class="use__item">
              <div class="use__num">1</div>
              <h3 class="use__info">Berte 1-2 kapsle denně</h3>
            </li>
            <li class="use__item">
              <div class="use__num">2</div>
              <h3 class="use__info">Se sklenicí vody</h3>
            </li>
            <li class="use__item">
              <div class="use__num">3</div>
              <h3 class="use__info">Doporučená kúra je 45&nbsp;dní</h3>
            </li>
          </ul>
        </div>
        <div class="formland">
          <div class="formland__prod">
            <picture>
              <source srcset="img/eronex-eu.webp" type="image/webp" loading="lazy">
              <img class="formland__pack" src="img/eronex-eu.png" loading="lazy" alt="">
            </picture>
          </div>
          <div class="formland__content">
            <p class="formland__title">
              Jenom dnes
              <span class="date-0 text-accent" data-format="dd monthFull">19&nbsp;srpen</span>
              <p class="formland__title_discount"><?=$cms->discount;?>%</p>
            </p>
            <div class="formland__timer">
              <div class="timer">
                <div class="timer__text">Do konce akce zbývá:</div>
                <div class="timer__num text-bold">
                  <div class="hours">0</div>
                  <div class="hours">0</div>
                  <div class="dots">:</div>
                  <div class="minutes">1</div>
                  <div class="minutes">0</div>
                  <div class="dots">:</div>
                  <div class="seconds">4</div>
                  <div class="seconds">6</div>
                </div>
              </div>
            </div>
            <div class="formland__form">
              <form class="x_order_form" action="#" method="post">
                <?=$cms->params();?>
                <label class="form__name"><img src="img/name-icon.png" loading="lazy" alt="image"><input class="input nameland" type="text"
                    name="name" placeholder="Jméno" required="" data-scrapbook-input-value=""></label>
                <div class="form__phone">
                  <img src="img/phone-solid.svg" alt="" loading="lazy">
                  <input class="form__input input" aria-label="phone" name="phone" placeholder="Číslo" required=""
                    type="tel" data-scrapbook-input-value="">
                </div>
                <button class="btn form-btn">
                  Objednat
                  <span class="btn--small">se slevou</span>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <section class="order block">
    <div class="container">
      <h2 class="order__title title">Jak objednat Eronex Forte</h2>
      <ul class="order-list">
        <li class="order-item-wrap">
          <div class="order-item">
            <div class="order-item__img">
              <picture>
                <source type="image/webp" srcset="img/order1.webp" loading="lazy">
                <img src="img/order1.jpg" alt="form" loading="lazy">
              </picture>
            </div>
            <div class="order-item__circle">1</div>
            <strong class="order-item__text text-bold">Vyplňte formulář objednávky
            </strong>
          </div>
          <p class="order-item__desc">
            Zadejte pouze jméno<br class="order-item__desc-br">
            a telefonní číslo
          </p>
        </li>
        <li class="order-item-wrap">
          <div class="order-item">
            <div class="order-item__img">
              <picture>
                <source type="image/webp" srcset="img/order2.webp" loading="lazy">
                <img src="img/order2.jpg" alt="operator" loading="lazy">
              </picture>
            </div>
            <div class="order-item__circle">2</div>
            <strong class="order-item__text text-bold">Odpovězte na volání operátora
            </strong>
          </div>
          <p class="order-item__desc">
            Upřesní vaše adresní údaje a zodpoví všechny otázky
          </p>
        </li>
        <li class="order-item-wrap">
          <div class="order-item">
            <div class="order-item__img">
              <picture>
                <source type="image/webp" srcset="img/order3.webp" loading="lazy">
                <img src="img/order3.jpg" alt="parcel" loading="lazy">
              </picture>
            </div>
            <div class="order-item__circle">3</div>
            <strong class="order-item__text order-item__text--center text-bold">Zaplaťte po obdržení</strong>
          </div>
          <p class="order-item__desc">Záloha není nutná</p>
        </li>
        <li class="order-item-wrap">
          <div class="order-item">
            <div class="order-item__img">
              <picture>
                <source type="image/webp" srcset="img/order4.webp" loading="lazy">
                <img src="img/order4.jpg" alt="men" loading="lazy">
              </picture>
            </div>
            <div class="order-item__circle">4</div>
            <strong class="order-item__text order-item__text--center text-bold">Očekávejte výsledek</strong>
          </div>
          <p class="order-item__desc">Výsledek by se mohl objevit již brzy</p>
        </li>
      </ul>
    </div>
  </section>
  <section class="promo block">
    <div class="container">
      <div class="promo-content">
        <div class="promo-couple">
          <picture>
            <source media="(max-width:1023px)" srcset="
                  img/d6a236035029c6bf9aefe795c6bbacb9e17c17c7.png
                " loading="lazy">
            <source type="image/webp" srcset="img/promo-couple.webp" loading="lazy">
            <img src="img/promo-couple.png" loading="lazy" alt="couple">
          </picture>
        </div>
        <div class="promo-advantage">
          <div class="promo-text">
            <h1 class="promo__title title">Eronex Forte</h1>
            <p class="promo__subtitle text-bold">
              Vaše šance na prodloužení mládí
            </p>
          </div>
          <ul class="promo-list">
            <li class="promo-item">
              <span class="promo-item__circle"><img src="img/gender.png" loading="lazy" alt="gender"></span>
              <div class="promo-item__desc">
                <strong class="promo-item__desc-bold text-bold">Pomáhá obnovit hladinu testosteronu</strong>, zlepšuje
                zdraví mužů
              </div>
            </li>
            <li class="promo-item">
              <span class="promo-item__circle"><img src="img/gender.png" loading="lazy" alt="gender"></span>
              <div class="promo-item__desc">
                <strong class="promo-item__desc-bold text-bold">Pomáhá zvyšit erekci,</strong>
                normalizuje práci genitourinárního systému
              </div>
            </li>
            <li class="promo-item">
              <span class="promo-item__circle"><img src="img/gender.png" loading="lazy" alt="gender"></span>
              <div class="promo-item__desc">
                <strong class="promo-item__desc-bold text-bold">Pomáhá zastavit úpadek síl,</strong>
                obnovuje hladinu mužských hormonů
              </div>
            </li>
          </ul>
          <div class="promo-partners desk">
            <img src="img/partners.png" loading="lazy" alt="partners">
          </div>
          <div class="promo__product">
            <picture>
              <source type="image/webp" srcset="img/eronex-eu.webp" loading="lazy">
              <img src="img/eronex-eu.png" loading="lazy" alt="prod">
            </picture>
          </div>
        </div>
        <div class="promo-form-wrap">
          <div class="promo-form">
            <div class="form">
              <div class="form__discount">
                <?=$cms->discount;?>%
              </div>
              <div class="form__wrapper">
                <div class="form__subtitle">
                  Jenom dnes
                  <span class="date-0 form__subtitle--date" data-format="dd monthFull">19&nbsp;srpen</span>
                </div>
                <div class="form__price">
                  <div class="form__price-val">
                    <h5 class="form__price-title">Původní cena</h5>
                    <p class="form__price-before">
                      <span class="x_price_previous form__price-before_line"><?=$cms->oldpr;?></span><span
                        class="x_currency form__price-before_size"><?=$cms->currency;?></span>
                    </p>
                  </div>
                  <div class="form_before"></div>
                  <div class="form__price-val">
                    <h5 class="form__price-title form__price-title--new">
                      Nová cena
                    </h5>
                    <p class="form__price-after">
                      <span class="x_price_current"><?=$cms->price;?></span><span class="x_currency form__price-after_size"><?=$cms->currency;?></span>
                    </p>
                  </div>
                </div>
                <form class="x_order_form" action="#" method="post">
                  <?=$cms->params();?>
                  <div>
                    Například: Lukáš Aragonský
                  </div>
                  <label class="form__name">
                    <img src="img/name-icon.png" alt="image" loading="lazy">
                    <input class="input name" type="text" name="name" placeholder="Jméno" required=""
                      data-scrapbook-input-value="">
                  </label>
                  <div>
                    Například: +420 777888555
                  </div>
                  <div class="form__phone">
                    <img src="img/phone-solid.svg" alt="" loading="lazy">
                    <input class="form__input input form__input-phone" aria-label="phone" name="phone"
                      placeholder="Číslo" required="" type="tel" data-scrapbook-input-value="">
                  </div>
                  <button class="btn form-btn">
                    Objednat<br>
                    <span class="btn--small">se slevou</span>
                  </button>
                </form>
                <div class="online-block">
                  <div class="online-wrapper">
                    <div class="online-people online-1 active">
                      <img src="img/eye.png" alt="online" loading="lazy">
                      <p>
                        Nyní je online
                        <span class="text-bold online-dynamic online-dynamic-1">27</span>
                        lidí
                      </p>
                    </div>
                    <div class="online-people online-2">
                      <img src="img/eye.png" alt="online" loading="lazy">
                      <p>
                        <span class="text-bold online-dynamic online-dynamic-2">116</span>
                        objednávek za poslední hodinu
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form__left">
                Zbývá <span class="lastpack">80</span> balení
              </div>
            </div>
            <div class="form-protected">
              <div class="form-protected__img">
                <img src="img/protected.png" alt="" loading="lazy">
              </div>
              <p class="form-protected__text">Vaše data jsou chráněna!</p>
            </div>
          </div>
          <div class="promo-partners mob">
            <img src="img/partners.png" alt="partners" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="ev-footer create_rom_footer" data-background-color="white" data-color_link="#666"
      data-color_logo="orange"></div>
  </footer>
  <div class="banner" style="display: none;">
    <div class="container">
      <div class="banner__wrapper">
        <div class="banner__prod">
          <picture>
            <source media="(max-width: 639px)" srcset="
                  img/d6a236035029c6bf9aefe795c6bbacb9e17c17c7.png
                " loading="lazy">
            <source srcset="img/eronex-eu.webp" type="image/webp" loading="lazy">
            <img class="banner__image" src="img/eronex-eu.png" alt="" loading="lazy">
          </picture>
        </div>
        <div class="banner__title">
          Jenom dnes
          <span class="date-0 banner__red" data-format="dd monthFull">19&nbsp;srpen</span>
        </div>
        <div class="timer">
          <div class="timer__text">Do konce akce zbývá:</div>
          <div class="timer__num text-bold">
            <div class="hours">0</div>
            <div class="hours">0</div>
            <div class="dots">:</div>
            <div class="minutes">1</div>
            <div class="minutes">0</div>
            <div class="dots">:</div>
            <div class="seconds">4</div>
            <div class="seconds">6</div>
          </div>
        </div>
        <div class="banner__btn btn ever-popup-btn">Objednat</div>
      </div>
    </div>
  </div>
  <div class="ever-popup-build">
    <div class="my-popup" id="cloneThis">
      <div class="my-popup__wrap">
        <div class="my-popup__left">
          <h2 class="promo__title title">Eronex Forte</h2>
          <h3 class="promo__subtitle">Vaše šance na prodloužení mládí</h3>
          <div class="my-popup__pack pack">
            <picture>
              <source media="(max-width: 999px)" srcset="
                    img/d6a236035029c6bf9aefe795c6bbacb9e17c17c7.png
                  " loading="lazy">
              <source type="image/webp" srcset="img/eronex-eu.webp" loading="lazy">
              <img src="img/eronex-eu.png" alt="prod" loading="lazy">
            </picture>
          </div>
        </div>
        <div class="my-popup__right">
          <div class="popup-form-wrap">
            <div class="form">
              <div class="form__wrapper">
                <div class="form__subtitle">
                  Jenom dnes
                  <span class="date-0 form__subtitle--date" data-format="dd monthFull">19&nbsp;srpen</span>
                </div>
                <div class="form__price">
                  <div class="form__price-val">
                    <h5 class="form__price-title">Původní cena</h5>
                    <p class="form__price-before">
                      <span class="x_price_previous form__price-before_line"><?=$cms->oldpr;?></span><span
                        class="x_currency form__price-before_size"><?=$cms->currency;?></span>
                    </p>
                  </div>
                  <div class="form_before"></div>
                  <div class="form__price-val">
                    <h5 class="form__price-title form__price-title--new">
                      Nová cena
                    </h5>
                    <p class="form__price-after">
                      <span class="x_price_current"><?=$cms->price;?></span><span class="x_currency form__price-after_size"><?=$cms->currency;?></span>
                    </p>
                  </div>
                </div>
                <form class="x_order_form" action="#" method="post" id="form">
                  <?=$cms->params();?>
                  <label class="form__name">
                    <img src="img/name-icon.png" alt="image" loading="lazy">
                    <input class="input name" type="text" name="name" placeholder="Jméno" required=""
                      data-scrapbook-input-value="">
                  </label>
                  <div class="form__phone">
                    <img src="img/phone-solid.svg" alt="" loading="lazy">
                    <input class="form__input input form__input-phone" aria-label="phone" name="phone"
                      placeholder="Číslo" required="" type="tel" data-scrapbook-input-value="">
                  </div>
                  <button class="btn form-btn">
                    Objednat<br>
                    <span class="btn--small">se slevou</span>
                  </button>
                </form>
                <div class="online-block">
                  <div class="online-wrapper">
                    <div class="online-people online-1 active">
                      <img src="img/eye.png" alt="online" loading="lazy">
                      <p>
                        Nyní je online
                        <span class="text-bold online-dynamic online-dynamic-1">27</span>
                        lidí
                      </p>
                    </div>
                    <div class="online-people online-2">
                      <img src="img/eye.png" alt="online" loading="lazy">
                      <p>
                        <span class="text-bold online-dynamic online-dynamic-2">116</span>
                        objednávek za poslední hodinu
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form__left">
                Zbývá <span class="lastpack">80</span> balení
              </div>
            </div>
            <div class="form-protected">
              <div class="form-protected__img">
                <img src="img/protected.png" alt="" loading="lazy">
              </div>
              <p class="form-protected__text">Vaše data jsou chráněna!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer style="text-align: center; padding: 10px 0;">
    BILLONS LTD, 50-52 Bridge Road, Litherland, Liverpool, England, L21 6PH
    <br>
    <a href="" target="_blank" rel="noopener noreferrer">Privacy
      policy</a>
  </footer>
  <div class="feedback_v2">
    <img src="img/i-phone.png" alt="" loading="lazy">
  </div>
  <div class="popup-window">
    <div class="close-popup"></div>
    <form method="POST" action="#">
      <?=$cms->params();?>
      <label for="name2">Například: Lukáš Aragonský
      </label>
      <input id="name2" type="text" name="name" placeholder="Jméno" required="" data-scrapbook-input-value="">
      <label for="phone2">Například: +420 777888555
      </label>
      <input id="phone2" type="tel" name="phone" placeholder="Číslo" required="" data-scrapbook-input-value="">
      <button type="submit">Objednat</button>
    </form>
  </div>
  <script src="js/slick.min.js"></script>
  <script src="js/main.js"></script>

  <script>
    var cookies = (function (a) {
      if (a == "") return {};
      var b = {};
      for (var i = 0; i < a.length; ++i) {
        var p = a[i].split("=");
        if (p.length != 2) continue;
        b[p[0]] = p[1];
      }

      return b;
    })(document.cookie.split("; "));

    //для клонирования блока в попап используются следующие айдишники
    // #cloneThis - для десктопа
    // #cloneMobileThis - для мобильного (если нужно)
    //брейкпоинт для переключения попапа при необходимости дефолт значение = 1000

    // в случае, если мы не клонируем форму, а верстаем попап произвольно,
    // то делать это необходимо в контейнере с классом .ever-popup-build
    // false (показывать контейнер) / true (не показывать контейнер)

    var popupBuild = true; // false/true

    //.ever-popup-btn - класс для для открытия попапа

    //проверка кода
    //.check__field - класс для поля проверки кода
    //.check__btn - класс для кнопки провеки кода
    //.check__result - класс для контейнера с результатом проверки кода

    //таймер
    //для вывода счетчика таймера используется 3 контенера (часы, минуты, секунды)
    //.hours класс для вывода часов
    //.minutes класс для вывода минут
    //.seconds класс для вывода секунд

    function initiate(cookies) {
      var breakpoint = 1000;
      var desktop = document.querySelector("#cloneThis");
      var mobile = document.querySelector("#cloneMobileThis");

      if (popupBuild) {
        // в случае, если мы верстаем попап в контейнере .ever-popup-build, даное условие прячет его, если значение переменной popupBuild = true
        var style = document.createElement("style");
        style.innerHTML =
          ".ever-popup-build{position: fixed; opacity: 0;z-index: -1; top: 0; left: -9999px;}";
        document.querySelector("head").appendChild(style);
      }

      function addPopupStyle() {
        // добавляем стили для нашего поапа
        var cont = document.createElement("style"),
          head = document.querySelector("head");
        cont.innerHTML =
          '.ever-popup__body.ever-mobile{display:none}.ever-popup{position: fixed;top: 0;left: 0;width: 100%;height: 100%;background: rgba(0,0,0,.7);z-index: 111;display: none;overflow: auto;}.ever-popup__body{position: static;float: none;display: block;margin: 0 auto;width:auto}.ever-popup.show{display: block;align-items: center;}.ever-popup__inner{position: relative;margin: 0 auto;padding-top:35px}.ever-popup__close{width: 35px;height: 30px;position: absolute;cursor:pointer;top: 0;right: 0;z-index: 1;-webkit-transition: .3s; -moz-transition: .3s; -ms-transition: .3s; -o-transition: .3s; transition: .3s;}.ever-popup__close:after, .ever-popup__close:before {content: "";position: absolute;right: 0;top: 10px;width: 35px;height: 10px;background: #fff;transition: all 1s;}.ever-popup__close:after {-webkit-transform: rotate(-45deg);-ms-transform: rotate(-45deg);-o-transform: rotate(-45deg);transform: rotate(-45deg);}.ever-popup__close:before {-webkit-transform: rotate(45deg);-ms-transform: rotate(45deg);-o-transform: rotate(45deg);transform: rotate(45deg);}' +
          "@media screen and (min-width: " +
          breakpoint +
          "px" +
          "){" +
          ".ever-popup__body.ever-desktop{display:none}" +
          ".ever-popup__body.ever-mobile{display:block}" +
          "}";
        head.appendChild(cont);
      }
      function addMobilePopupStyle() {
        // добавляем стили для нашего поапа
        var cont = document.createElement("style"),
          head = document.querySelector("head");
        cont.innerHTML =
          "@media screen and (min-width: " +
          breakpoint +
          "px" +
          ') {.ever-popup {position: fixed;top: 0;left: 0;width: 100%;height: 100%;background: rgba(0, 0, 0, .7);z-index: 111;display: none;overflow: auto;}.ever-popup__body {position: static;float: none;display: block;margin: 0 auto;width: auto}.ever-popup.show {display: block;align-items: center;}.ever-popup__inner {position: relative;margin: 0 auto;padding-top: 35px}.ever-popup__close {width: 35px;height: 30px;position: absolute;cursor: pointer;top: 0;right: 0;z-index: 1;-webkit-transition: .3s;-moz-transition: .3s;-ms-transition: .3s;-o-transition: .3s;transition: .3s;}.ever-popup__close:after, .ever-popup__close:before {content: "";position: absolute;right: 0;top: 10px;width: 35px;height: 10px;background: #fff;transition: all 1s;}.ever-popup__close:after {-webkit-transform: rotate(-45deg);-ms-transform: rotate(-45deg);-o-transform: rotate(-45deg);transform: rotate(-45deg);}.ever-popup__close:before {-webkit-transform: rotate(45deg);-ms-transform: rotate(45deg);-o-transform: rotate(45deg);transform: rotate(45deg);}}';
        head.appendChild(cont);
      }

      function createOverlay() {
        // создаем затемненный фон для попапа и вставляем его в разметку html
        var parent = document.createElement("div"),
          parentInner = document.createElement("div"),
          closeParent = document.createElement("div");

        parent.classList.add("ever-popup");
        parentInner.classList.add("ever-popup__inner");
        closeParent.classList.add("ever-popup__close");

        parent.appendChild(parentInner);
        parentInner.appendChild(closeParent);
        document.body.appendChild(parent);
      }

      function createModalBody(breakpoint) {
        // функция определяет содержимое для попапа, клонирует его содержимое, и поещает в контейнер ever-popup__body
        var parent = document.querySelector(".ever-popup__inner");
        if (desktop) {
          var desktopClone = desktop.cloneNode(true);
          desktopClone.classList.add("ever-popup__body");
          desktopClone.removeAttribute("id");
          parent.appendChild(desktopClone);
          document.querySelector(
            ".ever-popup .ever-popup__inner"
          ).style.width =
            document.querySelector("#cloneThis").offsetWidth + "px";
        }

        if (mobile) {
          var mobileClone = mobile.cloneNode(true);
          if (desktopClone) {
            desktopClone.classList.add("ever-desktop");
          }
          mobileClone.classList.add("ever-popup__body");
          mobileClone.classList.add("ever-mobile");
          mobileClone.removeAttribute("id");
          parent.appendChild(mobileClone);
          var mobileStyles =
            ".ever-desktop{display: block}.ever-mobile{display: none}@media screen and (min-width: " +
            breakpoint +
            "px){.ever-mobile{display: block}.ever-desktop{display: none;}}";

          var mobileStylesContainer = document.createElement("style");
          mobileStylesContainer.innerHTML = mobileStyles;
          document.querySelector("head").appendChild(mobileStylesContainer);
          document.querySelector(
            ".ever-popup .ever-popup__inner"
          ).style.width =
            document.querySelector("#cloneMobileThis").offsetWidth + "px";
        }
      }

      function modalPosition(screenHeight) {
        //расчет ширины и вывод ее в html, функция вызывается при загрузке страницы, а так же при ресайзе
        var container = document.querySelector(
          ".ever-popup  .ever-popup__inner"
        );
        if (container) {
          var desktop = document.querySelector("#cloneThis"),
            mobile = document.querySelector("#cloneMobileThis");

          if (desktop) {
            if (window.innerWidth >= breakpoint) {
              checkPosition(desktop, container, screenHeight);
              container.style.width = desktop.offsetWidth + "px";
            }
            if (!mobile) {
              checkPosition(desktop, container, screenHeight);
              container.style.width = desktop.offsetWidth + "px";
            }
          }
          if (mobile) {
            if (window.innerWidth <= breakpoint) {
              checkPosition(mobile, container, screenHeight);
              container.style.width = mobile.offsetWidth + "px";
            }
          }
        }
      }

      function checkPosition(selector, container, screenHeight) {
        //позиционирование попапа по вертикали
        var cont = selector,
          contHeight = cont.offsetHeight;

        if (contHeight > screenHeight) {
          container.style.margin = "40px auto";
        } else {
          var top = (screenHeight - contHeight) / 2;
          container.style.margin = top + "px auto 20px";
        }
      }

      function showPopup() {
        //функция для показа попапа
        var popup = document.querySelector(".ever-popup");
        popup.classList.add("show");
      }

      function hidePopup() {
        //функция для скрытия попапа
        var popup = document.querySelector(".ever-popup");
        popup.classList.remove("show");
      }

      function notHide(e) {
        //функция для прерывания выполнения сценария по клику
        e.stopPropagation();
      }

      function checkCode(event) {
        // проверка кода подлинности
        event.preventDefault();

        var code = document.querySelector(".check__field").value,
          msg = document.querySelector(".check__result");

        if (code.length === 15) {
          msg.innerHTML = window.codeCorrect;
        } else if (code.length === 0) {
          msg.innerHTML = window.codeEmpty;
        } else {
          msg.innerHTML = window.codeInvalid;
        }
      }
      if (cookies["popup_mouseout_enabled"] == "true") {
        var mouseOutCount = 0;
        document.body.addEventListener("mouseleave", function (event) {
          //событие на увод мышки со страницы. если мышка уходит за верхнюю границу документа, вызывается попап
          var e = event || window.event;
          e = e.clientY;
          var popup = document.querySelector(".ever-popup");

          if (popup && e < 10 && mouseOutCount === 0) {
            popup.classList.add("show");
            mouseOutCount++;
          }
        });
      }

      function init() {
        var desktopPopup = document.querySelector("#cloneThis"),
          mobilePopup = document.querySelector("#cloneMobileThis");
        var h = document.querySelector(".hours"),
          m = document.querySelector(".minutes"),
          s = document.querySelector(".seconds");

        if (h && m && s) {
          // если все значения (часы/минуты/секунды) сущесвтуют, тогда срабатывает таймер
          initializeTimer();
        }
      }

      init();

      window.addEventListener("resize", function () {
        //при ресайзе пересчитываем позиционирование модального окна
        modalPosition(window.innerHeight);
      });

      function initializeTimer() {

        if (!localStorage.getItem("ever-timer")) {
          var time = {
            hours: 0,
            minutes: 27,
            seconds: 0,
          };

          time = time.hours * 3600 + time.minutes * 60 + time.seconds;

          localStorage.setItem("time", time);
          localStorage.setItem("ever-timer", true);
        }

        timerSettings();
      }

      function timerSettings() {
        var time = localStorage.getItem("time"),
          different = document.querySelector(".timer-different"),
          hours = parseInt(time / 3600, 10),
          minutes = parseInt((time - hours * 3600) / 60, 10),
          seconds = parseInt(time % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : "" + minutes;
        seconds = seconds < 10 ? "0" + seconds : "" + seconds;
        hours = hours < 10 ? "0" + hours : "" + hours;

        var hoursHTML = document.getElementsByClassName("hours");
        var minutesHTML = document.getElementsByClassName("minutes");
        var secondsHTML = document.getElementsByClassName("seconds");

        if (--time < 0) {
          localStorage.removeItem("ever-timer");
          return;
        }
        if (different) {
          seconds = seconds.split("");
          minutes = minutes.split("");
          hours = hours.split("");

          diFilling(hoursHTML, hours);
          diFilling(minutesHTML, minutes);
          diFilling(secondsHTML, seconds);
        } else {
          filling(hoursHTML, hours);
          filling(minutesHTML, minutes);
          filling(secondsHTML, seconds);
        }

        localStorage.setItem("time", time);
        setTimeout(timerSettings, 1000);
      }

      function filling(obj, value) {
        for (var i = 0; i < obj.length; i++) {
          obj[i].innerHTML = value;
        }
      }

      function diFilling(obj, value) {
        for (var i = 0; i < obj.length; i++) {
          obj[i].innerHTML = value[i % 2];
        }
      }
    }

    document.addEventListener("DOMContentLoaded", function () {
      var modals = document.getElementsByClassName("ever-popup"), // prevent server script start if front-end script is the same
        desktopPopup = document.querySelector("#cloneThis"),
        mobilePopup = document.querySelector("#cloneMobileThis");

      if (desktopPopup || mobilePopup) {
        if (!modals.length) {
          initiate(cookies);
        }
      }
    });
  </script>

  <!-- CZ -->
  <script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>
  <script>
    $("input[type=tel]").mask("+420 999 999 999");
  </script>

  <!-- Колбек скрипт -->
  <script>
    $(document).ready(function () {
      $(".feedback_v2").click(function () {
        $(".popup-window").show();
      });
      $(".close-popup").click(function () {
        $(".popup-window").hide();
      });
    });
  </script>
  <!-- Колбек скрипт -->

  <?php $cms->footer(); ?>
</body>

</html>