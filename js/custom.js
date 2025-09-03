//header add class
$(window).scroll(function () {
  if ($(this).scrollTop() > 70) {
    $(".fixed-top").addClass("fixed-top-nav");
  } else {
    $(".fixed-top").removeClass("fixed-top-nav");
  }
});

//on click move to browser top
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $("#movetop").fadeIn();
    } else {
      $("#movetop").fadeOut();
    }
  });
  //click event to scroll to top
  $("#movetop").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 200);
  });
});


var swiper = new Swiper('.team-swiper', {
      slidesPerView: 1,
      spaceBetween: 10,
	   autoplay: {
        delay: 5000,
        disableOnInteraction: true,
      },
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 10,
        },
      }
    });

 


document.onreadystatechange = function () {
  var state = document.readyState;
  if (state == "complete") {
    setTimeout(function () {
      document.getElementById("load").style.visibility = "hidden";
    }, 1000);
  }
};


document.querySelectorAll('.faq-accordion .accordion-button').forEach(function(btn){
  btn.addEventListener('click', function(){
    var item = btn.closest('.accordion-item');
    var collapse = item.querySelector('.accordion-collapse');
    var isOpen = collapse.classList.contains('show');
    // Close all
    document.querySelectorAll('.faq-accordion .accordion-collapse').forEach(function(c){
      c.classList.remove('show');
      c.previousElementSibling.querySelector('.accordion-button').classList.add('collapsed');
    });
    // Open if not already open
    if(!isOpen){
      collapse.classList.add('show');
      btn.classList.remove('collapsed');
    }
  });
});
