$('.reviews__comments').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    
  });

  $('.burger-menu').on('click', function() {
    $(this).toggleClass("burger-menu--opened");
    $('.services__menu').toggleClass("services__menu--closed");
    $('.services__inner').toggleClass("services__inner-row");
    $(this).toggleClass("burger-menu--closed");
    $('.services__menu').toggleClass("services__menu--opened");
    $('.services__inner').toggleClass("services__inner-column");
  });


  $('.samples__inner-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          arrows: false
        }
      }
    ]
  });