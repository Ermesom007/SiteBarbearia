(function($){

  // DEFINE BACKGROUND DO SLIDE
  (function($){
    $('.slider_item').each(function(){
      var sliderBg = $(this).data('slider-bg');
      $(this).css({'background-image': 'url('+sliderBg+')'});
    });
  }(jQuery));


// INICIALIZAÇÃO AUTOMÁTICA DO SLIDE
    var sliderAuto = setInterval(nextSlider, 3000);

    $('.slider_content, .slider-next, .slider-prev').hover(function(){
      clearInterval(sliderAuto);
    },function(){
      sliderAuto = setInterval(nextSlider, 3000);     
    });

    