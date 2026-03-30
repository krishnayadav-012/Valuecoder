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
  <link rel="preload stylesheet" type="text/css" href="./css/services-components.css" defer />
  <link rel="preload stylesheet" type="text/css" href="./css/trusted-badge.css" defer />
  <link rel="preload stylesheet" type="text/css"
    href=" https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.1/css/glide.core.css" defer />
  <script>
    var vcObj = {
      "_version": "1763614476",
      "tpl_url": "http://localhost/markup-dom/valuecoders/master",
      "web_url": "http://localhost/markup-dom/valuecoders/master",
      "admin_ajax": "https://www.valuecoders.com/staging/wp-admin/admin-ajax.php",
      "page_tpl": "tpl-homev6.0.php",
      "is_mobile": "false",
      "_env": "staging",
      "_v3_blog_post": "",
      "_post_id": "19655",
      "_cs_data": null,
      "_blog_tag": ""
    };
  </script>

  <script defer src="menu.js"></script>
</head>

<body>
  <?php require_once './include/menu-v8.php'; ?>

  <main>
    <h1>services Componenet</h1>











  </main>
  <?php require_once 'include/footer.php'; ?>
  <?php require_once 'js/master-components.js'; ?>



  <script>

    function daToggle(btn) {
      var item = btn.closest('.da-acc-item');
      var isOpen = item.classList.contains('is-open');
      document.querySelectorAll('.da-section .da-acc-item').forEach(function (el) {
        el.classList.remove('is-open');
        el.querySelector('.da-trigger').setAttribute('aria-expanded', 'false');
      });
      if (!isOpen) {
        item.classList.add('is-open');
        btn.setAttribute('aria-expanded', 'true');
      }
    }

    (function () {
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
          if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
        });
      }, { threshold: 0.07 });
      document.querySelectorAll('.da-section .da-rev').forEach(function (el) { io.observe(el); });
    })();



    // `````````````````````````````````````````````what we deliver``````````````````````````````````````````````````````````````````````````````````````

    /* Scroll reveal — scoped to .wwd-section */
    const revealObs = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (!e.isIntersecting) return;
        e.target.classList.add('is-visible');
        revealObs.unobserve(e.target);
      });
    }, { threshold: 0.1 });

    document.querySelectorAll('.wwd-section .reveal').forEach(el => revealObs.observe(el));

    /* Trust strip shimmer — scoped to .wwd-section */
    const shimmerObs = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (!e.isIntersecting) return;
        e.target.querySelectorAll('[data-shimmer]').forEach((num, i) => {
          setTimeout(() => num.classList.add('shimmer-active'), i * 80);
        });
        shimmerObs.unobserve(e.target);
      });
    }, { threshold: 0.3 });

    document.querySelectorAll('.wwd-section .stat-strip-wrap').forEach(el => shimmerObs.observe(el));

// ``````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````
  
/**
 * Types of Services Section — JS
 * Scoped 100% to .types-of-services-section
 * Will NOT touch or affect any other section on the page
 */

(function () {
  'use strict';

  // ─────────────────────────────────────────────
  //  Wait for DOM to be fully parsed before
  //  running any querySelector calls
  // ─────────────────────────────────────────────
  function init() {

    // ── Guard: exit immediately if section doesn't exist ──
    var section = document.querySelector('.types-of-services-section');
    if (!section) { return; }

    // ─────────────────────────────────────────────
    //  TABS
    // ─────────────────────────────────────────────
    var tabs      = section.querySelectorAll('.tab[data-tab]');
    var tabPanels = section.querySelectorAll('.tab-panel');

    // Guard: only run if tabs exist
    if (tabs.length > 0) {

      function activateTab(clickedTab) {
        var key = clickedTab.getAttribute('data-tab');

        // Deactivate every tab
        tabs.forEach(function (t) {
          t.classList.remove('is-active');
          t.setAttribute('aria-selected', 'false');
        });

        // Hide every panel
        tabPanels.forEach(function (p) {
          p.classList.remove('is-active');
        });

        // Activate the clicked tab
        clickedTab.classList.add('is-active');
        clickedTab.setAttribute('aria-selected', 'true');

        // Show its matching panel — only look inside section
        var targetPanel = section.querySelector('#panel-' + key);
        if (targetPanel) {
          targetPanel.classList.add('is-active');
        }
      }

      tabs.forEach(function (tab) {

        // Click handler
        tab.addEventListener('click', function () {
          activateTab(tab);
        });

        // Keyboard: ArrowLeft / ArrowRight / Home / End
        tab.addEventListener('keydown', function (e) {
          var list     = Array.prototype.slice.call(tabs);
          var idx      = list.indexOf(tab);
          var next     = idx;

          if      (e.key === 'ArrowRight') { next = (idx + 1) % list.length; }
          else if (e.key === 'ArrowLeft')  { next = (idx - 1 + list.length) % list.length; }
          else if (e.key === 'Home')       { next = 0; }
          else if (e.key === 'End')        { next = list.length - 1; }
          else { return; }

          e.preventDefault();
          list[next].focus();
          activateTab(list[next]);
        });

      });

    } // end tabs guard

    // ─────────────────────────────────────────────
    //  ACCORDION
    //  Scoped per-panel: only one item open at a time
    //  inside each tab panel.
    //  Works on ALL panels (including hidden ones)
    //  because we attach listeners at init, not on click.
    // ─────────────────────────────────────────────
    var accTriggers = section.querySelectorAll('.acc-trigger');

    // Guard: only run if accordion triggers exist
    if (accTriggers.length > 0) {

      accTriggers.forEach(function (trigger) {

        trigger.addEventListener('click', function (e) {
          // Stop this click from bubbling to any parent handlers
          e.stopPropagation();

          var clickedItem = trigger.parentElement; // .acc-item is direct parent of .acc-trigger
          if (!clickedItem || !clickedItem.classList.contains('acc-item')) {
            // Fallback: walk up to find .acc-item
            clickedItem = trigger.closest('.acc-item');
          }
          if (!clickedItem) { return; }

          var wasOpen = clickedItem.classList.contains('is-open');

          // Find sibling acc-items — walk up to .accordion wrapper
          var accordion = clickedItem.parentElement;
          if (!accordion) { return; }

          // Close every item in this accordion
          var siblings = accordion.querySelectorAll('.acc-item');
          siblings.forEach(function (item) {
            item.classList.remove('is-open');
            var trig = item.querySelector('.acc-trigger');
            if (trig) { trig.setAttribute('aria-expanded', 'false'); }
          });

          // If item was closed, open it now
          if (!wasOpen) {
            clickedItem.classList.add('is-open');
            trigger.setAttribute('aria-expanded', 'true');
          }
          // If item was already open → stays closed (toggle off)
        });

      });

    } // end accordion guard

    // ─────────────────────────────────────────────
    //  SCROLL REVEAL
    //  One-shot IntersectionObserver, respects
    //  prefers-reduced-motion
    // ─────────────────────────────────────────────
    var revealEls = section.querySelectorAll('.reveal');

    if (revealEls.length > 0) {

      var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

      if (prefersReduced) {
        // Show immediately — skip animation
        revealEls.forEach(function (el) {
          el.classList.add('is-visible');
        });
      } else if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-visible');
              observer.unobserve(entry.target); // fire once only
            }
          });
        }, { threshold: 0.08 });

        revealEls.forEach(function (el) {
          observer.observe(el);
        });
      } else {
        // Fallback for old browsers — show all immediately
        revealEls.forEach(function (el) {
          el.classList.add('is-visible');
        });
      }

    } // end reveal guard

  } // end init()

  // ─────────────────────────────────────────────
  //  Run init after DOM is ready
  //  Handles both: script in <head> and script at
  //  bottom of <body>
  // ─────────────────────────────────────────────
  if (document.readyState === 'loading') {
    // DOM not yet parsed — wait for it
    document.addEventListener('DOMContentLoaded', init);
  } else {
    // DOM already parsed (script is at bottom of body)
    init();
  }

})();



// ````````````````````````````````````````_cmp-compliance-security start````````````````````````````````````````````````````````````````

 

// <!-- =====================================================
//      JS — Fully IIFE-scoped
//      All selectors run on ROOT (.vc-cs) only
//      Zero global variables / zero impact on other sections
//      ===================================================== -->

(function () {
  'use strict';
 
  /* Guard: only run if this section is in the DOM */
  var ROOT = document.querySelector('.vc-cs');
  if (!ROOT) return;
 
  /* ── ACCORDION ── */
  function vcCsToggle(item) {
    var accordion = item.closest('.vc-cs__accordion');
    if (!accordion) return;
 
    var isOpen = item.classList.contains('is-open');
 
    /* Close all siblings in the same accordion */
    accordion.querySelectorAll('.vc-cs__acc-item').forEach(function (el) {
      el.classList.remove('is-open');
      var btn = el.querySelector('.vc-cs__acc-trigger');
      if (btn) btn.setAttribute('aria-expanded', 'false');
    });
 
    /* Open if it was closed */
    if (!isOpen) {
      item.classList.add('is-open');
      var btn = item.querySelector('.vc-cs__acc-trigger');
      if (btn) btn.setAttribute('aria-expanded', 'true');
    }
  }
 
  /* Click on trigger button */
  ROOT.querySelectorAll('.vc-cs__acc-trigger').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.stopPropagation(); /* prevent bubbling to any parent handlers */
      vcCsToggle(btn.closest('.vc-cs__acc-item'));
    });
 
    /* Keyboard: Enter / Space */
    btn.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        vcCsToggle(btn.closest('.vc-cs__acc-item'));
      }
    });
  });
 
  /* ── SCROLL REVEAL ── */
  if ('IntersectionObserver' in window) {
    var vcCsIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          vcCsIO.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08 });
 
    ROOT.querySelectorAll('.vc-cs__reveal').forEach(function (el) {
      vcCsIO.observe(el);
    });
  } else {
    /* Fallback for very old browsers */
    ROOT.querySelectorAll('.vc-cs__reveal').forEach(function (el) {
      el.classList.add('is-visible');
    });
  }
 
}());
  </script>
  

</body>

</html>