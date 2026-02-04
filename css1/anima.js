// Release the $ symbol
jQuery.noConflict();

jQuery(document).ready(function ($) {
   
   /*===== window and macbook  =======*/

   if (navigator.userAgent.indexOf('Mac OS X') != -1) {
      jQuery("body").addClass("macbook");
      jQuery("html").addClass("html-macbook");
   } else {
      jQuery("body").addClass("window-pc");
      jQuery("html").addClass("html-window-pc");
   }

   if (jQuery('body').hasClass('page-template-dealership') || jQuery('body').hasClass('page-template-global-atul')) {
      if (navigator.userAgent.indexOf('Mac OS X') !== -1) {
          jQuery("html").addClass("html-macbook");
      } else {
          jQuery("html").addClass("html-window-pc");
      }
  }
  

   /*===== Gsap-ScrollSmoother =======*/
   
   const isMacBook = navigator.userAgent.indexOf('Mac OS X') !== -1;
   const isMobileDevice = /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
   const isDealershipPage = jQuery('body').hasClass('page-template-dealership');
   const isGlobalAtulPage = jQuery('body').hasClass('page-template-global-atul');

   // Register GSAP plugins if on a MacBook
   if (isMacBook && (isDealershipPage || isGlobalAtulPage)) {
      gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
   }

   // Initialize or disable ScrollSmoother based on conditions
   if (!isMobileDevice) {
      if (isMacBook && (isDealershipPage || isGlobalAtulPage)) {
            // Disable ScrollSmoother for specific pages
            if (ScrollSmoother) {
               ScrollSmoother.get()?.kill();
            }
      } else {
            // Initialize ScrollSmoother for other cases
            if (!ScrollSmoother.get()) {
               ScrollSmoother.create({
                  smooth: 2,
                  effects: true,
                  smoothTouch: 0.1,
               });
            }
      }
   }
     
      gsap.set('.appearIntro', {
         y: 50,
         opacity: 0,
      });


      const intros = document.querySelectorAll('.appearIntro');
      intros.forEach((intro) => {
         gsap.to(intro, {
            y: 0,
            opacity: 1,
            duration: 1,
            ease: 'none',
            scrollTrigger: {
               trigger: intro,
               start: 'top 90%',
               // markers: true,
               toggleActions: 'play none none none',
            },
         });
      });

});

