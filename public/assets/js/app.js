let countDownDate = new Date("Mayo 06, 2023 10:00:00").getTime();


let counter = setInterval(() => {
  // Get Date Now
  let dateNow = new Date().getTime();

  // Find The Date Difference Between Now And Countdown Date
  let dateDiff = countDownDate - dateNow;

  // Get Time Units
  // let days = Math.floor(dateDiff / 1000 / 60 / 60 / 24);
  let days = Math.floor(dateDiff / (1000 * 60 * 60 * 24));
  let hours = Math.floor((dateDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  let minutes = Math.floor((dateDiff % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((dateDiff % (1000 * 60)) / 1000);

  document.querySelector("#day").innerHTML = days < 10 ? `0${days}` : days;
  document.querySelector("#hour").innerHTML = hours < 10 ? `0${hours}` : hours;
  document.querySelector("#minute").innerHTML = minutes < 10 ? `0${minutes}` : minutes;
  document.querySelector("#second").innerHTML = seconds < 10 ? `0${seconds}` : seconds;

  if (dateDiff < 0) {
    clearInterval(counter);
  }
}, 1000);




///////////////////////////////////////
/* swiper*/
///////////////////////////////////////

var swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    autoplay: true,
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 3,
        slideShadows: true
    },
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    breakpoints: {
        640: {
            slidesPerView: 2
        },
        768: {
            slidesPerView: 1
        },
        1024: {
            slidesPerView: 2
        },
        1560: {
            slidesPerView: 3
        }
    }
});

///////////////////////////////////////
/* fqncybox*/
///////////////////////////////////////

Fancybox.bind('[data-fancybox]', {
    //
});
