if (document.readyState === "complete") {
  resolve();
} else {
  window.addEventListener("load", resolve);
}
function resolve() {
  document.body.removeAttribute("unresolved");

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
  });

  //scroll header
  const header = document.querySelector("header");

  window.addEventListener("scroll", function () {
    header.classList.toggle("sticky", window.scrollY > 0);
  });

  /* =========== END Navigation ================== */

  /* =========== SWIPER ================== */

  var swiper1 = new Swiper(".home", {
    slidesPerView: 1,
    spaceBetween: 5,
    loop: !1,
    autoplay: {
      delay: 5500,
      disableOnInteraction: !0
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  var swiper2 = new Swiper(".cards", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: !1,
    autoplay: {
      delay: 5500,
      disableOnInteraction: !0
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      500: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      1000: {
        slidesPerView: 2,
        spaceBetween: 80,
      },
      1500: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });
  var swiper3 = new Swiper(".tworow", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: !0,
    autoplay: {
      delay: 5500,
      disableOnInteraction: !0
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      500: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      1000: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
      // 1500: {
      //   slidesPerView: 3,
      //   spaceBetween: 10,
      // },
    },
  });
  var swiper4 = new Swiper(".acc-env", {
    slidesPerView: 1,
    spaceBetween: 5,
    loop: !1,
    autoplay: {
      delay: 5500,
      disableOnInteraction: !0
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  var swiper5 = new Swiper(".acc-corp", {
    slidesPerView: 1,
    spaceBetween: 5,
    loop: !1,
    autoplay: {
      delay: 5500,
      disableOnInteraction: !0
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


  /* =========== END SWIPER ================== */

  /* 
    ==========================
    GSAP & SCROLLMAGIC ANIMATIONS
    ==========================
    */

  //init scollmagic
  var controller = new ScrollMagic.Controller();

  //loop through each .magic element
  $(".magic").each(function () {

    //build the scene
    var ourScene = new ScrollMagic.Scene({
      triggerElement: this.children[0],
      triggerHook: 0.8,
    })
      .setClassToggle(this, "fade-in") //add fade-in class to magic
      // .addIndicators({
      //   name: "fade scene",
      //   colorTrigger: "red",
      //   colorStart: "#75C695",
      // })
      .addTo(
        controller
      );
  });

  //loop through each .magic-appear element
  $(".magic-appear").each(function () {

    //build the scene
    var appearScene = new ScrollMagic.Scene({
      triggerElement: this.children[0],
      triggerHook: 0.8,
    })
      .setClassToggle(this, "fade-appear") //add fade-in class to magic-appear
      // .addIndicators({
      //   name: "appear scene",
      //   colorStart: "#75C695",
      // })
      .addTo(
        controller
      );
  });

  //loop through each .magic-left element
  $(".magic-left").each(function () {

    //build the scene
    var leftScene = new ScrollMagic.Scene({
      triggerElement: this.children[0],
      triggerHook: 0.8,
    })
      .setClassToggle(this, "fade-in-left") //add fade-in class to magic-left
      // .addIndicators({
      //   name: "Left fade",
      //   colorStart: "#75C695",
      // })
      .addTo(
        controller
      );
  });

  //loop through each .magic-right element
  $(".magic-right").each(function () {

    //build the scene
    var rightScene = new ScrollMagic.Scene({
      triggerElement: this.children[0],
      triggerHook: 0.8,
    })
      .setClassToggle(this, "fade-in-right") //add fade-in class to magic-right
      // .addIndicators({
      //   name: "Right fade",
      //   colorStart: "#75C695",
      // })
      .addTo(
        controller
      );
  });

  TweenMax.from(".homeheroh1", 1, {
    opacity: 0,
    x: -50,
    ease: Expo.out,
  });
  TweenMax.from(".homeherobtn", 1, {
    opacity: 0,
    x: -50,
    delay: 0.5,
    ease: Expo.out,
  });

  TweenMax.from(".w3-button", 1, {
    opacity: 0,
    ease: Ease.in,
    stagger: 0.2,
  });

  /* =========== END GSAP & SCROLLMAGIC ANIMATIONS ================== */



}
