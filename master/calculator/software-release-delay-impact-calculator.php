<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Software Release Delay Impact Calculator</title>
    <style>
         .cost-banner {
            padding: 117px 0 80px;
            min-height: initial;
            background: linear-gradient(180deg, #211f47 0, #05164d 100%) !important;
            text-align: center;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
        }
        .animate-fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }
        .animate-slide-up {
            animation: slideUp 0.7s ease-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        /* Custom range slider styling for better UI */
        input[type=range]::-webkit-slider-thumb {
            height: 18px;
            width: 18px;
            border-radius: 50%;
            background: #2563eb;
            cursor: pointer;
            -webkit-appearance: none;
            margin-top: -4px;
        }
    </style>
    <script  src="https://cdn.tailwindcss.com"></script>
    
     <link rel="preload stylesheet" type="text/css" href="../css/index-v8.css" defer />
     <link rel="stylesheet" href="../css/cmn-style.css">
    <link rel="preload stylesheet" type="text/css" href="https://www.valuecoders.com/wp-content/themes/valuecoders/dev-style.css" defer />
    
     <script defer src="../menu.js"></script>
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
</head>

<body class="pb-20">
    <?php require_once '../include/menu-v8.php'; ?>
  <section class="cost-banner">
                <div class="container">
                    <h1>Software Release Delay Impact Calculator</h1>
                    <p>Missed release dates slow revenue, frustrate customers, and increase competitive risk. Quantify the true financial friction of delayed software roadmaps.</p>
                </div>
            </section>
   <div class=" container">
            <?php require_once 'inc/software-release-delay-impact-calculator.php'; ?>
        </div>
    </main>
    
<script src="js/software-release-delay-impact-calculator.js"></script>

</body>

</html>