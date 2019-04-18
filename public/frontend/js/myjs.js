

$(document).ready(function(){
$(".owl-carousel").owlCarousel({
  items:4,
  margin:10,
  nav:true,
  loop:true,
  autoplay:true,
  autoplayHoverPause:true,
responsiveClass:true,
responsive:{
        0:{
            items:1,
            nav:true

        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
});

});
