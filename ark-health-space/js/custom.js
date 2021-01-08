$(document).ready(function () {
    //scroll header
    const header = document.querySelector("header");

    window.addEventListener("scroll", function () {
        header.classList.toggle("sticky", window.scrollY > 0);
    });

    /* =========== Navigation ================== */
    const navSlide = () => {
        const burger = document.querySelector(".headtop .burger");
        const nav = document.querySelector(".headtop nav");

        burger.addEventListener("click", () => {
            //   Toggle nav
            nav.classList.toggle("active");

            //Burger Animation
            burger.classList.toggle("toggle");
        });
    };
    navSlide();

    //Dropdown mobile nav
    const parent = document.querySelector('li.menu-item-has-children');
    const child = document.querySelector('ul.sub-menu');

    parent.addEventListener('click', () => {
        child.classList.toggle('open-me');
    })
    /* =========== Swiper ================== */
    var swiper = new Swiper('.reviews', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    /* =========== FAQ Accordion ================== */
    $(function () {
        var accordian = function (el, multiple) {
            this.el = el || {};
            this.multiple = multiple || false;
            var links = this.el.find('.drop-title');
            links.on('click', { el: this.el, multiple: this.multiple }, this.dropdown)
        }

        accordian.prototype.dropdown = function (e) {
            var $el = e.data.el;
            $this = $(this),
                $next = $this.next();
            $next.slideToggle();
            $this.parent().toggleClass('open');
            if (!e.data.multiple) {
                $el.find('.menu-text').not($next).slideUp().parent().removeClass('open');
            };
        }
        var Accordian = new accordian($('.accordian-list'), false);
    });

    /* =========== Scrollmagic ================== */
    var n = new ScrollMagic.Controller();

    $(".magic").each(function () {
        new ScrollMagic.Scene({
            triggerElement: this.children[0],
            triggerHook: 0.8
        })
            .setClassToggle(this, "fade-in")
            .addTo(n);
    }),
        $(".magic-appear").each(function () {
            new ScrollMagic.Scene({
                triggerElement: this.children[0],
                triggerHook: 0.8
            })
                .setClassToggle(this, "fade-appear")
                .addTo(n);
        }),
        $(".magic-left").each(function () {
            new ScrollMagic.Scene({
                triggerElement: this.children[0],
                triggerHook: 0.8
            })
                .setClassToggle(this, "fade-in-left")
                .addTo(n);
        }),
        $(".magic-right").each(function () {
            new ScrollMagic.Scene({
                triggerElement: this.children[0],
                triggerHook: 0.8
            })
                .setClassToggle(this, "fade-in-right")
                .addTo(n);
        }),
        $(".magic-down").each(function () {
            new ScrollMagic.Scene({
                triggerElement: this.children[0],
                triggerHook: 0.8
            })
                .setClassToggle(this, "fade-in-down")
                .addTo(n);
        }),
        $(".magic-zoom").each(function () {
            new ScrollMagic.Scene({
                triggerElement: this.children[0],
                triggerHook: 0.8
            })
                .setClassToggle(this, "zoom-in")
                .addTo(n);
        })
    // TweenMax.from(".nobanner", 1, { opacity: 0, y: -50, ease: Expo.out, duration: 2 }),
    //     TweenMax.from(".hbanner-text", 1, {
    //         opacity: 0,
    //         scale: 0.7,
    //         ease: Expo.out
    //     })

});