<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="alternate" href="https://www.workstatus.io/" hreflang="en-us" />
  <link rel="preload stylesheet" type="text/css" href="assests/css/index-v4.css" defer />
  <link rel="preload" href="assests/fonts/Inter-VariableFont_opsz,wght.woff2" as="font" type="font/woff2" crossorigin />
  <link rel="preload stylesheet" as="style" id="ws-pricing-fltr-css"
    href="https://www.workstatus.io/wp-content/themes/workstatus/pricing-filter.css?ver=1.45.45" media="all" />
  <?php //require_once 'common/inc/header-files.php'; ?>
</head>

<body class="locate-ind">
  <?php //require_once 'common/inc/after-body-tag.php'; ?>
  <div class="feature-header"><?php //require_once 'common/menu-v5.php'; ?></div>
  
  <main>  
  <ul>
      <li><a href="/markup-dom/valuecoders/master/dedicated-components.php">Dadicated Comp</a></li>
      <li><a href="/markup-dom/valuecoders/master/cmp-staff-aug-components.php">Staff Arg</a></li>
      <li><a href="/markup-dom/valuecoders/master/dedicated-components.php">Dadicated Comp</a></li>
      <li><a href="/markup-dom/valuecoders/master/dedicated-components.php">Dadicated Comp</a></li>
  </ul>  
  </main>
  <script src="assests/js/glider.min.js"></script>
  <script src="assests/js/pricing-v6.0.js"></script>
  <script src="assests/js/script.js?var=<?php echo time(); ?>"></script>


  <script>
    // Section 2: Accordion
    function wsPlatToggle(header) {
      var card = header.parentElement;
      var isOpen = card.classList.contains('open');
      document.querySelectorAll('.ws-plat-card').forEach(function (c) { c.classList.remove('open'); });
      if (!isOpen) card.classList.add('open');
    }
  </script>

</html>