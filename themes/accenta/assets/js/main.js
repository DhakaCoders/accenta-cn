(function($) {

/*Google Map Style*/
var CustomMapStyles  = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]

var windowWidth = $(window).width();
$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});
	
  
//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};
if($('.mHc1').length){
  $('.mHc1').matchHeight();
};
if($('.mHc2').length){
  $('.mHc2').matchHeight();
};
if($('.mHc3').length){
  $('.mHc3').matchHeight();
};
if($('.mHc4').length){
  $('.mHc4').matchHeight();
};
if($('.mHc5').length){
  $('.mHc5').matchHeight();
};


//$('[data-toggle="tooltip"]').tooltip();

//banner animation
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $('.page-banner-bg').css({
    '-webkit-transform' : 'scale(' + (1 + scroll/2000) + ')',
    '-moz-transform'    : 'scale(' + (1 + scroll/2000) + ')',
    '-ms-transform'     : 'scale(' + (1 + scroll/2000) + ')',
    '-o-transform'      : 'scale(' + (1 + scroll/2000) + ')',
    'transform'         : 'scale(' + (1 + scroll/2000) + ')'
  });
});


if($('.fancybox').length){
$('.fancybox').fancybox({
    //openEffect  : 'none',
    //closeEffect : 'none'
  });

}


/**
Responsive on 767px
*/

// if (windowWidth <= 767) {
  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }



// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}




if( $('#mapID').length ){
var latitude = $('#mapID').data('latitude');
var longitude = $('#mapID').data('longitude');

var myCenter= new google.maps.LatLng(latitude,  longitude);
function initialize(){
    var mapProp = {
      center:myCenter,
      mapTypeControl:true,
      scrollwheel: false,
      zoomControl: true,
      disableDefaultUI: true,
      zoom:7,
      streetViewControl: false,
      rotateControl: true,
      mapTypeId:google.maps.MapTypeId.ROADMAP,
      styles: CustomMapStyles
      };

    var map= new google.maps.Map(document.getElementById('mapID'),mapProp);
    var marker= new google.maps.Marker({
      position:myCenter,
        //icon:'map-marker.png'
      });
    marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);

}


/*
-----------------------
Start Contact Google Map ->> 
-----------------------
*/
if( $('#googlemap').length ){
    var latitude = $('#googlemap').data('latitude');
    var longitude = $('#googlemap').data('longitude');

    var myCenter= new google.maps.LatLng(latitude,  longitude);
    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
    function initialize(){
        var mapProp = {
          center:myCenter,

          mapTypeControl:false,
          scrollwheel: false,

          zoomControl: true,
          disableDefaultUI: true,
          zoom:13,
          streetViewControl: false,
          rotateControl: false,
          mapTypeId:google.maps.MapTypeId.ROADMAP,
          //styles : CustomMapStyles
      };
      var map= new google.maps.Map(document.getElementById('googlemap'),mapProp);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
}


if( $('.contact-info-slider').length ){
    $('.contact-info-slider').slick({
      dots: false,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 2000,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: true,
            infinite: true,
          }
        },
        {
          breakpoint: 576,
          settings: {
            dots: true,
            arrows: true,
            //prevArrow: $('.fl-info-prv-nxt .fl-prev'),
            //nextArrow: $('.fl-info-prv-nxt .fl-next'),
            slidesToShow: 1,
            slidesToScroll: 1

          }
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}

$('.slider-single').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
  prevArrow: $('.fl-prv-nxt .fl-prev'),
  nextArrow: $('.fl-prv-nxt .fl-next'),
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.slider-single',
  dots: false,
  arrows: false,
  focusOnSelect: true,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        dots: false
      }
    }
  ]
});

if( $('.homeSlider').length ){
    $('.homeSlider').slick({
      dots: true,
      arrows: false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 3000,
      speed: 1000,
      slidesToShow: 1,
      slidesToScroll: 1,
      customPaging : function(slider, i) {
        var thumb = $(slider.$slides[i]).data();
        var j = i + 1;
        return '<a class="dot">'+j+'</a>';
      },
      responsive: [
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots:false,
            infinite: true,
          }
        },
      ]
    });
}



if (windowWidth <= 1199) {
    $('.hdr-humberger .line-icon').on('click', function(e){
      $('.mobile-hdr').addClass('opacity-1');
      $('.bdoverlay').addClass('active');
      $('body').addClass('active-scroll-off');
      $(this).addClass('active-collapse');
    });
    $('.close-btn').on('click', function(e){
      $('.bdoverlay').removeClass('active');
      $('.mobile-hdr').removeClass('opacity-1');
      $('body').removeClass('active-scroll-off');
      $('.line-icon').removeClass('active-collapse');
    });
     $('li.menu-item-has-children > a').on('click', function(e){
      e.preventDefault();
    //$('li.menu-item-has-children .sub-menu').slideUp(300);
    $(this).toggleClass('sub-menu-active');
    $(this).next().slideToggle(300);

  });
  }

if (windowWidth <= 767) {
  $('.ftr-menu h6').on('click', function(){
    $(this).toggleClass('active');
    $(this).parent().siblings().find('h6').removeClass('active');
    $(this).parent().find('ul').slideToggle(300);
    $(this).parent().siblings().find('ul').slideUp(300);
  });

}


if (windowWidth <= 639){
  if( $('.xs-usp-slider').length ){
    $('.xs-usp-slider').slick({
      dots: true,
      arrows: false,
      infinite: false,
      autoplay: false,
      autoplaySpeed: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1
    });
  };
}



/*----- End of Shoriful -----*/
if( $('.xs-recentlyAddedSlider').length ){
  $('.xs-recentlyAddedSlider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    prevArrow: $('.xs-recentlyAddedSliderCntlr .ras-prev'),
    nextArrow: $('.xs-recentlyAddedSliderCntlr .ras-next')
  });

}



if( $('.recentlyAddedSlider').length ){

  $('.recentlyAddedSlider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    prevArrow: $('.recentlyAddedSliderCntlr .ras-prev'),
    nextArrow: $('.recentlyAddedSliderCntlr .ras-next'),
    asNavFor: '.recentlyAddedPagiSlider',
  });
  $('.recentlyAddedPagiSlider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.recentlyAddedSlider',
    dots: false,
    arrows: false,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: false,
          dots: false
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: false,
          dots: false
        }
      }
    ]
  });

}



if( $('.dftServiceModuleSlider').length ){
    $('.dftServiceModuleSlider').slick({
      dots: false,
      arrows: false,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 640,
          settings: {
            dots: true,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
}



if( $('.dftJobModuleSlider').length ){
    $('.dftJobModuleSlider').slick({
      dots: false,
      arrows: false,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 640,
          settings: {
            dots: true,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
}

if( $('.teamModuleGrdsSlider').length ){
    $('.teamModuleGrdsSlider').slick({
      dots: false,
      arrows: false,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            dots: true,
            arrows: true,
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 640,
          settings: {
            dots: true,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
}

})(jQuery);