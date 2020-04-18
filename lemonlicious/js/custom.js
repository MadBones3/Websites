$(document).ready(function(){

  offset = $(".btn").offset();
  
//   When mouse enters the btn
  $(".btn").on("mouseenter",function(e){
    mouseX = e.pageX;
    mouseY = e.pageY;
    
    relMouseX = mouseX - offset.left;
    relMouseY = mouseY - offset.top;
    
    $('.fill').css({left:relMouseX,top:relMouseY});
    $('.fill').animate({height:'400px',width:'600px'},500);
  });
  
//   When mouse leaves the btn
   $(".btn").on("mouseleave",function(e){
      mouseX = e.pageX;
      mouseY = e.pageY;

      relMouseX = mouseX - offset.left;
      relMouseY = mouseY - offset.top;
     
      $('.fill').animate({height:'0px', width:'0px',left:relMouseX,top:relMouseY},400);
    });
  
});

/* =========== Navigation ================== */
$(document).ready(function(){
const navSlide = () => {
  const burger = document.querySelector("nav .burger");
  const nav = document.querySelector("nav #acrb-menu ul");
  const navLinks = document.querySelectorAll("nav #acrb-menu ul li");
  
  
    burger.addEventListener("click", () => {
      //   Toggle nav
      nav.classList.toggle("nav-active");
      
      //   Animation Links
      navLinks.forEach((link, index)=>{
        if(link.style.animation){
            link.style.animation = '';
            } else {
              link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
            }
        // console.log(index / 7);
      });
      //Burger Animation
      burger.classList.toggle('toggle');  
    });
  }
  navSlide();

/* =========== END Navigation ================== */

/* =========== Initialize Swiper ================== */

  var swiper = new Swiper ('.homeswipe', {
  grabCursor: true,
  loop: true,
  autoplay: {
      delay: 5500,
      disableOnInteraction: true,
  },
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
  });

  // testimonial
  var swiper1 = new Swiper ('.testswip', {
    grabCursor: true,
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: {
      delay: 5500,
      disableOnInteraction: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      900: {
        slidesPerView: 2,
        spaceBetween: 50,
      },
    }
  });

  // Steps
  var swiper3 = new Swiper ('.stepswip', {
    grabCursor: true,
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      900: {
        slidesPerView: 4,
        spaceBetween: 10
      },
    }
  });

  /* =========== END Initialize Swiper ================== */

  /* ===========  AOS ================== */

  AOS.init({
    // disable: function() {
    //   var maxWidth = 600;
    //   return window.innerWidth < maxWidth;
    // }
  });

  /* =========== END AOS ================== */

  /* ===========  background color change - our products ================== */

  $(function () {
    'use strict';
    var view = $(window).height();
    
    $('.part')
      .height(view)
      .scrollie({
        scrollOffset: -200,
        scrollingInView: function (elem){
          var bgColor = elem.data('background');
          $('#products').css('background', bgColor);
        }
      })
    });

  /* =========== END background color change - our products ================== */
});