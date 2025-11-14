 <!-- Main Navigation -->
  <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-gray-200 shadow-sm" role="banner">
    <nav aria-label="Main navigation">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-14">
          
          <!-- Mobile Menu Button -->
          <button type="button" id="mobile-menu-open" class="lg:hidden inline-flex items-center justify-center p-2 rounded-lg text-gray-500 hover:bg-gray-100 transition-colors" aria-controls="mobile-menu" aria-expanded="false" aria-label="Open navigation menu">
            <i data-lucide="menu" class="w-6 h-6"></i>
          </button>
          
          <!-- Logo -->
          <a href="/" class="flex items-center gap-3 group">
            <img src="https://www.valuecoders.com/staging/wp-content/themes/valuecoders/dev-img/logo-valucoders-light.svg" alt="ValueCoders Logo" class="h-8 w-auto group-hover:opacity-80 transition-opacity">
          </a>
          
          <!-- Desktop Navigation (L1) -->
          <!-- Buttons generated from MENU_DATA in JS -->
          <ul class="hidden lg:flex items-center gap-1" role="menubar" id="desktop-l1-menu">
            <!-- L1 Buttons injected here by JS -->
          </ul>
        
          <!-- CTA (Mobile Hidden) -->
          <div class="hidden lg:block">
            <a href="/contact" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-full shadow-sm text-white bg-blue-600 hover:bg-blue-700 transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
              Get a Free Quote
            </a>
          </div>
        </div>
      </div>
      
      <!-- MEGA MENUS CONTAINER (Desktop Only) -->
      <!-- Menu DOM generated from MENU_DATA in JS -->
      <div class="mega-menu-container hidden lg:block" id="mega-menu-desktop-container">
        <!-- Mega Menus injected here by JS -->
      </div>
    </nav>
  </header>
    <div id="mobile-overlay" class="mobile-overlay fixed inset-0 bg-black/50 z-40 opacity-0 invisible transition-opacity duration-300 lg:hidden" role="presentation" aria-hidden="true"></div>
  
  <div id="mobile-menu" class="mobile-menu fixed inset-y-0 left-0 w-80 max-w-[85vw] bg-white shadow-2xl z-40 overflow-y-auto custom-scrollbar lg:hidden" role="dialog" aria-modal="true" aria-label="Mobile Navigation">
    <div class="sticky top-0 bg-white border-b border-gray-200 p-4 flex items-center justify-between z-10">
      <h2 class="text-lg font-bold text-gray-900">Menu</h2>
      <button type="button" id="mobile-menu-close" class="p-2 rounded-lg text-gray-500 hover:bg-gray-100 transition-colors">
        <i data-lucide="x" class="w-5 h-5"></i>
      </button>
    </div>
    
    <nav class="p-4" id="mobile-nav-container" aria-label="Mobile Main Navigation">
      <div class="text-gray-500 text-sm p-4 text-center">Loading mobile menu...</div>
    </nav>
  </div>