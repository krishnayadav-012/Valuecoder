<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cloud Migration Cost Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <style>
       
        .gradient-bg { background: linear-gradient(135deg, #0693e3 0%, #9b51e0 100%); }
        [v-cloak] { display: none; }
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

<body class="bg-slate-50 text-slate-900">
    <?php require_once './include/menu-v8.php'; ?>


<div id="app" v-cloak>
    <div class="gradient-bg text-white py-20 px-4 text-center">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Cloud Migration Cost Calculator</h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90">
                Estimate migration effort, ongoing cloud spend, and optimization savings before you move.
            </p>
            <div class="flex flex-wrap justify-center gap-6 mb-10 text-sm font-medium">
                <span>✔ Predictable migration budgets</span>
                <span>✔ Compare AWS, Azure & GCP</span>
                <span>✔ Built-in FinOps savings modeling</span>
            </div>
            <button @click="scrollToCalc" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-bold hover:bg-opacity-90 transition shadow-lg">
                Calculate My Cloud Migration Cost
            </button>
        </div>
    </div>

    <section class="py-20 px-4 max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-2">What you’ll get in your estimate</h2>
            <p class="text-slate-500">Estimates are directional — ideal for budgeting and strategy.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div v-for="card in infoCards" class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 text-center">
                <div class="text-4xl mb-4">{{ card.icon }}</div>
                <h3 class="text-xl font-bold mb-3">{{ card.title }}</h3>
                <p class="text-slate-600 text-sm">{{ card.content }}</p>
            </div>
        </div>
    </section>

    <section id="calculator" class="py-20 px-4 bg-white border-y border-slate-200">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12">
                <div class="space-y-10">
                    <div class="bg-slate-50 p-8 rounded-2xl space-y-6">
                        <h3 class="text-xl font-bold flex items-center gap-2">
                            <span class="bg-blue-600 text-white w-6 h-6 rounded-full inline-flex items-center justify-center text-xs">A</span>
                            Servers & Workloads
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1">Number of Servers</label>
                                <input type="number" v-model.number="inputs.servers" class="w-full p-3 rounded-lg border border-slate-300">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1">Instance Size</label>
                                <select v-model="inputs.instanceSize" class="w-full p-3 rounded-lg border border-slate-300 bg-white">
                                    <option v-for="opt in instanceSizes" :value="opt">{{ opt }}</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="bg-slate-50 p-8 rounded-2xl space-y-6">
                        <h3 class="text-xl font-bold flex items-center gap-2">
                            <span class="bg-blue-600 text-white w-6 h-6 rounded-full inline-flex items-center justify-center text-xs">B</span>
                            Databases
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1">Number of DBs</label>
                                <input type="number" v-model.number="inputs.databases" class="w-full p-3 rounded-lg border border-slate-300">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1">High Availability</label>
                                <div @click="inputs.dbHA = !inputs.dbHA" class="cursor-pointer flex items-center mt-2">
                                    <div :class="inputs.dbHA ? 'bg-blue-600' : 'bg-gray-200'" class="w-11 h-6 rounded-full relative transition-colors">
                                        <div :class="inputs.dbHA ? 'translate-x-5' : 'translate-x-1'" class="absolute top-1 bg-white w-4 h-4 rounded-full transition-transform"></div>
                                    </div>
                                    <span class="ml-3 text-sm font-medium">{{ inputs.dbHA ? 'Yes' : 'No' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-10">
                    <div class="bg-slate-50 p-8 rounded-2xl space-y-6">
                        <h3 class="text-xl font-bold flex items-center gap-2">
                            <span class="bg-blue-600 text-white w-6 h-6 rounded-full inline-flex items-center justify-center text-xs">C</span>
                            Complexity & Strategy
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1">Migration Approach</label>
                                <select v-model="inputs.approach" class="w-full p-3 rounded-lg border border-slate-300 bg-white">
                                    <option v-for="opt in approaches" :value="opt">{{ opt }}</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1">Compliance Needs</label>
                                <select v-model="inputs.compliance" class="w-full p-3 rounded-lg border border-slate-300 bg-white">
                                    <option v-for="opt in compliances" :value="opt">{{ opt }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-4 bg-slate-50">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Your Cloud Migration Estimate</h2>
            <div class="grid lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm flex flex-col">
                    <h3 class="text-sm font-semibold text-slate-500 uppercase tracking-wider mb-4">Migration Cost</h3>
                    <div class="text-3xl font-bold mb-2">{{ formatCurrency(results.migration.min) }} - {{ formatCurrency(results.migration.max) }}</div>
                    <p class="text-slate-600 text-sm mb-4">Directional engineering and tooling effort.</p>
                    <div class="mt-auto pt-4 border-t border-dashed border-slate-100 flex justify-between text-xs">
                        <span>Timeline: <strong>~{{ results.migration.timeline }} Months</strong></span>
                        <span :class="results.migration.risk === 'High' ? 'text-red-500' : 'text-green-500'">Risk: <strong>{{ results.migration.risk }}</strong></span>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm flex flex-col">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-sm font-semibold text-slate-500 uppercase tracking-wider">Cloud Spend ({{ yearlyView ? 'Yearly' : 'Monthly' }})</h3>
                        <button @click="yearlyView = !yearlyView" class="text-[10px] bg-slate-100 px-2 py-1 rounded">Switch View</button>
                    </div>
                    <div class="text-3xl font-bold mb-2 text-blue-600">{{ formatCurrency(yearlyView ? results.monthly.raw * 12 : results.monthly.raw) }}</div>
                    <p class="text-slate-600 text-sm mb-4">Raw infra costs without optimization.</p>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm flex flex-col">
                    <h3 class="text-sm font-semibold text-slate-500 uppercase tracking-wider mb-4">FinOps Savings Potential</h3>
                    <div class="text-3xl font-bold mb-2 text-emerald-600">{{ formatCurrency(yearlyView ? results.monthly.savingsValue * 12 : results.monthly.savingsValue) }}</div>
                    <p class="text-slate-600 text-sm mb-4">Potential reduction: {{ results.monthly.savingsPercent }}%</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-4 bg-white border-t border-slate-200 text-center">
        <h2 class="text-3xl font-bold mb-4">Ready for a detailed roadmap?</h2>
        <p class="text-slate-600 mb-8 max-w-2xl mx-auto">Get a full 15-page breakdown of your specific migration journey and cost-saving opportunities.</p>
        <button class="bg-blue-600 text-white px-10 py-4 rounded-xl font-bold text-lg hover:bg-blue-700 transition shadow-lg">
            Download Detailed FinOps Report
        </button>
    </section>
</div>



<script>
    const { createApp, ref, computed } = Vue;

    createApp({
        setup() {
            const yearlyView = ref(false);
            const inputs = ref({
                servers: 50,
                instanceSize: 'Medium (4 vCPU / 16GB RAM)',
                utilization: 'Average (40-60%)',
                os: 'Linux',
                databases: 5,
                dbSizeGB: 500,
                dbHA: false,
                approach: 'Lift & Shift',
                compliance: 'None'
            });

            // Constants for calculation
            const instanceSizes = ['Small (2 vCPU / 8GB RAM)', 'Medium (4 vCPU / 16GB RAM)', 'Large (8 vCPU / 32GB RAM)'];
            const approaches = ['Lift & Shift', 'Partial Modernize', 'Re-architect'];
            const compliances = ['None', 'HIPAA', 'SOC2', 'PCI'];

            const results = computed(() => {
                const sRate = inputs.value.instanceSize.includes('Small') ? 40 : inputs.value.instanceSize.includes('Medium') ? 120 : 280;
                
                // Monthly Spend
                const computeMonthly = inputs.value.servers * sRate;
                const dbMonthly = inputs.value.databases * (inputs.value.dbHA ? 300 : 150);
                const rawTotalMonthly = (computeMonthly + dbMonthly) * 1.1; // 10% overhead

                // Migration Cost
                let multiplier = 1;
                if (inputs.value.approach === 'Re-architect') multiplier += 1.2;
                if (inputs.value.compliance !== 'None') multiplier += 0.3;

                const migrationMin = inputs.value.servers * 800 * multiplier;
                const migrationMax = inputs.value.servers * 1500 * multiplier;
                
                // Savings
                const savingsPct = 0.30; // Average 30% savings potential
                const optimizedMonthly = rawTotalMonthly * (1 - savingsPct);

                return {
                    migration: {
                        min: migrationMin,
                        max: migrationMax,
                        timeline: Math.ceil((inputs.value.servers / 10) * multiplier),
                        risk: multiplier > 1.8 ? 'High' : multiplier > 1.3 ? 'Medium' : 'Low'
                    },
                    monthly: {
                        raw: rawTotalMonthly,
                        optimized: optimizedMonthly,
                        savingsValue: rawTotalMonthly - optimizedMonthly,
                        savingsPercent: Math.round(savingsPct * 100)
                    }
                };
            });

            const formatCurrency = (val) => {
                return new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD', maximumFractionDigits: 0 }).format(val);
            };

            const scrollToCalc = () => {
                document.getElementById('calculator').scrollIntoView({ behavior: 'smooth' });
            };

            const infoCards = [
                { icon: '🏗', title: 'Migration Cost', content: 'Detailed breakdown of planning, tooling, and engineering effort.' },
                { icon: '☁', title: 'Projected Spend', content: 'Estimated costs for Compute, Storage, and Databases.' },
                { icon: '📈', title: 'FinOps Savings', content: 'Savings modeling including rightsizing and reservations.' }
            ];

            return {
                inputs, results, yearlyView, formatCurrency, scrollToCalc,
                instanceSizes, approaches, compliances, infoCards
            };
        }
    }).mount('#app');
</script>




</body>

</html>