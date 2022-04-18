const toggle=document.getElementById('toggle');


toggle.addEventListener('click',()=>{
  document.body.classList.toggle('show-nav')
})

const swiper = new Swiper('.swiper', {
  slidesPerView: 1,
  spaceBetween: 10,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  breakpoints: {
    500: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    800: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    900: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
  // pagination: {
  //   el: '.swiper-pagination',
  //   clickable: true,
  // },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

const tlIntrol = gsap.timeline({
  scrollTrigger: {
    trigger: '.showcase__main',
    start: '0%',
    end: '100%',
  },
});

tlIntrol.fromTo(
  '.clc-1',
  { scale: 0 },
  { scale: 1, ease: 'elastic.out(1,0.4)', duration: 0.4 }
);
tlIntrol.fromTo(
  '.clc-2',
  { scale: 0 },
  { scale: 1, ease: 'elastic.out(1,0.4)', duration: 0.4 }
);
tlIntrol.fromTo(
  '.clc-3',
  { scale: 0 },
  { scale: 1, ease: 'elastic.out(1,0.4)', duration: 0.4 }
);
tlIntrol.fromTo(
  '.clc-4',
  { scale: 0 },
  { scale: 1, ease: 'elastic.out(1,0.4)', duration: 0.4 }
);
tlIntrol.fromTo(
  '.clc-5',
  { scale: 0 },
  { scale: 1, ease: 'elastic.out(1,0.4)', duration: 0.4 }
);

// gsap.to(".b-1", {
//   duration: 4,
//   motionPath: {
//     path: "#home-circle1",
//     align: "#home-circle1",
//     alignOrigin: [0.5, 0.5],
//     autoRotate: true
//   },
//   scale: 1.5,
//   yoyo: true,
//   repeat: -1,
//   repeatDelay: 0.75,
//   ease: "power3.inOut"
// });



lightbox.option({

  alwaysShowNavOnTouchDevices	:true
})

