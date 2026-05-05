!(function (a) {
    "use strict";
    var e = a(window);
    function o() {
        var o, t, n, s, i;
        (o = a(".full-screen")),
            (t = e.height()),
            o.css("min-height", t),
            (n = a("header").height()),
            (s = a(".screen-height")),
            (i = e.height() - n),
            s.css("height", i);
    }
    a("#preloader").fadeOut("normall", function () {
        a(this).remove();
    }),
        e.on("scroll", function () {
            var o = e.scrollTop(),
                t = a(".navbar-brand img"),
                n = a(".navbar-brand.logodefault img");
            o <= 175
             ? (
            a("header").removeClass("scrollHeader").addClass("fixedHeader"),
            t.attr("src", window.siteLogos.inner),
            n.attr("src", window.siteLogos.main)
        )
        : (
            a("header").removeClass("fixedHeader").addClass("scrollHeader"),
            t.attr("src", window.siteLogos.main),
            n.attr("src", window.siteLogos.main)
        );
        }),
        e.on("scroll", function () {
            a(this).scrollTop() > 500 ? a(".scroll-to-top").fadeIn(400) : a(".scroll-to-top").fadeOut(400);
        }),
        a(".scroll-to-top").on("click", function (e) {
            e.preventDefault(), a("html, body").animate({ scrollTop: 0 }, 600);
        }),
        a(".parallax,.bg-img").each(function (e) {
            a(this).attr("data-background") &&
                a(this).css("background-image", "url(" + a(this).data("background") + ")");
        }),
        new WOW({ boxClass: "wow", animateClass: "animated", offset: 0, mobile: !1, live: !0 }).init(),
        a(".story-video").magnificPopup({ delegate: ".video", type: "iframe" }),
        a(".source-modal").magnificPopup({ type: "inline", mainClass: "mfp-fade", removalDelay: 160 }),
        e.resize(function (a) {
            setTimeout(function () {
                o();
            }, 500),
                a.preventDefault();
        }),
        0 !== a(".copy-clipboard").length &&
            (new ClipboardJS(".copy-clipboard"),
            a(".copy-clipboard").on("click", function () {
                var e = a(this);
                e.text(),
                    e.text("Copied"),
                    setTimeout(function () {
                        e.text("Copy");
                    }, 2e3);
            })),
        a(".vision-wrapper").on("mouseenter", function (e) {
            var o = a(this).data("background");
            a(".vision-changebg").animate({ opacity: 0.9 }, 50, function () {
                a(".vision-changebg").css("background-image", "url(" + o + ")");
            }),
                a(".vision-changebg").delay(50).animate({ opacity: 0.9 }, 50);
        }),
        o(),
        a(document).ready(function () {
            a(".testimonial-carousel3").owlCarousel({
                loop: !0,
                responsiveClass: !0,
                autoplay: !0,
                autoplayTimeout: 5e3,
                smartSpeed: 1500,
                nav: !1,
                dots: !1,
                thumbs: !1,
                thumbsPrerendered: !1,
                center: !1,
                margin: 50,
                items: 1,
            }),
                a(".vision-changebg").owlCarousel({
                    loop: !0,
                    responsiveClass: !0,
                    center: !1,
                    nav: !0,
                    navText: [
                        "<span class='fa-solid fa-arrow-left-long'></span>",
                        "<span class='fa-solid fa-arrow-right-long'></span>",
                    ],
                    dots: !1,
                    autoplay: !1,
                    autoplayTimeout: 5e3,
                    margin: 0,
                    smartSpeed: 900,
                    responsive: { 0: { items: 1 }, 576: { items: 2 }, 992: { items: 4, loop: !1, nav: !1 } },
                }),
                a(".portfolio-block").owlCarousel({
                    loop: !0,
                    responsiveClass: !0,
                    autoplay: !0,
                    autoplayTimeout: 5e3,
                    smartSpeed: 1500,
                    nav: !0,
                    navText: [
                        "<span class='fa-solid fa-arrow-left-long'></span>",
                        "<span class='fa-solid fa-arrow-right-long'></span>",
                    ],
                    dots: !1,
                    center: !0,
                    margin: 30,
                    responsive: {
                        0: { items: 1, margin: 0, nav: !1 },
                        576: { items: 1, margin: 0, nav: !1 },
                        768: { items: 2 },
                        992: { items: 3 },
                        1400: { items: 2 },
                    },
                }),
                a(".client-carousel").owlCarousel({
                    loop: !0,
                    responsiveClass: !0,
                    autoplay: !0,
                    autoplayTimeout: 5e3,
                    smartSpeed: 1500,
                    nav: !1,
                    dots: !1,
                    center: !1,
                    margin: 30,
                    responsive: {
                        0: { items: 1 },
                        481: { items: 2 },
                        768: { items: 3 },
                        992: { items: 4 },
                        1200: { items: 6 },
                    },
                }),
                a(".slider-fade1").owlCarousel({
                    items: 1,
                    loop: !0,
                    dots: !0,
                    margin: 0,
                    nav: !1,
                    navText: [
                        "<span class='fas fa-chevron-left'></span>",
                        "<span class='fas fa-chevron-right'></span>",
                    ],
                    autoplay: !0,
                    smartSpeed: 1500,
                    mouseDrag: !1,
                    animateIn: "fadeIn",
                    animateOut: "fadeOut",
                }),
                a(".owl-carousel").owlCarousel({
                    items: 1,
                    loop: !0,
                    dots: !1,
                    margin: 0,
                    autoplay: !0,
                    smartSpeed: 500,
                }),
                a(".slider-fade1").on("changed.owl.carousel", function (e) {
                    var o = e.item.index - 2;
                    a("span").removeClass("animated fadeInUp"),
                        a("h1").removeClass("animated fadeInUp"),
                        a("p").removeClass("animated fadeInUp"),
                        a("a").removeClass("animated fadeInUp"),
                        a(".owl-item").not(".cloned").eq(o).find("span").addClass("animated fadeInUp"),
                        a(".owl-item").not(".cloned").eq(o).find("h1").addClass("animated fadeInUp"),
                        a(".owl-item").not(".cloned").eq(o).find("p").addClass("animated fadeInUp"),
                        a(".owl-item").not(".cloned").eq(o).find("a").addClass("animated fadeInUp");
                }),
                a(".countup").counterUp({ delay: 25, time: 2e3 }),
                a(".countdown").countdown({ date: "01 Sep 2026 00:01:00", format: "on" }),
                a(".current-year").text(new Date().getFullYear());
        }),
        a(document).ready(function () {
            a(".wlt-btn, .wlt-overlay-bg").on("click", function () {
                a(".wlt-overlay-bg").hasClass("active")
                    ? a(".wlt-overlay-bg").animate({ opacity: "0" }, 500, function () {
                          a(".wlt-overlay-bg").removeClass("active").hide();
                      })
                    : a(".wlt-overlay-bg")
                          .addClass("active")
                          .show()
                          .animate({ opacity: "1" }, 500, function () {}),
                    a(".wlt-sidebar-main").toggleClass("active");
            }),
                a(".wlt-sidebar-inner").scrollbar();
        }),
        e.on("load", function () {
            var e = a(".portfolio-gallery-isotope").isotope({});
            a(".filtering").on("click", "span", function () {
                var o = a(this).attr("data-filter");
                e.isotope({ filter: o });
            }),
                a(".filtering").on("click", "span", function () {
                    a(this).addClass("active").siblings().removeClass("active");
                }),
                a(".portfolio-gallery,.portfolio-gallery-isotope").lightGallery(),
                a(".portfolio-link").on("click", (a) => {
                    a.stopPropagation();
                });
        });
})(jQuery);
