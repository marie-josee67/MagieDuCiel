/*
Theme Name:  Abias - Multipurpose Personal Portfolio Templete
Theme URI: https://tf.mdsumonmia.com/html/abias
Author URI: https://themeforest.net/user/webglib
*/
jQuery(document).ready(function($){
  
/*
      Table Index       
========================
1. Preloader
2. Responsive Menu
3. Slick Slider
4. Parallax
5. Progressbar Animation
6. Particle Animation
7. Work Completed Animation
8. Button Hover Effect
9. Portfolio Filtering
10. Hover Animation
11. Grid Home
12. Data Background
13. CountDown
14. Creative 2 Scrollable
15. Back to Top
16. Contact Us Form
17. Sticky Menu
*/

  "use strict";
  
/*=====| 1. Preloader |=====*/
  var loader = function() {
    setTimeout(function() { 
      if($('#ftco-loader').length > 0) {
        $('#ftco-loader').removeClass('show');
      }
    }, 1);
  };
  loader();
  
/*=====| 2. Responsive Menu |=====*/
  // meanmenu
  $('#mobile-menu').meanmenu({
    meanMenuContainer: '.mobile-menu',
    meanScreenWidth: "991",
    meanMenuClose: "X",
    meanMenuCloseSize: "18px",
    meanExpand: "+",
    meanContract: "-",
    onePage: true,
  });

  // Creative menu 
  $('.creative-menu-icon').click(function() {
    $('.main-menu-creative').toggleClass('menu-open');
    $('.creative-menu-icon').toggleClass('icon-cross');
  });
  $('.responsive-menu > ul > li').click(function() {
    $(this).siblings().removeClass('sub-menu-open');
    $(this).toggleClass('sub-menu-open');
    if ($('.responsive-menu > ul > li').hasClass('sub-menu-open')) {
      $('.main-menu-creative .menu-list').addClass('menu-position');
    } else {
      $('.main-menu-creative .menu-list').removeClass('menu-position');
    }
  });

  // One page nav
  if ($('.one-page-nav').length > 0 ) {
    $('#nav').onePageNav({
      currentClass: 'active',
      changeHash: false,
      scrollSpeed: 750,
      scrollThreshold: 0.5,
      filter: '',
      easing: 'swing'
    });
  }
  
/*=====| 3. Slick Slider |=====*/
  // Slider Portfolio
  if ($('.portfolio-featured-slider').length > 0 ) {
    $('.portfolio-featured-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.portfolio-slides'
    });
  }
  if ($('.portfolio-slides').length > 0 ) {
    $('.portfolio-slides').slick({
      dots: false,
      slidesToShow: 3,
      asNavFor: '.portfolio-featured-slider',
      slidesToScroll: 1,
      centerMode: true,
      focusOnSelect: true,
      variableWidth: true,
      lazyLoad: 'progressive',
      waitForAnimate: false,
      useTransform: false,
      prevArrow: '<i class="prev-arrow icofont-long-arrow-left"></i>',
      nextArrow: '<i class="next-arrow icofont-long-arrow-right"></i>',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  }

  // Project page slides
  if ($('.portfolio-slides-project').length > 0 ) {
    $('.portfolio-slides-project').slick({
      dots: false,
      slidesToShow: 3,
      slidesToScroll: 1,
      centerMode: true,
      variableWidth: true,
      lazyLoad: 'progressive',
      waitForAnimate: false,
      useTransform: false,
      prevArrow: '<i class="prev-arrow icofont-long-arrow-left"></i>',
      nextArrow: '<i class="next-arrow icofont-long-arrow-right"></i>',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  }

  // Creative Slides
  $('.client-slides').on('init', function(e, slick) {
    var $firstAnimatingElements = $('div.item:first-child').find('[data-animation]');
    doAnimations($firstAnimatingElements);    
  });
  $('.client-slides').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
    var $animatingElements = $('div.item[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
    doAnimations($animatingElements);    
  });
  
  function doAnimations(elements) {
      var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
      elements.each(function() {
          var $this = $(this);
          var $animationDelay = $this.data('delay');
          var $animationType = 'animated ' + $this.data('animation');
          $this.css({
            'animation-delay': $animationDelay,
            '-webkit-animation-delay': $animationDelay
          });
          $this.addClass($animationType).one(animationEndEvents, function() {
              $this.removeClass($animationType);
          });
      });
  }

  // Slider For Testimonial
  if ($('.client-slides').length > 0 ) {
    $('.client-slides').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider_thumbs'
    });
  }
  if ($('.slider_thumbs').length > 0 ) {
    $('.slider_thumbs').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      asNavFor: '.client-slides',
      variableWidth: true,
      dots: false,
      centerMode: true,
      focusOnSelect: true,
      prevArrow: '<button class="shade-btn shade-btn-big shade-btn-dark-blue slick-prev-arrow"><i class="prev-arrow icofont-long-arrow-left"></i>See Previous</button>',
      nextArrow: '<button class="shade-btn shade-btn-big shade-btn-dark-blue slick-next-arrow">See Next<i class="next-arrow icofont-long-arrow-right"></i></button>',
      responsive: [
        {
          breakpoint: 490,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        }
      ]
    });
  }

  // FeedbacK Slides
  if ($('.feedback-slides').length > 0 ) {
    $('.feedback-slides').slick({
      dots: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      lazyLoad: 'progressive',
      waitForAnimate: false,
      useTransform: false,
      prevArrow: '<i class="fas fa-chevron-left prev-arrow"></i>',
      nextArrow: '<i class="fas fa-chevron-right next-arrow"></i>',
    });
  };

  // Brand Slides
  if ($('.brand-slides').length > 0 ) {
    $('.brand-slides').slick({
      dots: false,
      arrows: false,
      slidesToShow: 5,
      slidesToScroll: 2,
      infinite: true,
      autoplay: true,
    });
  }

  // Creative Slides
  $('.creative-slides').on('init', function(e, slick) {
    var $firstAnimatingElements = $('div.creative-slide-item:first-child').find('[data-animation]');
    doAnimations($firstAnimatingElements);    
  });
  $('.creative-slides').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
    var $animatingElements = $('div.creative-slide-item[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
    doAnimations($animatingElements);    
  });
  
  $('.creative-slides').slick({
    autoplay: true,
    autoplaySpeed: 10000,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    cssEase: 'linear',
    prevArrow: $(".creative-prev"),
    nextArrow: $(".creative-next"),
  });
  
  function doAnimations(elements) {
      var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
      elements.each(function() {
          var $this = $(this);
          var $animationDelay = $this.data('delay');
          var $animationType = 'animated ' + $this.data('animation');
          $this.css({
            'animation-delay': $animationDelay,
            '-webkit-animation-delay': $animationDelay
          });
          $this.addClass($animationType).one(animationEndEvents, function() {
              $this.removeClass($animationType);
          });
      });
  }

  // Slider in wheel
  if (window.matchMedia('(min-width: 1200px)').matches) {
    $('.creative-slides').on('wheel', (function(e) {
      e.preventDefault();
      if (e.originalEvent.deltaY < 0) {
        $(this).slick('slickNext');
      } else {
        $(this).slick('slickPrev');
      }
    }));
  }

/*=====| 4. Parallax |=====*/
  // About Parallax
  if ($(".about-parallax").length > 0) {
    var scene = $(".about-parallax").get(0);
    var parallax = new Parallax(scene, {
      relativeInput: true,
    });
  };
  
  // Client Parallax
  if ($(".client-parallax").length > 0) {
    var scene = $(".client-parallax").get(0);
    var parallax = new Parallax(scene, {
      relativeInput: true,
    });
  };

  // Skill Parallax
  if ($(".skill-parallax").length > 0) {
    var scene = $(".skill-parallax").get(0);
    var parallax = new Parallax(scene, {
      relativeInput: true,
    });
  };

/*=====| 5. Progressbar Animation |=====*/
  $('.progress-bar').waypoint(function() {
    $('.progress-bar').css({
    animation: "animate-positive 2s",
    opacity: "1"
    });
  }, { offset: '75%' });

/*=====| 6. Particle Animation |=====*/
  $(".bg-dark").each(function() {
    particlesJS($(this).attr('id'), {
      "particles": {
        "number": {
          "value": 355,
          "density": {
            "enable": true,
            "value_area": 789
          }
        },
        "color": {
          "value": "#ffffff"
        },
        "opacity": {
          "value": 0.5,
          "random": false,
        },
        "size": {
          "value": 2,
          "random": true,
        },
        "line_linked": {
          "enable": false,
          "distance": 150,
        },
        "move": {
          "enable": true,
          "speed": 0.5,
        }
      },
      "interactivity": {
        "events": {
          "onhover": {
            "mode": "bubble"
          },
          "resize": true
        },
        "modes": {
          "grab": {
            "distance": 400,
            "line_linked": {
              "opacity": 1
            }
          },
          "bubble": {
            "distance": 83.91608391608392,
            "size": 1,
            "duration": 3,
            "opacity": 1,
            "speed": 3
          },
          "repulse": {
            "distance": 200,
            "duration": 0.4
          },
          "push": {
            "particles_nb": 4
          },
          "remove": {
            "particles_nb": 2
          }
        }
      },
      "retina_detect": true
    })
  });

/*=====| 7. Work Completed Animation |=====*/
  // for active class
  if ($(".work-step-four").hasClass("work-step-completed")) {
    $('.work-completed').addClass('completed-four');
    $('.work-step-three, .work-step-two').addClass('work-step-completed');
  } else if ($(".work-step-three").hasClass("work-step-completed")) {
    $('.work-completed').addClass('completed-three');
    $('.work-step-two').addClass('work-step-completed');
  } else if ($(".work-step-two").hasClass("work-step-completed")) {
    $('.work-completed').addClass('completed-two');
  } else {
    $('.work-completed').addClass('completed-one');
  }

  // For Hover
  // four
  $(".work-step-four").mouseenter(function(){
    $('.work-completed').addClass('completed-four');
    $('.work-step-four, .work-step-three, .work-step-two').addClass('work-step-completed');
  });
  $(".work-step-four").mouseleave(function(){
    $('.work-completed').removeClass('completed-four');
    $('.work-step-four, .work-step-three, .work-step-two').removeClass('work-step-completed');
  });
  // three
  $(".work-step-three").mouseenter(function(){
    $('.work-completed').addClass('completed-three');
    $('.work-step-three, .work-step-two').addClass('work-step-completed');
  });
  $(".work-step-three").mouseleave(function(){
    $('.work-completed').removeClass('completed-three');
    $('.work-step-three, .work-step-two').removeClass('work-step-completed');
  });
  // two
  $(".work-step-two").mouseenter(function(){
    $('.work-completed').addClass('completed-two');
    $('.work-step-two').addClass('work-step-completed');
  });
  $(".work-step-two").mouseleave(function(){
    $('.work-completed').removeClass('completed-two');
    $('.work-step-two').removeClass('work-step-completed');
  });

  
/*=====| 8. Button Hover Effect |=====*/
  $(".dark-btn")
  .on("mouseenter", function (e) {
    var parentOffset = $(this).offset(),
      relX = e.pageX - parentOffset.left,
      relY = e.pageY - parentOffset.top;
    $(this).find("span").css({ top: relY, left: relX });
  })
  .on("mouseout", function (e) {
    var parentOffset = $(this).offset(),
      relX = e.pageX - parentOffset.left,
      relY = e.pageY - parentOffset.top;
    $(this).find("span").css({ top: relY, left: relX });
  });

/*=====| 9. Portfolio Filtering |=====*/

  // init Isotope
  var $grid =  $('.all-projects').isotope({
    itemSelector: '.project',
    percentPosition: true,
    masonry: {
      horizontalOrder: true
    }
  });

  // layout Isotope again after all images have loaded
  if ($('.all-projects').length > 0 ) {
    $grid.imagesLoaded().progress( function() {
      $grid.isotope('layout');
   });
  };

  // filter items on button click
  $('.portfolio-manu').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });
  
  // for menu active 
  $('.portfolio-manu button').on('click', function (event) {
    $(this).siblings('.filter-active').removeClass('filter-active');
    $(this).addClass('filter-active');
    event.preventDefault();
  });

  
/*=====| 10. Hover Animation |=====*/
  $('.project-btn').pointLight({
    bg_innerColor: "#83F3FF",
    bg_outerColor: "transparent",
    border_innerColor: "#25D7EB",
    border_outerColor: "#18BBCD"
  });

  if ($('.hover-effect').length > 0 ) {
    $('.hover-effect').tilt({
      maxTilt: 3,
      glare: false,
      maxGlare: .4,
      reverse: true,
      scale: 1,
      perspective: 200,
    });
  };

/*=====| 11. Grid Home |=====*/
  $('#grid-about').click(function() {
    $('#details-about').addClass('expand');
  });
  $('#grid-portfolio').click(function() {
    $('#details-portfolio').addClass('expand');
  });
  $('#grid-service').click(function() {
    $('#details-service').addClass('expand');
  });
  $('#grid-contact').click(function() {
    $('#details-contact').addClass('expand');
  });
  // close details 
  $('.return-home').click(function() {
    $('.grid-item-details').removeClass('expand');
  });
  // close details 
  $('.close-details').click(function() {
    $('.grid-item-details').removeClass('expand');
  });

/*=====| 12. Data Background |=====*/
  $("[data-background").each(function(){
    $(this).css("background-image","url("+$(this).attr("data-background") + ") ")
  })

/*=====| 13. CountDown |=====*/
  if ($('.coming-time').length > 0 ) {
    // Add Zero function {
      function addZero(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    };
    var countDownDate = new Date("sep 5, 2021 00:00:00").getTime();
    var countdownfunction = setInterval(function() {
    var now = new Date().getTime();
    var gap = countDownDate - now;
    var days = Math.floor(gap / (1000 * 60 * 60 * 24));
    var hours = Math.floor((gap % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((gap % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((gap % (1000 * 60)) / 1000);
    document.getElementById("day").innerHTML = addZero(days);
    document.getElementById("hour").innerHTML = addZero(hours);
    document.getElementById("minute").innerHTML = addZero(minutes);
    document.getElementById("second").innerHTML = addZero(seconds);
    // If the count down is over, write some text 
    if (gap < 0) {
      clearInterval(countdownfunction);
    }
    }, 1000);
  };

/*=====| 14. Creative 2 Scrollable |=====*/
  if ($('.creative-wrapper-2').length > 0 ) {
    // Creative 2 Scrollable 
    const slider = document.querySelector('.creative-wrapper-2');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
      isDown = true;
      slider.classList.add('active');
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
      isDown = false;
      slider.classList.remove('active');
    });
    slider.addEventListener('mouseup', () => {
      isDown = false;
      slider.classList.remove('active');
    });
    slider.addEventListener('mousemove', (e) => {
      if(!isDown) return;
      e.preventDefault();
      const x = e.pageX - slider.offsetLeft;
      const walk = (x - startX) * 3; //scroll-fast
      slider.scrollLeft = scrollLeft - walk;
      console.log(walk);
    });
  };

});
// Document.ready function end here

/*=====| 15. Back to Top |=====*/
var btn = $('.scroll-top');
$(window).scroll(function() {
  if ($(window).scrollTop() > 600) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '600');
});

/*=====| 16. Contact Us Form |=====*/
(function ($) {
  'use strict';

  $('.msg-submit').on("click", function() {
    document.getElementById("get-name").innerHTML = document.getElementById("name").value;
  });
  
  var form = $('.contact-form'),
      message = $('.contact__msg'),
      form_data;

  // Success function
  function done_func(response) {
      message.fadeIn().removeClass('alert-danger').addClass('alert-success');
      message.text(response);
      setTimeout(function () {
          message.fadeOut();
      }, 2000);
      form.find('input:not([type="submit"]), textarea').val('');
  }

  // fail function
  function fail_func(data) {
      message.fadeIn().removeClass('alert-success').addClass('alert-success');
      message.text(data.responseText);
      setTimeout(function () {
          message.fadeOut();
      }, 2000);
  }
  
  form.submit(function (e) {
      e.preventDefault();
      form_data = $(this).serialize();
      $.ajax({
          type: 'POST',
          url: form.attr('action'),
          data: form_data
      })
      .done(done_func)
      .fail(fail_func);
  });
  
})(jQuery);
/*=====| 17. Sticky Menu |=====*/
(function(){
  var doc = document.documentElement;
  var w = window;
  var thresold = 200;
  var toggled;
  var curScroll = prevScroll = w.scrollY || doc.scrollTop;
  var curDirection = prevDirection = 0;
  var header = document.getElementById('stickynav');
  var checkScroll = function() {
    curScroll = w.scrollY || doc.scrollTop;
    if (curScroll > prevScroll) { 
      //scrolled up
      direction = 2;
    } else { 
      //scrolled down
      direction = 1;
    }
    if (direction !== prevDirection) {
      toggled = toggleHeader();
    }
    if (toggled) {
      prevDirection = curDirection;
    }
    prevScroll = curScroll;
  };
  var toggleHeader = function() {
    toggled = true;
    if (direction === 2) { 
      header.classList.add('hide');
    } else if (direction === 2 && curScroll > thresold) {
      header.classList.add('hide');
    } else if (direction === 1 && curScroll < thresold) {
      header.classList.remove('show');
    } else if (direction === 1) {
      header.classList.remove('hide');
      header.classList.add('show');
    } 
    else {
      toggled = false;
    }
    return toggled;
  };
  window.addEventListener('scroll', checkScroll);
})();