<div class="modal" tabindex="-1" id="videoModal">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Welcome to Surechain</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <video id="introVideo" width="100%" controls>
         <source src="img/LANDSCAPELOGO.mp4" type="video/mp4">
         Your browser does not support the video tag.
       </video>
       <script>
      // Play video when modal opens, pause and reset when closed
      var videoModal = document.getElementById('videoModal');
      var introVideo = document.getElementById('introVideo');

      videoModal.addEventListener('shown.bs.modal', function () {
        introVideo.currentTime = 0;
        introVideo.play();
      });

      videoModal.addEventListener('hidden.bs.modal', function () {
        introVideo.pause();
        introVideo.currentTime = 0;
      });
    </script>
      </div>     
    </div>
  </div>
</div>

</body>

<!-- scripts-->
    <script src="js/Jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/bsnav.js"></script>
    <script src="js/baguetteBox.js"></script>
    <script>
        baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
    </script>
    <!--[if lte IE 9]>
     <script src="js/ie.lteIE9.js"></script>
     <![endif]-->
    <script src="js/swiper.min.js"></script>
    <script src="js/easyResponsiveTabs.js"></script>
    <script src="js/aos.js"></script>
    <script>
        AOS.init({
            easing: 'ease-in-out-sine',
        });
    </script>
    <script src="js/custom.js"></script>

    <script>
        //contact form for product enquiry
        $('#contact_form').validate({
            ignore: [],
            errorClass: 'text-danger', // You can change the animation class for a different entrance animation - check animations page
            errorElement: 'div',
            errorPlacement: function (error, e) {
                e.parents('.form-floating').append(error);
            },
            highlight: function (e) {
                $(e).closest('.form-floating').removeClass('has-success has-error').addClass('has-error');
                $(e).closest('.text-danger').remove();
            },
            rules: {
                select_products: {
                    required: true
                },
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10
                },
                // sub: {
                //     required: true,
                // }
            },

            messages: {
                elect_products: {
                    required: "Select Products"
                },
                name: {
                    required: "Enter Name"
                },
                email: {
                    required: "Enter Valid Email"
                },
                phone: {
                    required: "Enter Valid Mobile Number"
                },
                // sub: {
                //     required: "Enter Subject"
                // }
            },
        });        
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
        //Horizontal Tab
        $('.parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

        // Child Tab
        $('.ChildVerticalTab_1').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true,
            tabidentify: 'ver_1', // The tab groups identifier
            activetab_bg: '#fff', // background color for active tabs in this group
            inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
            active_border_color: '#c1c1c1', // border color for active tabs heads in this group
            active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
        });

        //Vertical Tab
        $('.parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });

   
</script>

<!-- carousel logo images -->
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
  <script>
  var swiper = new Swiper(".mySwiper1", {
    slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 3000, // 3 seconds per slide
      disableOnInteraction: false, // Continue autoplay after interaction
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    // Responsive breakpoints
    breakpoints: {
      0: {              // small mobile
        slidesPerView: 1.2,
        spaceBetween: 10,
      },
      360: {            // large mobile
        slidesPerView: 1,
        spaceBetween: 12,
      },
      480: {            // small tablets
        slidesPerView: 2.5,
        spaceBetween: 14,
      },
      640: {            // tablets
        slidesPerView: 3,
        spaceBetween: 16,
      },
      1024: {           // small desktop
        slidesPerView: 4,
        spaceBetween: 20,
      },
      1280: {           // large desktop
        slidesPerView: 5,
        spaceBetween: 24,
      },
    },
  });
</script>

  