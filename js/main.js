(function () {
  // Initialize Swiper
  var swiper = new Swiper('.swiper', {
    effect: 'coverflow',
    slidesPerView: 2,
    spaceBetween: 250,
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    loopedSlides: 5,
    mousewheel: true,
    freeMode: {
      enabled: true,
      sticky: true,
    },
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 300,
      modifier: 1,
      slideShadows: false,
    },
    pagination: {
      el: '.swiper-pagination',
    },
  });

  // Function to play video in current slide
  function playVideoInCurrentSlide() {
    var currentSlide = swiper.slides[swiper.activeIndex];
    var currentSlideVideo = currentSlide.querySelector('video');
    currentSlideVideo.play();
  }

  // Function to pause all videos except in current slide
  function pauseAllVideosExceptCurrent() {
    var currentSlide = swiper.slides[swiper.activeIndex];
    var currentSlideVideo = currentSlide.querySelector('video');

    swiper.slides.forEach(function (slide) {
      var video = slide.querySelector('video');
      if (video !== currentSlideVideo) {
        video.pause();
      }
    });
  }

  // Event listener for slide change
  swiper.on('slideChange', function () {
    console.log('slide changed');
    pauseAllVideosExceptCurrent();
    playVideoInCurrentSlide();
  });

  // Start video in initial slide
  playVideoInCurrentSlide();
})();
