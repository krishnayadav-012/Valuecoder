<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>App Modernization Cost Estimator</title>
    <script src="https://cdn.tailwindcss.com"></script>
   
    
    
     <style>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgb(6,147,227) 0%,rgb(155,81,224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgb(252,185,0) 0%,rgb(255,105,0) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgb(255,105,0) 0%,rgb(207,46,46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        }
        body { font-family: 'Inter', sans-serif; background: var(--wp--preset--color--white); scroll-behavior: smooth; }
        .theme-shadow-natural { box-shadow: var(--wp--preset--shadow--natural); }
        .theme-shadow-deep { box-shadow: var(--wp--preset--shadow--deep); }
        .hidden { display: none; }
    </style>
    <link rel="preload stylesheet" type="text/css" href="./css/index-v8.css" defer />

    <link rel="preload stylesheet" type="text/css" href="assets/form-county.css" defer />
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


    <script defer src="menu.js"></script>
    <script defer src="js/intlTelInput-17.0.min.js"></script>
    <script defer src="js/form-validation-v10.js"></script>
</head>

<body>
    <?php require_once './include/menu-v8.php'; ?>

      <div class="min-h-screen">
        <!-- HERO SECTION -->
        <div class="bg-white border-b overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 py-28 sm:px-6 lg:px-8 text-center relative">
                <div class="inline-flex items-center space-x-2 px-4 py-1.5 rounded-full text-sm font-semibold mb-6"
                     style="background-color: var(--wp--preset--color--pale-cyan-blue); color: var(--wp--preset--color--vivid-cyan-blue);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    <span>Modernize with Confidence</span>
                </div>
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-6" style="color: var(--wp--preset--color--black);">
                    Application Modernization <br/>
                    <span style="color: var(--wp--preset--color--vivid-cyan-blue);">Cost Estimator</span>
                </h1>
                <p class="max-w-2xl mx-auto text-xl mb-10 leading-relaxed text-slate-600">
                    Estimate the cost of rehosting, refactoring, or rebuilding your legacy system — based on your app size, tech stack age, and target architecture.
                </p>
                
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12">
                    <button onclick="document.getElementById('calculator-section').scrollIntoView({behavior:'smooth'})"
                            class="w-full sm:w-auto px-8 py-4 text-white font-bold rounded-lg transition-all flex items-center justify-center gap-2 theme-shadow-natural hover:opacity-90 active:scale-95"
                            style="background: var(--wp--preset--gradient--midnight);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="16" height="20" x="4" y="2" rx="2"/><line x1="8" x2="16" y1="6" y2="6"/><line x1="16" x2="16" y1="14" y2="18"/><path d="M16 10h.01"/><path d="M12 10h.01"/><path d="M8 10h.01"/><path d="M12 14h.01"/><path d="M8 14h.01"/><path d="M12 18h.01"/><path d="M8 18h.01"/></svg>
                        Calculate My Modernization Cost
                    </button>
                    <button class="w-full sm:w-auto px-8 py-4 bg-white font-bold border rounded-lg transition-colors flex items-center justify-center gap-2"
                            style="borderColor: var(--wp--preset--color--cyan-bluish-gray); color: var(--wp--preset--color--black);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                        Talk to a Solution Architect
                    </button>
                </div>

                <div class="flex flex-wrap justify-center gap-6 font-medium text-sm text-slate-500">
                    <div class="flex items-center gap-2">
                        <svg style="color: var(--wp--preset--color--vivid-green-cyan);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Reduce tech debt risk
                    </div>
                    <div class="flex items-center gap-2">
                        <svg style="color: var(--wp--preset--color--vivid-green-cyan);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> Improve scalability and performance
                    </div>
                </div>
            </div>
    </div>

        <!-- FEATURES SECTION -->
        <section class="py-16 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl font-bold text-center mb-12" style="color: var(--wp--preset--color--black);">What you’ll get from this tool</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-xl theme-shadow-natural">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background-color: var(--wp--preset--color--pale-cyan-blue); color: var(--wp--preset--color--vivid-cyan-blue);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M18 17V9"/><path d="M13 17V5"/><path d="M8 17v-3"/></svg>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Estimated cost ranges</h3>
                        <p class="text-slate-500 text-sm">Deep comparison between Rehost, Refactor, and Rebuild strategies.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl theme-shadow-natural">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background-color: var(--wp--preset--color--pale-pink); color: var(--wp--preset--color--vivid-red);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Timeline signals</h3>
                        <p class="text-slate-500 text-sm">Go-to-market estimation for each modernization path.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl theme-shadow-natural">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background-color: var(--wp--preset--color--light-green-cyan); color: var(--wp--preset--color--vivid-green-cyan);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Recommended path</h3>
                        <p class="text-slate-500 text-sm">Architectural guidance based on your current technical debt.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- INPUTS SECTION -->
        <main id="calculator-section" class="max-w-4xl mx-auto px-4 py-20">
            <form id="calc-form" class="bg-white rounded-2xl theme-shadow-deep overflow-hidden">
                <div class="p-8 border-b bg-slate-50">
                    <h2 class="text-2xl font-bold" style="color: var(--wp--preset--color--black);">Tell us about your application</h2>
                    <p class="text-slate-500 mt-1">Provide project details to refine the accuracy of the estimate.</p>
                </div>

                <div class="p-8 space-y-12">
                    <!-- Application Scope -->
                    <div>
                        <div class="flex items-center gap-2 mb-6">
                            <div class="w-8 h-8 rounded-full text-white flex items-center justify-center text-sm font-bold" style="background: var(--wp--preset--gradient--midnight);">A</div>
                            <h3 class="text-lg font-bold text-slate-800">Application Scope</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1">Number of modules</label>
                                <input type="number" id="modules" value="5" class="w-full px-4 py-2 rounded-lg border focus:ring-2 focus:outline-none" style="borderColor: var(--wp--preset--color--cyan-bluish-gray);">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1">Lines of code (estimate)</label>
                                <input type="number" id="loc" value="50000" class="w-full px-4 py-2 rounded-lg border focus:ring-2 focus:outline-none" style="borderColor: var(--wp--preset--color--cyan-bluish-gray);">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-semibold text-slate-700 mb-1">Number of integrations</label>
                                <input type="number" id="integrations" value="3" class="w-full px-4 py-2 rounded-lg border focus:ring-2 focus:outline-none" style="borderColor: var(--wp--preset--color--cyan-bluish-gray);">
                            </div>
                        </div>
                    </div>

                    <!-- Tech & Age -->
                    <div>
                        <div class="flex items-center gap-2 mb-6">
                            <div class="w-8 h-8 rounded-full text-white flex items-center justify-center text-sm font-bold" style="background: var(--wp--preset--gradient--midnight);">B</div>
                            <h3 class="text-lg font-bold text-slate-800">Current Stack & Age</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1">Primary stack</label>
                                <select id="techStack" class="w-full px-4 py-2 rounded-lg border bg-white" style="borderColor: var(--wp--preset--color--cyan-bluish-gray);">
                                    <option value="Java">Java</option>
                                    <option value=".NET">.NET</option>
                                    <option value="Node">Node.js</option>
                                    <option value="COBOL">COBOL</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1">System Age</label>
                                <select id="systemAge" class="w-full px-4 py-2 rounded-lg border bg-white" style="borderColor: var(--wp--preset--color--cyan-bluish-gray);">
                                    <option value="0-3">0-3 Years</option>
                                    <option value="3-5" selected>3-5 Years</option>
                                    <option value="5-10">5-10 Years</option>
                                    <option value="10+">10+ Years</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Target Arch -->
                    <div>
                        <div class="flex items-center gap-2 mb-6">
                            <div class="w-8 h-8 rounded-full text-white flex items-center justify-center text-sm font-bold" style="background: var(--wp--preset--gradient--midnight);">C</div>
                            <h3 class="text-lg font-bold text-slate-800">Target Architecture</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1">Desired Architecture</label>
                                <select id="desiredArchitecture" class="w-full px-4 py-2 rounded-lg border bg-white" style="borderColor: var(--wp--preset--color--cyan-bluish-gray);">
                                    <option value="Monolith">Monolith</option>
                                    <option value="Containers" selected>Containers</option>
                                    <option value="Microservices">Microservices</option>
                                    <option value="Serverless">Serverless</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1">Cloud Readiness</label>
                                <select id="cloudReadiness" class="w-full px-4 py-2 rounded-lg border bg-white" style="borderColor: var(--wp--preset--color--cyan-bluish-gray);">
                                    <option value="Not Ready">Not Ready</option>
                                    <option value="Partial" selected>Partial</option>
                                    <option value="Containerized">Containerized</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <button type="submit" class="w-full py-4 text-white font-bold rounded-xl transition-all flex items-center justify-center gap-2 theme-shadow-deep active:scale-95 hover:opacity-90"
                                style="background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple);">
                            Calculate Estimated Costs 
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                        </button>
                    </div>
                </div>
            </form>
        </main>

        <!-- RESULTS SECTION -->
        <section id="results-section" class="max-w-7xl mx-auto px-4 py-20 hidden">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold mb-4" style="color: var(--wp--preset--color--black);">Estimated Modernization Cost</h2>
                <p class="text-slate-500">Comparative budget analysis for your application scope.</p>
            </div>

            <div id="cards-container" class="grid md:grid-cols-3 gap-8 mb-16">
                <!-- Cards injected via JS -->
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <h2 class="text-3xl font-bold" style="color: var(--wp--preset--color--black);">Expert Recommendation</h2>
                    <p class="text-lg text-slate-600 leading-relaxed">
                        Based on your inputs, <span class="font-bold" style="color: var(--wp--preset--color--vivid-cyan-blue);">Refactoring</span> offers the best balance of cost, risk, and long-term flexibility. 
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full flex items-center justify-center" style="background-color: var(--wp--preset--color--light-green-cyan);">
                                <svg style="color: var(--wp--preset--color--vivid-green-cyan);" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <span class="text-slate-700 font-medium">Balanced immediate cost vs long-term value</span>
                        </div>
                    </div>
                </div>

                <div class="p-10 rounded-3xl text-white theme-shadow-deep" style="background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple);">
                    <h3 class="text-2xl font-bold mb-4">Ready for a deeper dive?</h3>
                    <p class="mb-8 opacity-90">Get a custom modernization assessment from our senior solutions architects.</p>
                    <button class="w-full py-4 bg-white font-black rounded-xl text-blue-600 shadow-xl hover:opacity-90 transition-all">
                        Get a Detailed Plan
                    </button>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="py-12 mt-20" style="background-color: var(--wp--preset--color--cyan-bluish-gray); color: var(--wp--preset--color--white);">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <p class="font-medium">© 2024 ModernizeIT Labs. All Rights Reserved.</p>
            </div>
        </footer>
    </div>

    <script>
        const form = document.getElementById('calc-form');
        const resultsSection = document.getElementById('results-section');
        const cardsContainer = document.getElementById('cards-container');

        const formatCurrency = (val) => 
            new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD', maximumFractionDigits: 0 }).format(val);

        const calculateEstimates = (inputs) => {
            const BASE_UNIT_COST = 5000;
            const sizeFactor = (inputs.modules * 1.5) + (inputs.integrations * 2.5);
            
            const techMultipliers = { 'Java': 1.1, '.NET': 1.1, 'Node': 1.0, 'COBOL': 2.5, 'Other': 1.3 };
            const ageMultipliers = { '0-3': 1.0, '3-5': 1.2, '5-10': 1.5, '10+': 2.0 };
            const archMultipliers = { 'Monolith': 1.0, 'Containers': 1.3, 'Microservices': 1.8, 'Serverless': 2.2 };
            
            const cloudDiscount = inputs.cloudReadiness === 'Containerized' ? 0.85 : (inputs.cloudReadiness === 'Partial' ? 0.95 : 1.1);
            const globalMultiplier = (techMultipliers[inputs.techStack] || 1) * (ageMultipliers[inputs.systemAge] || 1) * cloudDiscount;

            const rehostBase = BASE_UNIT_COST * sizeFactor * 0.5 * globalMultiplier;
            const refactorBase = BASE_UNIT_COST * sizeFactor * 1.2 * globalMultiplier * (archMultipliers[inputs.desiredArchitecture] || 1);
            const rebuildBase = BASE_UNIT_COST * sizeFactor * 2.5 * globalMultiplier * (archMultipliers[inputs.desiredArchitecture] || 1);

            return [
                { strategy: 'Rehost', min: rehostBase * 0.8, max: rehostBase * 1.2, time: Math.ceil(sizeFactor * 0.2), icon: '🚚', desc: 'Minimal changes, quick move.' },
                { strategy: 'Refactor', min: refactorBase * 0.8, max: refactorBase * 1.4, time: Math.ceil(sizeFactor * 0.5), icon: '🛠️', desc: 'Cloud-optimized code.', featured: true },
                { strategy: 'Rebuild', min: rebuildBase * 0.9, max: rebuildBase * 1.6, time: Math.ceil(sizeFactor * 1.0), icon: '🏗️', desc: 'Modern ground-up rewrite.' }
            ];
        };

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const inputs = {
                modules: parseInt(document.getElementById('modules').value) || 0,
                integrations: parseInt(document.getElementById('integrations').value) || 0,
                techStack: document.getElementById('techStack').value,
                systemAge: document.getElementById('systemAge').value,
                desiredArchitecture: document.getElementById('desiredArchitecture').value,
                cloudReadiness: document.getElementById('cloudReadiness').value
            };

            const estimates = calculateEstimates(inputs);
            
            cardsContainer.innerHTML = estimates.map((est, idx) => `
                <div class="relative p-8 rounded-2xl border transition-all hover:scale-105 ${est.featured ? 'theme-shadow-deep scale-105 z-10' : 'bg-white theme-shadow-natural'}"
                     style="${est.featured ? 'border-color: var(--wp--preset--color--vivid-cyan-blue);' : 'border-color: transparent;'}">
                    ${est.featured ? `<div class="absolute -top-4 left-1/2 -translate-x-1/2 text-white px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest" style="background: var(--wp--preset--gradient--midnight);">Recommended</div>` : ''}
                    <div class="text-4xl mb-4">${est.icon}</div>
                    <h3 class="text-2xl font-bold mb-2" style="color: var(--wp--preset--color--black);">${est.strategy}</h3>
                    <p class="text-slate-500 text-sm mb-6">${est.desc}</p>
                    <div class="text-3xl font-black mb-4" style="color: var(--wp--preset--color--black);">
                        ${formatCurrency(est.min)} <span class="text-slate-300 text-xl font-medium">–</span> ${formatCurrency(est.max)}
                    </div>
                    <div class="flex items-center gap-2 text-sm font-bold text-slate-700 border-t pt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        ~${est.time} Months
                    </div>
                </div>
            `).join('');

            resultsSection.classList.remove('hidden');
            setTimeout(() => {
                resultsSection.scrollIntoView({ behavior: 'smooth' });
            }, 100);
        });
    </script>
</body>

</html>