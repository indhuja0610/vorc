
// Release the $ symbol
jQuery.noConflict();

jQuery(document).ready(function ($) {

   /*============================================================ Burger--menu--open =======================================================*/

   jQuery('.burgur_menu_lines').click(function () {
      jQuery("body").toggleClass("show-menu");
   });

   jQuery(document).on('click', function () {
      jQuery("body").removeClass("show-menu");
   });
   jQuery(".main-navigation, .burgur_menu_lines").on('click', function (e) {
      e.stopPropagation()
   });

   /*======================================================= Popup--open =======================================================*/

   jQuery('.book-button > a, .book-now-button > a ').click(function () {
      jQuery("body").toggleClass("popup-open");
      CountryListWidth();
   });
   jQuery('.connect-now').click(function () {
      jQuery("body").toggleClass("connect-popup-open");
      CountryListWidth();
   });
   jQuery(document).on('click', function () {
      if (jQuery(window).width() >= 991) {
         jQuery("body").removeClass("popup-open");
         jQuery("body").removeClass("connect-popup-open");
      }
   });
   jQuery('.close').on('click', function () {
      jQuery("body").removeClass("popup-open");
      jQuery("body").removeClass("connect-popup-open");
   });
   jQuery(".form-box, .book-button a, .connect-now, .book-now-button a").on('click', function (e) {
      e.stopPropagation()
   });

   /*======================================================= Sticky Header =======================================================*/

   $(window).scroll(function () {
      if ($(window).scrollTop() >= 50) {
         $('.site-header').addClass('fixed');
      } else {
         $('.site-header').removeClass('fixed');
      }
   });

   var didScroll;
   var lastScrollTop = 0;
   var delta = 5;
   var navbarHeight = jQuery('.site-header').outerHeight();
   jQuery('.viewport').css('padding-top', navbarHeight);
   // console.log(navbarHeight);

   if (jQuery(window).width() < 991) {
      jQuery('.main-menu').css('top', navbarHeight);
   }

   jQuery(window).scroll(function (event) {
      didScroll = true;
   });

   setInterval(function () {
      if (didScroll) {
         hasScrolled();
         didScroll = false;
      }
   }, 700);

   function hasScrolled() {
      var st = jQuery(this).scrollTop();
      var navbar_Height = jQuery('.site-header').outerHeight();

      // Make sure they scroll more than delta
      if (Math.abs(lastScrollTop - st) <= delta) return;

      if (st > lastScrollTop && st > navbarHeight) {
         // Scroll Down
         jQuery('.site-header').removeClass('nav-down').addClass('nav-up');
         jQuery('.nav-up').css('top', -navbarHeight + 'px');
         if (jQuery(window).width() < 991) {
            jQuery('.main-menu').css('top', navbar_Height);
         }

      } else {
         // Scroll Up
         if (st + jQuery(window).height() < jQuery(document).height()) {
            jQuery('.site-header').removeClass('nav-up').addClass('nav-down');
            jQuery('.nav-down').css('top', '0px');
            if (jQuery(window).width() < 991) {
               jQuery('.main-menu').css('top', navbar_Height);
            }

         }
      }

      lastScrollTop = st;
   }


   /*======================================================= Home-swiper (Home-page) =======================================================*/
   if (jQuery('.home-swiper').length) {

      var swiper = new Swiper(".home-swiper", {
         spaceBetween: 0,
         slidesPerView: 1,
         centeredSlides: true,
         loop: true,
         allowTouchMove: true,
         speed: 800,
         effect: 'slide',
         navigation: {
            nextEl: ".home-next",
            prevEl: ".home-prev",
         },
         breakpoints: {
            1024: {
               slidesPerView: 1,
               spaceBetween: 0
            }
         }
      });
   }


   /*======================================================= vehicle-swiper (Home-page) =======================================================*/
// Initialize the ProductSwiper first
var ProductSwiper = new Swiper(".ProductSwiper", {
   spaceBetween: 0,
   slidesPerView: 1,
   loop: true,
   allowTouchMove: false,
   speed: 800,
   effect: 'slide',
   freeMode: true,
   watchSlidesProgress: true,
   breakpoints: {
      992: {
         allowTouchMove: false,
      },
      0: {
         allowTouchMove: true,
      }
   },
});

if (jQuery('.vehicle-swiper').length) {
   // Initialize the vehicle swiper and link it with the ProductSwiper
   var vehicle_swiper = new Swiper(".vehicle-swiper", {
      spaceBetween: 0,
      slidesPerView: 1.8,
      centeredSlides: true,
      loop: true,
      allowTouchMove: false,
      speed: 800,
      effect: 'slide',
      updateOnWindowResize: true,
      navigation: {
         nextEl: ".vehicle-next",
         prevEl: ".vehicle-prev",
      },
      breakpoints: {
         992: {
            slidesPerView: 1.8,
            spaceBetween: 0
         },
         0: {
            slidesPerView: 1,
            spaceBetween: 0,
            allowTouchMove: true,
         }
      },
      thumbs: {
         swiper: ProductSwiper,
      },
      on: {
         slideChange: function () {
            var activeIndex = this.realIndex;
            jQuery('.paginationswiper-slide').removeClass('active');
            jQuery('.paginationswiper-slide').eq(activeIndex).addClass('active');
            let paginationswiper_width = jQuery('.paginationswiper-slide').outerWidth();
            const newPosition = activeIndex * paginationswiper_width;
            jQuery('.pagination-active').css('left', newPosition + 'px');
         }
      },
      resize: function () {
         // Debugging - console.log('Current slidesPerView:', this.params.slidesPerView);
      }
   });
}

jQuery('.paginationswiper-slide').each(function (index) {
   jQuery(this).on('click', function () {
      jQuery('.paginationswiper-slide').removeClass('active');
      jQuery(this).addClass('active');
      vehicle_swiper.slideToLoop(index);
      const newPosition = index * 20;
      jQuery('.pagination-active').css('left', newPosition + '%');
   });
});

// Handle clicks on the next and previous buttons
jQuery('.vehicle-next').on('click', function () {
   vehicle_swiper.slideNext();
});

jQuery('.vehicle-prev').on('click', function () {
   vehicle_swiper.slidePrev();
});

// Fixed variant click handler
jQuery('.ProductSwiper').on('click', '.variant-pro-list ul li', function () {
   // Find the currently active slide
   var $activeSlide = jQuery('.ProductSwiper .swiper-slide-active');
   
   // Remove 'active' class from all relevant elements in the active slide
   $activeSlide.find('.variant-pro-list ul li').removeClass('active');
   $activeSlide.find('.variant-pro-information ul li').removeClass('active');
   jQuery('.vehicle-swiper .swiper-slide-active .cars-item').removeClass('active');

   // Add 'active' class to the clicked item
   jQuery(this).addClass('active');

   // Get the target index from the clicked item
   var targetIndex = jQuery(this).data('target');
   
   if (targetIndex !== undefined) {
      // Try to find and activate the target cars-item
      var $targetItem = jQuery('.vehicle-swiper .swiper-slide-active').find('.cars-item').eq(targetIndex);
      
      if ($targetItem.length > 0) {
         // Target found, activate it
         $targetItem.addClass('active');
      } else {
         // Target not found, activate the first item as fallback
         console.warn('Target index ' + targetIndex + ' not found. Activating first item.');
         jQuery('.vehicle-swiper .swiper-slide-active').find('.cars-item').eq(0).addClass('active');
      }
   } else {
      // No target specified, activate the first item
      jQuery('.vehicle-swiper .swiper-slide-active').find('.cars-item').eq(0).addClass('active');
   }

   // Add 'active' class to the corresponding variant-pro-information item
   var target_Index = jQuery(this).data('target');
   if (target_Index !== undefined) {
      $activeSlide.find('.variant-pro-information ul li').eq(target_Index).addClass('active');
   }
});
   /*======================================================= Home-Counter (Home-page) =======================================================*/

   if ("IntersectionObserver" in window) {
      let counterObserver = new IntersectionObserver(function (entries, observer) {
         entries.forEach(function (entry) {
            if (entry.isIntersecting) {
               let counter = entry.target;
               let target = parseInt(counter.getAttribute('data-target'));
               let suffix = counter.innerText.replace(/[0-9]/g, ''); // Extract the suffix text
               let step = target / 200;
               let current = 0;

               let timer = setInterval(function () {
                  current += step;
                  counter.innerText = Math.floor(current) + suffix;
                  if (Math.floor(current) >= target) {
                     counter.innerText = target + suffix;
                     clearInterval(timer);
                  }
               }, 10);
               counterObserver.unobserve(counter);
            }
         });
      });

      let counters = document.querySelectorAll(".counter");
      counters.forEach(function (counter) {
         counterObserver.observe(counter);
      });
   }


   /*======================================================= Home-insider-insights (Home-page) ===========================================================*/

   let swiperInstance;

   function initSwiper() {
      const swiperContainer = document.querySelector('.insider_insights_swiper');

      if (swiperContainer && swiperContainer.children.length > 0) {
         if (window.innerWidth <= 767 && !swiperInstance) {
            swiperInstance = new Swiper('.insider_insights_swiper', {
               slidesPerView: 1,
               spaceBetween: 10,
               loop: true,
               pagination: {
                  el: '.swiper-pagination',
                  clickable: true,
               }
            });
         } else if (window.innerWidth > 768 && swiperInstance) {
            swiperInstance.destroy(true, true); // Destroy Swiper on desktop
            swiperInstance = null;
         }
      }
   }

   window.addEventListener('load', initSwiper);
   window.addEventListener('resize', initSwiper);



   /*======================================================= swiper-timeline (About-page) =======================================================*/
   if (jQuery('.swiper-timeline').length) {

      var timeline = new Swiper(".swiper-timeline", {
         grabCursor: true,
         slidesPerView: 4,
         loop: false,
         speed: 800,
         effect: 'slide',
         navigation: {
            nextEl: ".timeline-next",
            prevEl: ".timeline-prev",
         },
         breakpoints: {
            1025: {
               slidesPerView: 4,
            },
            992: {
               slidesPerView: 3,
            },
            768: {
               slidesPerView: 2,
            },
            0: {
               slidesPerView: 1
            }

         }
      });
   }

   /*======================================================= swiper-manufacturing (About-page) =======================================================*/

   if (jQuery('.manufacturing-swiper').length) {
      var manufacturing_swiper = new Swiper(".manufacturing-swiper", {
         spaceBetween: 80,
         slidesPerView: 1.8,
         centeredSlides: true,
         loop: true,
         allowTouchMove: true,
         speed: 800,
         effect: 'slide',
         updateOnWindowResize: true,
         navigation: {
            nextEl: ".manufacturing-next",
            prevEl: ".manufacturing-prev",
         },
         breakpoints: {
            1025: {
               slidesPerView: 1.8,
               spaceBetween: 80
            },
            768: {
               slidesPerView: 1.8,
               spaceBetween: 40
            },
            0: {
               slidesPerView: 1,
               spaceBetween: 40
            }
         }
      });
   }

   /*======================================================= employ slider (About-page) ===========================================================*/

   let swiperEmployInstance;

   function swiperEmploy() {
      if (window.innerWidth <= 767 && !swiperEmployInstance) {
         swiperEmployInstance = new Swiper('.swiper-employ', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: false,
            navigation: {
               nextEl: ".employ-next",
               prevEl: ".employ-prev",
            },
         });
      } else if (window.innerWidth > 768 && swiperEmployInstance) {
         swiperEmployInstance.destroy(true, true); // Destroy Swiper on desktop
         swiperEmployInstance = null;
      }
   }

   window.addEventListener('load', swiperEmploy);
   window.addEventListener('resize', swiperEmploy);


   /*======================================================= masonry slider (Career-page) ===========================================================*/

   let swiperMasonry;

   function swiperMedia() {
      if (window.innerWidth <= 767 && !swiperMasonry) {
         // console.log('Initializing Swiper');
         swiperMasonry = new Swiper('.masonry-swiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: false,
            autoHeight: true,
            navigation: {
               nextEl: ".masonry-next",
               prevEl: ".masonry-prev",
            },
         });
      } else if (window.innerWidth > 768 && swiperMasonry) {
         if (typeof swiperMasonry.destroy === 'function') {
            swiperMasonry.destroy(true, true); // Destroy Swiper on desktop
         }
         swiperMasonry = null;
      }
   }
   window.addEventListener('load', swiperMedia);
   window.addEventListener('resize', swiperMedia);

   /*======================================================= life-autl-slider (career-page) =======================================================*/

   // Initialize Swiper instances
   var swiper_text = new Swiper(".swiper-autl-life-text", {
      spaceBetween: 0,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
      navigation: {
         nextEl: ".life-next",
         prevEl: ".life-prev",
      },
      breakpoints: {
         769: {
            slidesPerView: 4,
         },
         768: {
            slidesPerView: 2,
         },
         0: {
            slidesPerView: 1,
            autoHeight: true,
            allowTouchMove: false
         }
      }
   });

   var swiper_img = new Swiper(".swiper-autl-life-img", {
      spaceBetween: 0,
      effect: "fade",
      navigation: {
         nextEl: ".life-next-top",
         prevEl: ".life-prev-top",
      },
      fadeEffect: {
         crossFade: true,
      },
      thumbs: {
         swiper: swiper_text,
      },
   });

   // Add hover functionality
   const thumbnailSlides = document.querySelectorAll(
      ".swiper-autl-life-text .swiper-slide"
   );

   thumbnailSlides.forEach((slide, index) => {
      slide.addEventListener("mouseenter", () => {
         swiper_img.slideTo(index);
      });
   });

   /*======================================================= global vehicle slider (global-page) ===========================================================*/

   // Initialize the ProductSwiper first
   var GlobalSpecification = new Swiper(".global-specification", {
      spaceBetween: 0,
      slidesPerView: 1,
      loop: false,
      allowTouchMove: false,
      speed: 800,
      effect: 'slide',
      freeMode: true,
      watchSlidesProgress: true,
      breakpoints: {
         992: {
            allowTouchMove: false,
         },
         0: {
            allowTouchMove: true,
         }
      }
   });

   if (jQuery('.global-vehicle-swiper').length) {
      // Initialize the vehicle swiper and link it with the ProductSwiper
      var Global_vehicle = new Swiper(".global-vehicle-swiper", {
         spaceBetween: 0,
         slidesPerView: 1.8,
         centeredSlides: true,
         loop: true,
         allowTouchMove: false,
         speed: 1000,
         autoplay: {
            delay: 5000,
          },
         effect: 'slide',
         updateOnWindowResize: true,
         navigation: {
            nextEl: ".global-next",
            prevEl: ".global-prev",
         },
         breakpoints: {
            992: {
               slidesPerView: 1.8,
               spaceBetween: 0
            },
            0: {
               slidesPerView: 1,
               spaceBetween: 0,
               allowTouchMove: true,

            }
         },
         thumbs: {
            swiper: GlobalSpecification,
         }
      });
   }


   /*======================================================= accordion (About-page) =======================================================*/

   jQuery(".accordion-wrap:first").addClass("active");
   jQuery(".accordion-wrap:first .accordion-content").show();
   jQuery(".accordion-img-item:first").addClass("active");
   jQuery(".North-icon").addClass("active");

   jQuery(".accordion-title").on("click", function () {
      var index = jQuery(this).closest(".accordion-wrap").index();

      var titleText = $(this).find('.title').text().trim();
      var className = 'accordion-' + titleText.replace(/\s+/g, '-').toLowerCase();

      jQuery('body').removeClass(function (index, className) {
         return (className.match(/\baccordion-\S+/g) || []).join(' ');
      });

      jQuery('body').addClass(className);


      jQuery(".accordion-wrap").removeClass("active");
      jQuery(".accordion-content").slideUp("normal");
      jQuery(".North-icon").removeClass("active");

      if (jQuery(this).next(".accordion-content").is(":hidden") === true) {
         jQuery(this).closest(".accordion-wrap").addClass("active");
         jQuery(this).next(".accordion-content").slideDown("normal");
      }

      jQuery(".accordion-img-item").removeClass("active");
      jQuery(".accordion-img-item").eq(index).addClass("active");

   });


   jQuery(".vehicle-info-accordion .accordion-title, .regional-accordion .accordion-title").on("click", function () {
      setTimeout(() => {
         if (jQuery('.accordion-title').length) {
            var vehicle_title_top = jQuery(this).offset().top - 100;
            // console.log(vehicle_title_top);

            jQuery('html, body').animate({
               scrollTop: vehicle_title_top
            }, 600);
         }
      }, 500);
   });

   /*======================================================= Marquee =======================================================*/

   nodeMarquee({
      parent: '.marquee-item',
      speed: 1
   });
   nodeMarquee({
      parent: '.autl-auto-marquee-right',
      speed: -1
   })
   nodeMarquee({
      parent: '.autl-auto-marquee-left',
      speed: 1
   })

   /*======================================================= Tab (About-page) =======================================================*/

   jQuery('.tab-link').click(function () {
      jQuery(".tab").removeClass('tab-active');
      jQuery(".tab[data-id='" + jQuery(this).attr('data-id') + "']").addClass("tab-active");
      jQuery(".tab-link").removeClass('active');
      jQuery(this).parent().find(".tab-link").addClass('active');
   });

   /*======================================================= Tabs To Accordion (Career-page) =======================================================*/

   // Initially hide all tab content and show the first one
   jQuery(".media_tab_content").hide();
   jQuery(".media_tab_content:first").show().addClass("active");

   /* if in tab mode */
   jQuery(".atul-media-tabs li").click(function () {
      var activeTab = jQuery(this).attr("rel");

      // Slide up all tab content first and remove the active class
      jQuery(".media_tab_content").slideUp(400).removeClass("active");

      // Then slide down the selected tab and add the active class
      jQuery("#" + activeTab).slideDown(400).addClass("active");

      jQuery(".atul-media-tabs li").removeClass("active");
      jQuery(this).addClass("active");

      jQuery(".accordion_heading").removeClass("d_active");
      jQuery(".accordion_heading[rel^='" + activeTab + "']").addClass("d_active");


      // Media page accordion item within the active tab
      jQuery("#" + activeTab + " .accordion-wrap-media").removeClass("active");
      jQuery("#" + activeTab + " .accordion-wrap-media:first").addClass("active");
      jQuery("#" + activeTab + " .accordion-wrap-media:first .accordion-content-media").show();

   });


   /* if in drawer mode */
   jQuery(".accordion_heading").click(function () {
      var d_activeTab = jQuery(this).attr("rel");

      // Slide up all tab content first and remove the active class
      jQuery(".media_tab_content").slideUp(400).removeClass("active");

      // Then slide down the selected tab and add the active class
      jQuery("#" + d_activeTab).slideDown(400).addClass("active");

      jQuery(".accordion_heading").removeClass("d_active");
      jQuery(this).addClass("d_active");

      jQuery(".atul-media-tabs li").removeClass("active");
      jQuery(".atul-media-tabs li[rel^='" + d_activeTab + "']").addClass("active");


      // Media page accordion item within the active tab
      jQuery("#" + d_activeTab + " .accordion-wrap-media").removeClass("active");
      jQuery("#" + d_activeTab + " .accordion-wrap-media:first").addClass("active");
      jQuery("#" + d_activeTab + " .accordion-wrap-media:first .accordion-content-media").show();


      // Smooth scroll to the selected content
      setTimeout(() => {
         if (jQuery("#" + d_activeTab).length) {
            var target = jQuery("#" + d_activeTab).offset().top - 230;
            // console.log(target);

            jQuery('html, body').animate({
               scrollTop: target
            }, 600);
         }
      }, 800);

      return false; // Prevent further action

   });

   // Add the "tab_last" class to the last tab
   jQuery('.atul-media-tabs li').last().addClass("tab_last");


   /*======================================================= Fancybox (Career-page) =======================================================*/

   Fancybox.bind('.active.media_tab_content [data-fancybox="gallery"]', {
      Slideshow: {
         progressParentEl: (slideshow) => {
            return slideshow.instance.container;
         }
      },
      Thumbs: {
         type: "modern"
      }
   });

   Fancybox.bind('.active.accordion-wrap-media [data-fancybox="gallery"]', {
      Slideshow: {
         progressParentEl: (slideshow) => {
            return slideshow.instance.container;
         }
      },
      Thumbs: {
         type: "modern"
      }
   });


   /*======================================================= Reset the form fields  =======================================================*/
   jQuery('.close').on('click', function () {
      // Reset the Contact Form 7 form
      var form = jQuery('.wpcf7 form')[0];
      form.reset();
      // Remove any error messages
      jQuery('.wpcf7-response-output').hide();
      jQuery('.wpcf7-not-valid-tip').remove();
      jQuery('.wpcf7-form-control').removeClass('wpcf7-not-valid');
   });



   /*======================================================= accordion (Media-page) =======================================================*/

   jQuery(".media_tab_content .accordion-wrap-media:first").addClass("active");
   jQuery(".media_tab_content .accordion-wrap-media:first .accordion-content-media").show();

   jQuery(".accordion-layout .accordion-wrap-media:first").addClass("active");
   jQuery(".accordion-layout .accordion-wrap-media:first .accordion-content-media").show();

   jQuery('body').on("click", ".accordion-title-media", function () {
      jQuery(".accordion-wrap-media").removeClass("active");
      jQuery(".accordion-content-media").slideUp("normal");
      if (jQuery(this).next(".accordion-content-media").is(":hidden") === true) {
         jQuery(this).closest(".accordion-wrap-media").addClass("active");
         jQuery(this).next(".accordion-content-media").slideDown("normal");
      }

      setTimeout(() => {
         if (jQuery('.accordion-title-media').length) {
            var target_top = jQuery(this).offset().top - 100;
            // console.log(target_top);

            jQuery('html, body').animate({
               scrollTop: target_top
            }, 600);
         }
      }, 500);
   });

   /*======================================================= product change (product-page) =======================================================*/

   jQuery(".thumbnail-pro-color ul li span").on("click", function () {
      var $this = jQuery(this);
      var $productBox = $this.closest('.product-list-box');
      var ColorIndex = $this.parent().data('target');

      if (ColorIndex !== undefined) {
         $productBox.find('.thumbnail-pro-color ul li').removeClass('active');
         $productBox.find('.thumbnail-vehicle-img .thumbnail-vehicle-item').removeClass('active');

         $this.parent().addClass('active');
         $productBox.find('.thumbnail-vehicle-img .thumbnail-vehicle-item').eq(ColorIndex).addClass('active');
      } else {
         console.error('No data-target attribute found or value is undefined.');
      }
   });

   /*======================================================= product Tab (product-page) =======================================================*/

   jQuery(".product_content").hide();
   jQuery(".product_content:first").show().addClass("active");

   if (window.location.hash) {
      var hashValue = window.location.hash.substring(1);
      window.history.replaceState(null, null, "?" + hashValue);
   }

   function activateTabFromCustomSymbol() {
      var url = window.location.href;
      var symbol = "?";
      var ProactiveTab = url.includes(symbol) ? url.split(symbol)[1] : null;
      if (ProactiveTab) {
         jQuery(".product_content").slideUp(400).removeClass("active");
         jQuery("#" + ProactiveTab).slideDown(400).addClass("active");

         jQuery(".product-tabs li").removeClass("active");
         jQuery(".product-tabs li[rel='" + ProactiveTab + "']").addClass("active");
      }
   }
   activateTabFromCustomSymbol();

   var isSymbolChangeTriggeredByClick = false;

   jQuery(window).on("hashchange", function () {
      if (!isSymbolChangeTriggeredByClick) {
         activateTabFromCustomSymbol();
      }
      isSymbolChangeTriggeredByClick = false;
   });

   jQuery(".product-tabs li").click(function () {
      var ProactiveTab = jQuery(this).attr("rel");
      jQuery(".product_content").slideUp(400).removeClass("active");
      jQuery("#" + ProactiveTab).slideDown(400).addClass("active");

      jQuery(".product-tabs li").removeClass("active");
      jQuery(this).addClass("active");

      isSymbolChangeTriggeredByClick = true;
      window.history.replaceState(null, null, "?" + ProactiveTab);
   });

   /* For Mobile */
   jQuery(".product-tab-link").click(function () {
      var pro_active_tab = jQuery(this).attr("rel");
      jQuery(".product_content").slideUp(400).removeClass("active");
      jQuery("#" + pro_active_tab).slideDown(400).addClass("active");
      jQuery(".product-tab-link").removeClass("active");
      jQuery(this).addClass("active");

      setTimeout(() => {
         if (jQuery("#" + pro_active_tab).length) {
            var pro_target = jQuery("#" + pro_active_tab).offset().top - 280;
            jQuery('html, body').animate({
               scrollTop: pro_target
            }, 600);
         }
      }, 800);

      isSymbolChangeTriggeredByClick = true;
      window.history.replaceState(null, null, "?" + pro_active_tab);

      return false;
   });

   /*======================================================= product detail color choose =======================================================*/

   jQuery(".color-choose ul li span").on("click", function () {
      var $this = jQuery(this);
      var $ProDetailBox = $this.closest('.background-img');
      var ColorChoose = $this.parent().data('target');

      if (ColorChoose !== undefined) {
         $ProDetailBox.find('.color-choose ul li').removeClass('active');
         $ProDetailBox.find('.vehicle-box-360 .detail-vehicle-item').removeClass('active');

         $this.parent().addClass('active');
         $ProDetailBox.find('.vehicle-box-360 .detail-vehicle-item').eq(ColorChoose).addClass('active');
      } else {
         console.error('No data-target attribute found or value is undefined.');
      }
   });


   /*======================================================= emi calculator =======================================================*/


   if (jQuery('.product-detail').length) {

      const amountSlider = document.getElementById('amount');
      const amountInput = document.getElementById('amountInput');
      const periodSlider = document.getElementById('paymentPeriod');
      const periodInput = document.getElementById('periodInput');
      const rateSlider = document.getElementById('interestRate');
      const rateInput = document.getElementById('interestRateInput');

      const amountValue = document.getElementById('amountValue');
      const periodValue = document.getElementById('periodValue');
      const rateValue = document.getElementById('interestRateValue');

      const totalValue = document.getElementById('totalValue');
      const estReturns = document.getElementById('estReturns');
      const investedAmount = document.getElementById('investedAmount');

      function formatAmount(value) {
         return parseFloat(value).toLocaleString('en-IN', { minimumFractionDigits: 0, maximumFractionDigits: 2 });
      }

      function calculateEMI() {
         const P = parseFloat(amountSlider.value);  // Principal Amount
         const r = parseFloat(rateSlider.value) / 12 / 100;  // Monthly interest rate
         const n = parseFloat(periodSlider.value);  // Loan tenure in months

         const EMI = (P * r * Math.pow(1 + r, n)) / (Math.pow(1 + r, n) - 1); // Monthly EMI
         const total = EMI * n;  // Total repayment
         const downPayment = P * 0.15; // Down payment

         totalValue.textContent = formatAmount(Math.round(total));
         estReturns.textContent = formatAmount(Math.round(EMI)); // Display EMI as Est. Returns
         investedAmount.textContent = formatAmount(Math.round(downPayment));
      }

      amountSlider.oninput = function () {
         amountInput.value = this.value;
         amountValue.textContent = formatAmount(this.value);
         amountSlider.style.setProperty('--val', this.value);
         amountSlider.style.setProperty('--min', amountSlider.min);
         amountSlider.style.setProperty('--max', amountSlider.max);
         calculateEMI();
      };

      amountInput.oninput = function () {
         amountSlider.value = this.value;
         amountValue.textContent = formatAmount(this.value);
         amountSlider.style.setProperty('--val', this.value);
         amountSlider.style.setProperty('--min', amountSlider.min);
         amountSlider.style.setProperty('--max', amountSlider.max);
         calculateEMI();
      };

      periodSlider.oninput = function () {
         periodInput.value = this.value;
         periodValue.textContent = `${this.value}`;
         periodSlider.style.setProperty('--val', this.value);
         periodSlider.style.setProperty('--min', periodSlider.min);
         periodSlider.style.setProperty('--max', periodSlider.max);
         calculateEMI();
      };

      periodInput.oninput = function () {
         periodSlider.value = this.value;
         periodValue.textContent = `${this.value}`;
         periodSlider.style.setProperty('--val', this.value);
         periodSlider.style.setProperty('--min', periodSlider.min);
         periodSlider.style.setProperty('--max', periodSlider.max);
         calculateEMI();
      };

      rateSlider.oninput = function () {
         rateInput.value = this.value;
         rateValue.textContent = `${this.value}`;
         rateSlider.style.setProperty('--val', this.value);
         rateSlider.style.setProperty('--min', rateSlider.min);
         rateSlider.style.setProperty('--max', rateSlider.max);

         calculateEMI();
      };

      rateInput.oninput = function () {
         rateSlider.value = this.value;
         rateValue.textContent = `${this.value}`;
         rateSlider.style.setProperty('--val', this.value);
         rateSlider.style.setProperty('--min', rateSlider.min);
         rateSlider.style.setProperty('--max', rateSlider.max);
         calculateEMI();
      };

      // Initial calculation
      calculateEMI();

   
   }


   /*======================================================= verify OTP Input  =======================================================*/

   function CountryListWidth() {
      if (jQuery('.verify-box').length) {
         jQuery('.verify-box').each(function () {
            var $verifyBox = jQuery(this);
            var inputWidth = $verifyBox.find('.input-box').outerWidth();
            setTimeout(() => {
               $verifyBox.find('.country-list').css('width', inputWidth);
            }, 800);
         });
      }
   }

   CountryListWidth();

   jQuery(window).on('resize', function () {
      CountryListWidth();
   });

   /*======================================================= investor pagination  =======================================================*/

   /* Code for Accoardin and PDF Layout pagination Start */
   jQuery('.investor_pagination').on('click', '.page-numbers', function (e) {
      e.preventDefault();
      var current_page = parseInt(jQuery('.investor_pagination .page-numbers.current').text());
      var page = jQuery(this).text();
      if (page != '>' && page != '<') {
         page = parseInt(page);
      } else {
         if (page == '>') {
            page = current_page + 1;
         } else if (page == '<') {
            page = current_page - 1;
         }
      }
      // console.log(page);

      var next_page = current_page + 1;
      var total_pages = parseInt(jQuery('.investor_pagination').data('total'));
      var layout_type = jQuery('.investor_pagination').data('layout');
      var page_id = parseInt(jQuery('.investor_pagination').data('page_id'));
      jQuery.ajax({
         url: sbiajaxurl, // The AJAX URL defined by WordPress
         type: 'POST',
         dataType: 'JSON',
         data: {
            action: 'atul_auto_render_layout', // The PHP action to execute
            layout_type: layout_type,     // Any data you want to send
            current_page: current_page,     // Any data you want to send
            page: page,     // Any data you want to send
            next_page: next_page,     // Any data you want to send
            total_pages: total_pages,     // Any data you want to send
            page_id: page_id,     // Any data you want to send
         },
         success: function (response) {
            var result = response.result;
            var pagination = response.pagination;
            if ((result != undefined || result != '')) {
               if (layout_type == 'pdf') {
                  var appendDiv = jQuery('.pdf-layout');
               } else if (layout_type == 'accordian') {
                  var appendDiv = jQuery('.accordion-layout.media-page');
               }
               appendDiv.html(result);
               jQuery('.investor_pagination').html(pagination);

               setTimeout(() => {
                  jQuery('html, body').animate({
                     scrollTop: jQuery('html, body').offset().top
                  }, 20);
               }, 200);
            }
         },
      });
   })
   /* Code for Accoardin and PDF Layout pagination END */

});

