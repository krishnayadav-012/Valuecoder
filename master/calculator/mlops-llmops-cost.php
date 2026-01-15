<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLOps / LLMOps Cost Calculator</title>
    <style>
        .cost-banner {
            padding: 117px 0 80px;
            min-height: initial;
            background: linear-gradient(180deg, #211f47 0, #05164d 100%) !important;
            text-align: center;
        }

        .bg-gradient-primary {
            background: linear-gradient(135deg, #020381 0%, #2874fc 100%);
        }

        .cost-banner h1 {
            font-size: 60px;
            line-height: 1.3;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .cost-banner p {
            font-size: 18px;
            line-height: 28px;
            color: #ffffff;
            margin-bottom: 0;
            font-weight: 400;
        }

        .faq-section h2 {
            font-size: 42px;
            line-height: 60px;
            font-weight: 700;
            color: #110302;
        }

        .faq-section p {
            color: #4B5563;
        }

        @media only screen and (max-width: 767px) {
           .cost-banner h1 {
                font-size: 40px;
                line-height: 50px;
            }

            .faq-section h2 {
                font-size: 28px;
                line-height: 37px;
            }

        }
        
    </style>
    <link rel="preload stylesheet" type="text/css" href="../css/index-v8.css" defer />
    <link rel="preload stylesheet" type="text/css"
        href="https://www.valuecoders.com/wp-content/themes/valuecoders/dev-style.css" defer />
    <link rel="preload stylesheet" type="text/css" href="css/contact-v10.css" defer />
    <!-- SEO Structured Data -->
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

    <script defer src="../menu.js"></script>
    <script defer src="../js/intlTelInput-17.0.min.js"></script>
    <script defer src="../js/form-validation-v10.js"></script>

</head>

<body class="pb-20">
    <?php require_once '../include/menu-v8.php'; ?>
    <section class="cost-banner">
        <div class="container">
            <h1>AI Integration &amp; Scalability Cost Calculator</h1>
            <p>Estimate one-time setup and monthly run costs to connect AI to your apps, data, and users – built
                to scale safely.</p>
        </div>
    </section>

    <div class=" container">
        <?php require_once 'inc/mlops-llmops-cost.php'; ?>
    </div>

    </main>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/mlops-llmops-cost.js"></script>

</body>

</html>