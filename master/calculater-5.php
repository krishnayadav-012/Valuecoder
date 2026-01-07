<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Agent ROI Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <style>
        [x-cloak] { display: none !important; }
        .gradient-bg { background: linear-gradient(135deg, #020381 0%, #2874fc 100%); }
        input[type="range"] { accent-color: #2563eb; }
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

<body class="bg-slate-50 text-slate-900 font-sans" x-data="roiCalculator()">
    <?php require_once './include/menu-v8.php'; ?>


     <section class="gradient-bg text-white py-20 px-4 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-400 opacity-10 rounded-full -mr-20 -mt-20 blur-3xl"></div>
        <div class="max-w-6xl mx-auto text-center relative z-10">
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full mb-6 text-sm font-medium border border-white/20">
                <i data-lucide="zap" class="w-4 h-4 text-yellow-400"></i>
                <span>Maximize Efficiency with AI Agents</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight">
                AI Agent Automation <br />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-blue-200">
                    ROI Calculator
                </span>
            </h1>
            <p class="text-lg md:text-xl text-blue-100 mb-10 max-w-2xl mx-auto opacity-90">
                Estimate savings, payback period, and financial impact before building your AI agent. Get data-backed projections in seconds.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <button @click="document.getElementById('calculator').scrollIntoView({behavior: 'smooth'})" 
                    class="px-8 py-4 bg-white text-blue-900 font-bold rounded-xl shadow-lg hover:bg-blue-50 transition-all flex items-center gap-2 group">
                    👉 Calculate ROI
                    <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                </button>
                <button class="px-8 py-4 bg-transparent border-2 border-white/30 hover:border-white/60 text-white font-bold rounded-xl transition-all">
                    📞 Talk to an expert
                </button>
            </div>
        </div>
    </section>

    <section class="py-20 px-4 bg-white">
        <div class="max-w-6xl mx-auto grid md:grid-cols-4 gap-8">
            <template x-for="item in features">
                <div class="p-6 rounded-2xl border border-gray-100 hover:border-blue-100 hover:shadow-xl transition-all group">
                    <div class="mb-4 p-3 bg-gray-50 rounded-xl w-fit group-hover:scale-110 transition-transform">
                        <i :data-lucide="item.icon" :class="item.color"></i>
                    </div>
                    <h3 class="font-bold mb-2" x-text="item.title"></h3>
                    <p class="text-sm text-gray-500 leading-relaxed" x-text="item.desc"></p>
                </div>
            </template>
        </div>
    </section>

    <section id="calculator" class="py-20 px-4 bg-slate-50">
        <div class="max-w-6xl mx-auto">
            <div class="bg-white rounded-[2rem] shadow-2xl overflow-hidden flex flex-col lg:flex-row">
                
                <div class="lg:w-1/2 p-8 md:p-12 border-b lg:border-b-0 lg:border-r border-gray-100">
                    <h3 class="text-xl font-bold flex items-center gap-2 text-gray-800 mb-8">
                        <i data-lucide="bar-chart-3" class="text-blue-600"></i>
                        🏗 Workflow Inputs
                    </h3>
                    
                    <div class="space-y-8">
                        <div>
                            <h4 class="text-xs uppercase font-bold tracking-widest text-blue-600 mb-6">Group 1: Work Volume</h4>
                            
                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Manual hours per week</label>
                                <input type="number" x-model.number="manualHoursPerWeek" class="w-full rounded-lg border-gray-200 border-2 p-2.5 focus:border-blue-500 focus:ring-0">
                            </div>

                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Avg. hourly fully-loaded cost ($)</label>
                                <input type="number" x-model.number="hourlyCost" class="w-full rounded-lg border-gray-200 border-2 p-2.5 focus:border-blue-500 focus:ring-0">
                            </div>

                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Error Rate (<span x-text="errorRate"></span>%)</label>
                                <input type="range" min="0" max="40" x-model.number="errorRate" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                            </div>
                        </div>

                        <div class="pt-8 border-t border-gray-100">
                            <h4 class="text-xs uppercase font-bold tracking-widest text-purple-600 mb-6">Group 2: Automation Capability</h4>
                            
                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Automation Percentage (<span x-text="automationPercent"></span>%)</label>
                                <input type="range" min="0" max="95" x-model.number="automationPercent" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                            </div>

                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Implementation Cost ($)</label>
                                <input type="number" x-model.number="implementationCost" class="w-full rounded-lg border-gray-200 border-2 p-2.5 focus:border-blue-500 focus:ring-0">
                            </div>

                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Monthly Maintenance ($)</label>
                                <input type="number" x-model.number="monthlyMaintenance" class="w-full rounded-lg border-gray-200 border-2 p-2.5 focus:border-blue-500 focus:ring-0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2 p-8 md:p-12 bg-slate-50/50 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-8">
                            <h3 class="text-xl font-bold flex items-center gap-2 text-gray-800">
                                <i data-lucide="trending-up" class="text-green-600"></i>
                                📊 Projected ROI
                            </h3>
                            <span :class="getStatusClass()" class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider" x-text="getStatusLabel()"></span>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                                <p class="text-xs font-bold text-gray-400 uppercase mb-1">Annual Hours Saved</p>
                                <p class="text-3xl font-extrabold text-blue-600" x-text="results().annualHoursSaved.toLocaleString()"></p>
                                <p class="text-[10px] text-gray-400 mt-1">~<span x-text="(results().annualHoursSaved / 2080).toFixed(1)"></span> Full-Time Employees</p>
                            </div>
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                                <p class="text-xs font-bold text-gray-400 uppercase mb-1">Net Annual Savings</p>
                                <p class="text-3xl font-extrabold text-green-600" x-text="'$' + results().annualSavings.toLocaleString()"></p>
                                <p class="text-[10px] text-gray-400 mt-1">Net of maintenance</p>
                            </div>
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                                <p class="text-xs font-bold text-gray-400 uppercase mb-1">Payback Period</p>
                                <p class="text-3xl font-extrabold text-purple-600" x-text="results().paybackMonths + ' Months'"></p>
                                <p class="text-[10px] text-gray-400 mt-1">To recover investment</p>
                            </div>
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                                <p class="text-xs font-bold text-gray-400 uppercase mb-1">ROI Percentage</p>
                                <p class="text-3xl font-extrabold text-orange-600" x-text="results().roiPercent + '%'"></p>
                                <p class="text-[10px] text-gray-400 mt-1">First-year return</p>
                            </div>
                        </div>

                        <div class="mb-8 p-6 bg-white rounded-2xl border border-gray-100">
                            <div class="flex justify-between text-sm font-bold mb-2">
                                <span>Payback Progress (12 Months)</span>
                                <span class="text-blue-600" x-text="Math.min(100, (12/results().paybackMonths)*100).toFixed(0) + '%'"></span>
                            </div>
                            <div class="h-4 w-full bg-gray-100 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-blue-500 to-green-500 transition-all duration-700"
                                     :style="'width: ' + Math.min(100, (12/results().paybackMonths)*100) + '%'"></div>
                            </div>
                        </div>

                        <div :class="getInsightClass()" class="p-6 rounded-2xl border-2 transition-colors">
                            <h4 class="font-bold flex items-center gap-2 mb-2">
                                <i data-lucide="zap" class="w-4 h-4"></i>
                                Strategic Analysis
                            </h4>
                            <p class="text-sm leading-relaxed text-gray-700" x-text="getInsightText()"></p>
                        </div>
                    </div>

                    <button class="w-full mt-8 py-4 bg-blue-600 text-white font-bold rounded-xl shadow-lg hover:bg-blue-700 transition-all flex items-center justify-center gap-2">
                        Download PDF Report <i data-lucide="chevron-right" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-4 bg-white border-t border-gray-100">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Expert Insights</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="font-bold text-lg mb-4 text-blue-600">What drives ROI?</h3>
                    <ul class="space-y-4 text-sm text-gray-600">
                        <li class="flex gap-2"><strong>1.</strong> Repetition frequency</li>
                        <li class="flex gap-2"><strong>2.</strong> Data structure clarity</li>
                        <li class="flex gap-2"><strong>3.</strong> API availability</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-4 text-blue-600">Human-in-the-loop?</h3>
                    <p class="text-sm text-gray-600">Most successful agents automate 70-80%, leaving complex edge cases for your team to handle with higher quality.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-12 bg-gray-900 text-gray-500 text-center text-sm">
        <p>© 2026 AI ROI Calculator. Built for Efficiency.</p>
    </footer>

    <script>
        function roiCalculator() {
            return {
                // Initial States
                manualHoursPerWeek: 40,
                hourlyCost: 65,
                errorRate: 10,
                automationPercent: 60,
                implementationCost: 15000,
                monthlyMaintenance: 500,
                
                features: [
                    { icon: 'clock', color: 'text-blue-500', title: 'Workload', desc: 'Team manual process hours' },
                    { icon: 'cpu', color: 'text-purple-500', title: 'Coverage', desc: 'Automation percentages' },
                    { icon: 'dollar-sign', color: 'text-green-500', title: 'Savings', desc: 'Instant financial impact' },
                    { icon: 'trending-up', color: 'text-orange-500', title: 'Impact', desc: 'Long-term scaling' }
                ],

                // Calculations
                results() {
                    const annualHoursSaved = Math.round(this.manualHoursPerWeek * (this.automationPercent / 100) * 52);
                    const grossAnnualSavings = annualHoursSaved * this.hourlyCost;
                    const annualMaintenance = this.monthlyMaintenance * 12;
                    const annualSavings = grossAnnualSavings - annualMaintenance;
                    
                    const monthlySavings = annualSavings / 12;
                    const paybackMonths = monthlySavings > 0 ? (this.implementationCost / monthlySavings).toFixed(1) : "∞";
                    const roiPercent = Math.round((annualSavings / this.implementationCost) * 100);

                    return { annualHoursSaved, annualSavings, paybackMonths, roiPercent };
                },

                // Status Helpers
                getStatusLabel() {
                    const roi = this.results().roiPercent;
                    if (roi > 200) return '🟢 High ROI';
                    if (roi >= 80) return '🟡 Moderate ROI';
                    return '🔴 Needs Review';
                },

                getStatusClass() {
                    const roi = this.results().roiPercent;
                    if (roi > 200) return 'bg-emerald-100 text-emerald-700';
                    if (roi >= 80) return 'bg-amber-100 text-amber-700';
                    return 'bg-rose-100 text-rose-700';
                },

                getInsightClass() {
                    const roi = this.results().roiPercent;
                    if (roi > 200) return 'bg-emerald-50 border-emerald-100 text-emerald-900';
                    if (roi >= 80) return 'bg-amber-50 border-amber-100 text-amber-900';
                    return 'bg-rose-50 border-rose-100 text-rose-900';
                },

                getInsightText() {
                    const roi = this.results().roiPercent;
                    if (roi > 200) return "Exceptional candidate. Your ROI projections suggest this should be a top priority project.";
                    if (roi >= 80) return "Strongly viable. This project is profitable and will pay for itself within the first year.";
                    return "Marginal returns. We recommend simplifying the manual process before investing in automation.";
                }
            }
        }

        // Initialize Lucide Icons after Alpine renders
        document.addEventListener('alpine:initialized', () => {
            lucide.createIcons();
        });
    </script>



</body>

</html>