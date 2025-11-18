<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hire PHP Developers | Dedicated PHP developers / Programmers India - @ValueCoders</title>
    <meta name="description"
      content="Want to hire PHP developers for your web development project? Hire PHP programmers / developers from us & build scalable & secure web apps. 17+ Yrs | 4200+ projects | Strict NDAs | dedicated PHP Programmers." />
    <meta name="keywords"
      content="Hire PHP developers, Hire PHP programmers, Hire PHP developers India, Hire PHP programmers India, Offshore PHP developers, Offshore PHP programmers, Offshore PHP developers India, Offshore PHP programmers India, Dedicated PHP developers, dedicated PHP Programmers" />
    <meta property="og:title"
      content="Hire PHP Developers | Dedicated PHP developers / Programmers India - @ValueCoders" />
    <?php require_once './include/header-files.php'; ?>
    <link rel="preload stylesheet" type="text/css" href="./css/index-v8.css" defer />
    <link rel="preload stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.1/css/glide.core.css" defer />
    <style>

/* Tab navigation on L3 */

  </style>
  
  <script defer src="menu.js"></script>
  </head>
  <body>
    <?php require_once './include/menu-v8.php'; ?>
    <!-- <section class="contact-us-section padding-t-120 padding-b-120">
      <?php require_once 'include/contact-form.php'; ?>
    </section> -->
    <!-- <?php require_once 'include/footer.php'; ?> -->
    
    
    
    <script>
      // Function to initialize tabs
      function initializeTabs(sectionSelector) {
        const sections = document.querySelectorAll(sectionSelector);
      
        sections.forEach((section) => {
          const tabs = section.querySelectorAll(".tab");
          const contents = section.querySelectorAll(".content");
          const images = section.querySelectorAll(".tab-image");
      
          tabs.forEach((tab) => {
            tab.addEventListener("click", () => {
              const target = tab.getAttribute("data-target");
      
              // Reset active state for tabs, content, and images
              tabs.forEach((t) => t.classList.remove("active"));
              contents.forEach((content) => content.classList.remove("active"));
              images.forEach((image) => image.classList.remove("active"));
      
              // Set active state for clicked tab, content, and image
              tab.classList.add("active");
              section.querySelector(`#${target}`).classList.add("active");
              section.querySelector(`#img-${target}`).classList.add("active");
            });
          });
        });
      }
      
      // Initialize all tab sections
      document.addEventListener("DOMContentLoaded", () => {
        initializeTabs(".tabs-section");
      });
      
      
      
      document.addEventListener('DOMContentLoaded', () => {
          const section = document.querySelector('.service-scroller');
          if( section ){
              window.addEventListener('scroll', () => {
                const rect = section.getBoundingClientRect();
                const inViewport = rect.top >= 0 && rect.bottom <= window.innerHeight;
              });    
          }
          
      });
      
      
      
      
      if (document.getElementById("solution-slide")) {
      window.addEventListener("load", () => {
      const gliderElement = document.querySelector(".solution-slider .glider");
      const progressBar = document.querySelector(".solution-progress-bar");
      
      if (gliderElement && progressBar) {
      let glider; // Declare glider variable
      
      glider = new Glider(gliderElement, {
        slidesToShow: 5,
        slidesToScroll: 1,
        draggable: true,
        duration: 2.25,
        dots: ".dots",
        arrows: {
          prev: ".tail-prev",
          next: ".tail-next",
        },
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 5,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });
      
      // Update progress bar
      function updateProgress() {
        const currentSlide = glider.slide;
        const totalSlides = glider.slides.length;
        const slidesToShow = glider.opt.slidesToShow;
        const maxSlides = totalSlides - slidesToShow;
        const progress = (currentSlide / maxSlides) * 100;
        progressBar.style.width = `${Math.min(100, Math.max(0, progress))}%`;
      }
      
      // Initialize progress bar
      updateProgress();
      
      // Update progress bar when slides change
      gliderElement.addEventListener("glider-slide-visible", updateProgress);
      
      // Add smooth transition when slides move
      gliderElement.addEventListener("glider-refresh", () => {
        gliderElement.style.transition = "transform 0.5s ease";
      });
      
      // Handle arrow clicks
      const prevArrow = document.querySelector(".tail-prev");
      const nextArrow = document.querySelector(".tail-next");
      
      prevArrow.addEventListener("click", () => {
        setTimeout(updateProgress, 50); // Small delay to ensure glider state is updated
      });
      
      nextArrow.addEventListener("click", () => {
        setTimeout(updateProgress, 50); // Small delay to ensure glider state is updated
      });
      
      // Handle window resize
      let resizeTimer;
      window.addEventListener("resize", () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
          glider.refresh(true);
          updateProgress();
        }, 250);
      });
      }
      });
      }
      
      
      
      if (document.getElementById("industries-glider")) {
      window.addEventListener("load", function () {
      var gliderElement = document.querySelector(".industries-slider .glider");
      if (gliderElement) {
      new Glider(gliderElement, {
        slidesToShow: 6, // Default for large screens
        slidesToScroll: 1,
        draggable: true,
        scrollLock: true,
        duration: 2.25,
        dots: ".industries-slider .dots",
        arrows: { prev: "#industries-glider .test-prev", next: "#industries-glider .test-next" },
        responsive: [
          { breakpoint: 320, settings: { slidesToShow: 1, slidesToScroll: 1, itemWidth: '100%', duration: 2.25 } },
          { breakpoint: 767, settings: { slidesToShow: 1, slidesToScroll: 1, itemWidth: '100%', duration: 2.25 } },
          { breakpoint: 1024, settings: { slidesToShow: 2, slidesToScroll: 1, itemWidth: '50%', duration: 2.25 } }, 
          { breakpoint: 1400, settings: { slidesToShow: 6, slidesToScroll: 1, itemWidth: '16.66%', duration: 2.25 } }
        ]
      });
      }
      });
      }
      
      
      
      
      
      if (document.getElementById("client-slider")) {
      window.addEventListener("load", () => {
      const gliderElement = document.querySelector(".client-slider .glider");
      const progressBar = document.querySelector(".client-progress-bar");
      
      if (gliderElement && progressBar) {
      let glider; // Declare glider variable
      
      glider = new Glider(gliderElement, {
        slidesToShow: 3,
        slidesToScroll: 3,
        draggable: true,
        duration: 2.25,
        dots: ".dots",
        arrows: {
          prev: ".cl-prev",
          next: ".cl-next",
        },
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 979,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
        ],
      });
      
      // Update progress bar
      function updateProgress() {
        const currentSlide = glider.slide;
        const totalSlides = glider.slides.length;
        const slidesToShow = glider.opt.slidesToShow;
        const maxSlides = totalSlides - slidesToShow;
        const progress = (currentSlide / maxSlides) * 100;
        progressBar.style.width = `${Math.min(100, Math.max(0, progress))}%`;
      }
      
      // Initialize progress bar
      updateProgress();
      
      // Update progress bar when slides change
      gliderElement.addEventListener("glider-slide-visible", updateProgress);
      
      // Add smooth transition when slides move
      gliderElement.addEventListener("glider-refresh", () => {
        gliderElement.style.transition = "transform 0.5s ease";
      });
      
      // Handle arrow clicks
      const prevArrow = document.querySelector(".cl-prev");
      const nextArrow = document.querySelector(".cl-next");
      
      prevArrow.addEventListener("click", () => {
        setTimeout(updateProgress, 50); // Small delay to ensure glider state is updated
      });
      
      nextArrow.addEventListener("click", () => {
        setTimeout(updateProgress, 50); // Small delay to ensure glider state is updated
      });
      
      // Handle window resize
      let resizeTimer;
      window.addEventListener("resize", () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
          glider.refresh(true);
          updateProgress();
        }, 250);
      });
      }
      });
      } 
      
      
      
      
              
      if (document.getElementById("success-glider")) {
      window.addEventListener("load", function () {
      var gliderElement = document.querySelector(".success-slider .glider");
      if (gliderElement) {
      new Glider(gliderElement, {
        slidesToShow: 2,
        slidesToScroll: 2,
        draggable: true,
        scrollLock: true,
        duration: 2.25,
        dots: ".success-slider .dots",
        arrows: { 
          prev: "#success-glider .test-prev", 
          next: "#success-glider .test-next" 
        },
        responsive: [
          // Mobile first: 320px and below
          {
            breakpoint: 320,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              duration: 2.25,
            },
          },
          // Tablets: 767px and below
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              duration: 2.25,
            },
          },
          // Laptops: 1024px and below
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              duration: 2.25,
            },
          },
          // Large screens: 1400px and below
          {
            breakpoint: 1400,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              duration: 2.25,
            },
          },
        ],
      });
      }
      });
      }
      
      
      
      
      
             
          
    </script>
  </body>
</html>