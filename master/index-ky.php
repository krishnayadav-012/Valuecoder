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
    :root {
      /* Replaces the hardcoded 65vh for easy, central customization */
      --mega-menu-height: 65vh; 
      --color-primary: 37 99 235; /* blue-600 */
      --color-active: 59 130 246; /* blue-500 */
    }

    @keyframes fadeInSlideDown {
      from { opacity: 0; transform: translateY(-8px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInSlideUp {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    * {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
    
    /* ---------------------------------- */
    /* 1. Mega Menu Desktop Transitions   */
    /* ---------------------------------- */
    .mega-menu {
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      z-index: 50;
      visibility: hidden;
      opacity: 0;
      /* Optimized transitions: transform and opacity only */
      transform: translateY(-8px) scale(0.98); 
      transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s;
    }
    .mega-menu.is-open {
      visibility: visible;
      opacity: 1;
      transform: translateY(0) scale(1);
    }
    
    /* ---------------------------------- */
    /* 2. L1 Link Base Style              */
    /* ---------------------------------- */
    .nav-item-base {
      padding: 0.5rem 0.75rem;
      border-radius: 0.5rem;
      font-size: 0.875rem; 
      font-weight: 500;
      transition: color 0.15s, background-color 0.15s;
      color: #4b5563; /* Gray-600 */
    }
    .nav-item-base:hover, .nav-item-base.is-expanded {
      background-color: #f3f4f6; /* Gray-100 */
      color: #111827; /* Gray-900 */
    }
    /* Set focus-visible outline only on L1 link, not internal menu items */
    .nav-item-base:focus-visible {
        outline: 2px solid rgb(var(--color-primary));
        outline-offset: 2px;
    }

    /* ---------------------------------- */
    /* 3. L2 Sidebar Styles               */
    /* ---------------------------------- */
    .l2-menu-item-btn {
      transition: all 0.15s ease;
      color: #4b5563; /* Default color for a non-selected state */
    }
    /* L2 Hover/Focus State: Padding Shift */
    .l2-menu-item:hover .l2-menu-item-btn,
    .l2-menu-item:focus-within .l2-menu-item-btn {
      padding-left: 1.125rem;
      transition: padding-left 0.2s ease;
    }
    /* L2 Active State: Indicator Bar */
    .l2-item-active {
      position: relative;
      background-color: #ffffff; 
    }
    .l2-item-active .l2-menu-item-btn {
        color: rgb(var(--color-primary)); 
    }
    /* Indicator Bar Style */
    .l2-item-active .l2-menu-item-btn::before, 
    .l2-menu-item:hover .l2-menu-item-btn::before,
    .l2-menu-item:focus-within .l2-menu-item-btn::before {
      content: '';
      position: absolute;
      left: 0;
      top: 50%;
      transform: translateY(-50%);
      height: 60%;
      width: 3px;
      background: rgb(var(--color-primary)); 
      border-radius: 0 2px 2px 0;
      visibility: visible;
    }
    .l2-menu-item-btn::before {
      visibility: hidden;
    }

    /* ---------------------------------- */
    /* 4. L3 Link Hover Effect & Arrow Fix (Fix 4) */
    /* ---------------------------------- */
    .link-hover-effect {
      position: relative; 
      transition: all 0.15s cubic-bezier(0.4, 0, 0.2, 1);
      display: inline-block;
      padding: 0.25rem 0.5rem;
      box-sizing: border-box;
      border-radius: 4px;
    }
    .link-hover-effect::after {
      content: '';
      position: absolute;
      bottom: 2px; 
      left: 0.5rem; 
      height: 2px; 
      width: 0; 
      background-color: rgb(var(--color-primary)); 
      transition: width 0.2s ease-out;
    }
    .link-hover-effect:hover, .link-hover-effect:focus-visible {
      transform: translateX(3px); 
      outline: none; /* Handled by pseudo-element */
    }
    .link-hover-effect:hover::after, .link-hover-effect:focus-visible::after {
      width: calc(100% - 1rem);
    }
    
    /* FIX 4: Canonical Header Link Styling - Removed space-between, now rely on Tailwind flex gap */
    .canonical-arrow {
        transition: transform 0.2s, color 0.2s; /* Apply transition here for smooth effect */
    }
    .canonical-header-link:hover .canonical-arrow, 
    .canonical-header-link:focus-visible .canonical-arrow {
        transform: rotate(-45deg); 
    }
    
    /* Cross-Link Styling fix for width consistency */
    .action-hub a.link-hover-effect {
      /* Ensure action links are still formatted nicely, but this block is now skipped for Industries (Fix 3) */
      display: inline-flex;
      width: auto;
      max-width: max-content;
      align-self: flex-start;
      margin-top: 0.5rem;
    }
    .cross-link-box {
      border-top: 1px solid #e5e7eb; 
      padding-top: 0.5rem;
      margin-top: 1.5rem;
    }

    /* ---------------------------------- */
    /* 5. L3 Tab Button Styles            */
    /* ---------------------------------- */
    .tab-btn-base {
      padding: 0.75rem 0.25rem;
      border-bottom: 2px solid transparent;
      font-size: 0.875rem;
      font-weight: 500;
      transition: all 0.15s ease;
      color: #64748b; /* Slate-500 */
    }
    /* IMPORTANT: Remove grey background rollover */
    .tab-btn-base:hover, .tab-btn-base:focus-visible {
      color: #1e293b; /* Slate-800 */
      border-bottom-color: #cbd5e1; /* Slate-300 */
      background-color: transparent; 
      outline: none;
    }
    .tab-btn-base.is-active {
      color: rgb(var(--color-active)); /* Blue-500 */
      border-bottom-color: rgb(var(--color-active));
    }
    /* Add focus style for L3 tabs */
    .tab-btn-base:focus-visible {
        outline: 2px solid rgb(var(--color-primary));
        outline-offset: 2px;
    }
    /* Remove focus ring on L2 buttons */
    .l2-menu-item-btn:focus-visible {
        outline: none;
    }


    /* ---------------------------------- */
    /* 6. L3 Content Animation & Grid     */
    /* ---------------------------------- */
    .l3-content-panel.is-active .grid > div {
      opacity: 0;
      animation: fadeInSlideUp 0.3s ease-out forwards;
    }
    /* Apply staggered delay to columns */
    .l3-content-panel.is-active .grid > div:nth-child(1) { animation-delay: 0.0s; }
    .l3-content-panel.is-active .grid > div:nth-child(2) { animation-delay: 0.05s; }
    .l3-content-panel.is-active .grid > div:nth-child(3) { animation-delay: 0.1s; }
    .l3-content-panel.is-active .grid > div:nth-child(4) { animation-delay: 0.15s; }
    
    /* ---------------------------------- */
    /* 7. Mobile Menu & Scrollbar (Fix 1: Mobile L1 Spacing is now handled by class 'gap-3' in JS) */
    /* ---------------------------------- */
    .mobile-menu {
      transform: translateX(-100%);
      transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .mobile-menu.is-open {
      transform: translateX(0);
    }
    .mobile-overlay.is-open {
      opacity: 100;
      visibility: visible;
    }
    .mobile-icon.is-open {
        transform: rotate(180deg);
    }
    /* Custom Scrollbar */
    .custom-scrollbar { scroll-behavior: smooth; }
    .custom-scrollbar::-webkit-scrollbar { width: 6px; height: 6px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
    .custom-scrollbar::-webkit-scrollbar-thumb { 
      background: rgb(209 213 219 / 0.5); 
      border-radius: 3px; 
    }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: rgb(156 163 175 / 0.7); }

    /* Mobile Viewport Height Fix */
    @supports (-webkit-touch-callout: none) {
      .mobile-menu { min-height: -webkit-fill-available; }
    }
  </style>
  </head>
  <body>
    <?php require_once './include/menu-v8.php'; ?>
    <section class="contact-us-section padding-t-120 padding-b-120">
      <?php require_once 'include/contact-form.php'; ?>
    </section>
    <?php require_once 'include/footer.php'; ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="menu.js"></script>
    
    
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