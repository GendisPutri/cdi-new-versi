import './bootstrap';
$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      dots:false,
      autoplay:true,
      autoplayTimeout:2000,
      responsive:{
        0:{ items:4 },
        600:{ items:8 },
        1000:{ items:8 }
      }
    });
  });

    $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 20,
      responsiveClass: true,
      nav: true,
      dots: true,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      responsive: {
        0: { items: 1 },
        640: { items: 2 },
        1024: { items: 3 },
        1280: { items: 4 }
      }
    })
});