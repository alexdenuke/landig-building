
let excursionBtn = document.querySelector('.excursion__button');
let excursion = document.querySelector('.popup-excursion');
let excursionKrest = document.querySelector('.popup-excursion__krest');

excursionBtn.addEventListener('click', () => {
  excursion.classList.add('active');
  document.body.classList.add("lock");
})


excursionKrest.addEventListener('click', () => {
  excursion.classList.remove('active');
  document.body.classList.remove("lock");
})


const slider = document.querySelector('.swiper-main');
const slider2 = document.querySelector('.swiper-pop');
const sliderpop = document.querySelector('.popup-swiper');
const slide = document.querySelectorAll('.swiper-slide-img');
const krest = document.querySelector('.krest');



slide.forEach((item) => {
  item.addEventListener('click', () => {
    sliderpop.classList.add('active');
    document.body.classList.add("lock");
  })
})

krest.addEventListener('click', () => {
  sliderpop.classList.remove('active');
  // slidePop.classList.remove('active');
  document.body.classList.remove("lock");
})
new Swiper(slider, {
  direction: 'horizontal',
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'fraction',
    clickable: true,
  },
  slidesPerGroup: 1,
  slidesPerView: 1,
  grabCursor: true,
  breakpoints: {
    801: {
      slidesPerView: 3,
      slidesPerGroup: 3,
    },
    451: {
      slidesPerView: 2,
      slidesPerGroup: 2,
    }
  }
});

new Swiper(slider2, {
  direction: 'horizontal',
  loop: true,
  // centeredSlidesBounds: true,
  navigation: {
    nextEl: '.swiper-button-next2',
    prevEl: '.swiper-button-prev2',
  },
  // pagination: {
  //   el: '.swiper-pagination',
  //   type: 'fraction',
  //   clickable: true,
  // },
  slidesPerView: 1,
  grabCursor: true,
});






