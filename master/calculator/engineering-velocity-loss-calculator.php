
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>engineering-velocity-loss-calculator</title>
    <style>
        body {
            background-color: #f8fafc;
            scroll-behavior: smooth;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type=number] {
            -moz-appearance: textfield;
        }
        .fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .accent-blue { accent-color: #2563eb; }
        .accent-rose { accent-color: #f43f5e; }
        .cost-banner {
            padding: 117px 0 80px;
            min-height: initial;
            background: linear-gradient(180deg, #211f47 0, #05164d 100%) !important;
            text-align: center;
        }

    </style>

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

        <script type="importmap">
{
  "imports": {
    "react": "https://esm.sh/react@^19.2.4",
    "react-dom/": "https://esm.sh/react-dom@^19.2.4/",
    "lucide-react": "https://esm.sh/lucide-react@^0.574.0",
    "react/": "https://esm.sh/react@^19.2.4/",
    "recharts": "https://esm.sh/recharts@^3.7.0"
  }
}
</script>

</head>

<body class="pb-20">
      <?php require_once '../include/menu-v8.php'; ?>

    <section class="cost-banner">
        <div class="container">
            <h1>AI Integration &amp; Scalability Cost Calculator</h1>

            <p>Estimate one-time setup and monthly run costs to connect AI to your apps, data, and users – built to scale safely.</p>

        </div>
    </section>

    <div class=" container">
        <?php require_once 'inc/engineering-velocity-loss-calculator.php'; ?>
    </div>

    </main>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="js/engineering-velocity-loss-calculator.js"></script>

    

</body>
</html>
