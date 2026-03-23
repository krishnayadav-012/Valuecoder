<!-- Main Navigation -->
<header class="master-header " role="banner">

  <nav aria-label="Main navigation">
    <a href="#" class="scroll-logo">
      <img loading="lazy"
        src="https://www.valuecoders.com/wp-content/themes/valuecoders/v4.0/header-images/logo-small.svg"
        alt="Valuecoders" width="80" height="80" class="site-logo-small">
    </a>
    <div class="master-wrapper">
      <div class="header-inner">

        <!-- Mobile Menu Button -->
        <button type="button" id="mobile-menu-open" class="btn-menu-toggle" aria-controls="mobile-menu"
          aria-expanded="false" aria-label="Open navigation menu">
          <i data-lucide="menu" class="size-icon"><svg data-name="Layer 3" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 128 128">
              <path
                d="M97.092 36.078H30.908a2.111 2.111 0 0 0 0 4.222h66.184a2.111 2.111 0 0 0 0-4.222zM97.092 61.889H30.908a2.111 2.111 0 0 0 0 4.222h66.184a2.111 2.111 0 0 0 0-4.222zM97.092 87.7H30.908a2.111 2.111 0 0 0 0 4.222h66.184a2.111 2.111 0 0 0 0-4.222z" />
            </svg></i>
        </button>

        <!-- Logo -->
        <a href="/" class="logo-size">
          <img src="images/index-v10/logo-valucoders.webp"
            alt="ValueCoders Logo" class="site-logo-img">
        </a>

        <!-- Desktop Navigation (L1) -->
        <!-- Buttons generated from MENU_DATA in JS -->
        <ul class="master-menu-desktop" role="menubar" id="desktop-l1-menu">
          <!-- L1 Buttons injected here by JS -->
        </ul>

        <!-- CTA (Mobile Hidden) -->

        <!-- <div class="get-connect">
          <a href="/contact"
            class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-full shadow-sm text-white bg-blue-600 hover:bg-blue-700 transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Get a Free Quote
          </a>
        </div> -->

        <div class="btn-circle get-connect">
          <!-- TEXT -->
          <a href="/contact">
            <span class="text">
              <span class="text-default">Get in Touch</span>
              <span class="text-hover">Get in Touch</span>
            </span>

            <!-- ARROW -->
            <span class="circle">
              <span class="arrow-default"><img src="images/index-v10/move-right.svg" alt=""></span>
              <span class="arrow-hover"><img src="images/index-v10/move-right.svg" alt=""></span>
            </span>
          </a>
        </div>


      </div>
    </div>

    <!-- MEGA MENUS CONTAINER (Desktop Only) -->
    <!-- Menu DOM generated from MENU_DATA in JS -->
    <div class="mega-menu-container hidden lg:block master-mega-menu" id="mega-menu-desktop-container">
      <!-- Mega Menus injected here by JS -->
    </div>
  </nav>
</header>
<div id="mobile-overlay" class="mobile-overlay master-overlays" role="presentation" aria-hidden="true"></div>

<div id="mobile-menu" class="mobile-menu master-menu-mob" role="dialog" aria-modal="true"
  aria-label="Mobile Navigation">
  <div class="mobile-menu-content">
    <h2 class="mobile-text">Menu</h2>
    <button type="button" id="mobile-menu-close" class="menu-clos-btn">
      <i data-lucide="x" class="close-icon-menu"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" data-lucide="x" class="lucide lucide-x w-5 h-5">
          <path d="M18 6 6 18"></path>
          <path d="m6 6 12 12"></path>
        </svg></i>
    </button>
  </div>

  <nav class="menu-wrapper" id="mobile-nav-container" aria-label="Mobile Main Navigation">
    <div class="loading-text">Loading mobile menu...</div>
  </nav>
</div>