if (document.readyState === "complete") {
  resolve();
} else {
  window.addEventListener("load", resolve);
}
function resolve() {
  document.body.removeAttribute("unresolved");

  $(".sidebar .sideBarWidget .sBarWidgetTitle").on("click", function (e) {
    $(this).parent().toggleClass("active");
  });
  $(".footer .fwidget .widgettitle").on("click", function (e) {
    $(this).parent().toggleClass("active");
  });
  $(".schema-faq-question").append(
    '<i class="fas fa-plus"></i><i class="fas fa-minus"></i>'
  );
  $(".schema-faq-question").on("click", function (e) {
    $(this).parent().toggleClass("active");
  });

  $("li.menu-item-has-children").on("click", function (e) {
    $("ul.sub-menu").toggleClass("close");
  });
  //
  var swiper = new Swiper(".first", {
    slidesPerView: 1,
    spaceBetween: 50,
    grabCursor: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: true,
    },
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
    breakpoints: {
      500: {
        slidesPerView: 2,
        spaceBetween: 50,
      },
      1000: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1500: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
  });
  //
  var swiper2 = new Swiper(".second", {
    slidesPerView: 1,
    spaceBetween: 20,
    grabCursor: true,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 3500,
      disableOnInteraction: true,
    },
    breakpoints: {
      500: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      1000: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
      1500: {
        slidesPerView: 5,
        spaceBetween: 20,
      },
    },
  });
  //
  var swiper3 = new Swiper(".third", {
    slidesPerView: 1,
    spaceBetween: 10,
    grabCursor: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 3500,
      disableOnInteraction: true,
    },
    breakpoints: {
      500: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      1000: {
        slidesPerView: 3,
        spaceBetween: 50,
      },
    },
  });

  /* 
  ==========================
  Navigation 
  ==========================
  */

  const navigat = () => {
    const burger = document.querySelector("nav .mobilenav");
    const nav = document.querySelector("div#mobileMenu");

    burger.addEventListener("click", () => {
      nav.classList.toggle("nav-active");
      burger.classList.toggle("toggle");
    });
  };
  navigat();


  /* 
  ==========================
  GSAP & SCROLLMAGIC ANIMATIONS
  ==========================
  */

  //init scollmagic
  var controller = new ScrollMagic.Controller();

  //loop through each .project element
  $(".magic").each(function () {
    //console.log(this); //allow us to see what inside this, so we can target

    //build the scene
    var ourScene = new ScrollMagic.Scene({
      triggerElement: this.children[0],
      triggerHook: 0.8,
    })
      .setClassToggle(this, "fade-in") //add fade-in class to project01
      /*.addIndicators({
        name: "fade scene",
        colorTrigger: "black",
        colorStart: "#75C695",
      })*/ .addTo(
        controller
      );
  });

  // TweenMax.staggerFrom(".bicycle", 5, {
  //   opacity: 0,
  //   left: -50,
  //   scale: 1,
  //   ease: Elastic.easeOut,
  // });

  TweenMax.from(".content", 1, {
    opacity: 0,
    y: 50,
    delay: 0.5,
  });

  TweenMax.from("#post-404", 1, {
    opacity: 0,
    y: 30,
  });

  TweenMax.from("span.giantText", 1, {
    opacity: 0,
    x: 50,
    delay: 0.7,
  });

  TweenMax.from("h1.giantHeading", 1, {
    opacity: 0,
    x: -50,
  });

  TweenMax.from(".giantHeadingSmall", 1, {
    opacity: 0,
    x: -50,
  });

  TweenMax.from(".giantHeadingBig", 1, {
    opacity: 0,
    x: -50,
    delay: 0.4,
  });

  TweenMax.from(".txt-center", 1, {
    opacity: 0,
    x: -50,
    delay: 0.6,
  });

  // Accordian
  var acc = document.getElementsByClassName("accordion");
  var i;
  // var contentArea = document.getElementsByClassName("panel");

  // $(".accordion").click(function () {
  //   $(".panel").hide();
  //   $(this).next().show();
  // });

  // Code below is a toggle tabs but cant open one and close other
  for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function () {
      this.classList.toggle("accordActive");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    };
  }

  // End Accordian

  // Partners Accordian
  var acc = document.getElementsByClassName("Partaccordion");
  var x;

  for (x = 0; x < acc.length; x++) {
    acc[x].onclick = function () {
      this.classList.toggle("partAccordActive");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    };
  }

  // End Accordian
}
// Put all js above this bracket if need document.ready

/* 
  ==========================
  Service Tabs 
  ==========================
  */
function openTab(evt, tab) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tab).style.display = "block";
  evt.currentTarget.className += " active";
}
