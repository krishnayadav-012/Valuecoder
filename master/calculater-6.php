<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLOps / LLMOps Cost Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
      
        .bg-gradient-primary { background: linear-gradient(135deg, #020381 0%, #2874fc 100%); }
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

<body class="bg-slate-50 antialiased">
    <?php require_once './include/menu-v8.php'; ?>


   <div id="app">
    <nav class="sticky top-0 z-50 bg-white border-b border-gray-100 shadow-sm py-4 px-6">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded bg-gradient-to-br from-blue-600 to-purple-600 flex items-center justify-center text-white font-bold">M</div>
                <span class="font-bold text-xl tracking-tight">OpsCalc</span>
            </div>
            <div class="hidden md:flex gap-8 text-sm font-medium text-gray-600">
                <a href="#calculator" class="hover:text-blue-600 transition-colors">Calculator</a>
                <a href="#why" class="hover:text-blue-600 transition-colors">Why MLOps?</a>
            </div>
            <button class="bg-black text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-gray-800 transition-all">
                Get Expert Advice
            </button>
        </div>
    </nav>

    <section class="relative overflow-hidden pt-20 pb-16 px-6 bg-gradient-primary text-white">
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-5xl md:text-7xl font-extrabold mb-6 leading-tight">
                    MLOps / LLMOps <br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400">Cost Calculator</span>
                </h1>
                <p class="text-xl text-blue-100 mb-8 max-w-2xl leading-relaxed">
                    Estimate the ongoing cost of managing AI models — and compare it with the financial risk of unmanaged AI.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#calculator" class="bg-white text-blue-900 px-8 py-4 rounded-xl font-bold shadow-xl hover:scale-105 transition-transform">👉 Calculate Now</a>
                </div>
            </div>
        </div>
    </section>

    <section id="calculator" class="py-24 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-12 gap-12">
                
                <div class="lg:col-span-7 bg-white p-8 md:p-10 rounded-3xl shadow-xl border border-gray-100">
                    <h3 class="text-2xl font-bold mb-8 flex items-center gap-3">
                        <span class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">🏗️</span>
                        Configure Infrastructure
                    </h3>

                    <div class="space-y-10">
                        <div>
                            <h4 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-6">Group 1 — Footprint</h4>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-semibold mb-2">Number of models</label>
                                    <input type="number" v-model.number="inputs.numModels" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold mb-2">Monthly predictions</label>
                                    <input type="number" v-model.number="inputs.monthlyPredictions" class="w-full px-4 py-3 rounded-xl border border-gray-100 focus:ring-2 focus:ring-blue-500 outline-none">
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-semibold mb-2">Retraining Frequency</label>
                                    <select v-model="inputs.retrainingFreq" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none bg-white">
                                        <option v-for="opt in retrainingOptions" :value="opt">{{ opt }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-6">Group 2 — Hosting & Size</h4>
                            <div class="space-y-6">
                                <div class="flex flex-wrap gap-3">
                                    <button v-for="type in hostingTypes" @click="inputs.hostingType = type"
                                        :class="inputs.hostingType === type ? 'border-blue-600 bg-blue-50 text-blue-700' : 'border-gray-100 bg-gray-50 text-gray-500'"
                                        class="px-6 py-2 rounded-full text-sm font-medium border-2 transition-all">
                                        {{ type }}
                                    </button>
                                </div>
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-semibold mb-2">Model Size</label>
                                        <select v-model="inputs.modelSize" class="w-full px-4 py-3 rounded-xl border border-gray-100 focus:ring-2 focus:ring-blue-500 outline-none bg-white">
                                            <option v-for="size in modelSizes" :value="size">{{ size }}</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold mb-2">Team Size (Engineers)</label>
                                        <input type="number" v-model.number="inputs.teamSize" class="w-full px-4 py-3 rounded-xl border border-gray-100 focus:ring-2 focus:ring-blue-500 outline-none">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-6">Group 3 — Compliance</h4>
                            <div class="space-y-6">
                                <div>
                                    <label class="block text-sm font-semibold mb-2">Compliance Level</label>
                                    <select v-model="inputs.compliance" class="w-full px-4 py-3 rounded-xl border border-gray-100 focus:ring-2 focus:ring-blue-500 outline-none bg-white">
                                        <option v-for="lvl in complianceLevels" :value="lvl">{{ lvl }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div class="bg-slate-900 text-white p-8 md:p-10 rounded-3xl shadow-2xl sticky top-32">
                        <p class="text-blue-300 text-sm font-medium mb-1 uppercase tracking-widest">Annual Operational Cost</p>
                        <div class="text-5xl font-extrabold mb-8">${{ formatNum(outputs.annualCost) }}</div>

                        <div class="p-6 rounded-2xl bg-white/5 border border-white/10 mb-8">
                            <p class="text-red-400 text-sm font-medium mb-1 uppercase tracking-widest">Risk Exposure</p>
                            <div class="text-2xl font-bold">${{ formatNum(outputs.riskExposure.low) }} — ${{ formatNum(outputs.riskExposure.high) }}</div>
                        </div>

                        <div class="h-64 mb-6">
                            <canvas id="riskChart"></canvas>
                        </div>

                        <div class="p-4 bg-white/5 rounded-xl border border-white/5">
                            <h4 class="text-sm font-bold mb-2">Insight:</h4>
                            <p class="text-sm text-blue-100/80 leading-relaxed">{{ insightMessage }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<script>
    const { createApp, ref, computed, watch, onMounted } = Vue;

    createApp({
        setup() {
            const inputs = ref({
                numModels: 5,
                monthlyPredictions: 1000000,
                retrainingFreq: 'Monthly',
                hostingType: 'Cloud-managed',
                modelSize: 'Medium (1–7B)',
                compliance: 'Internal Governance',
                teamSize: 3,
                latencyReq: 3,
                incidentTolerance: 2
            });

            const retrainingOptions = ['Quarterly', 'Monthly', 'Weekly', 'Continuous'];
            const hostingTypes = ['Cloud-managed', 'Self-hosted', 'Hybrid'];
            const modelSizes = ['Small (<1B)', 'Medium (1–7B)', 'Large (7B+)'];
            const complianceLevels = ['None', 'Internal Governance', 'Regulated'];

            const outputs = computed(() => {
                const modelMult = inputs.value.numModels * 1500;
                const predictionCost = (inputs.value.monthlyPredictions / 10000) * 5;
                
                let retrainCost = 5000;
                if(inputs.value.retrainingFreq === 'Quarterly') retrainCost = 2000;
                if(inputs.value.retrainingFreq === 'Weekly') retrainCost = 15000;
                if(inputs.value.retrainingFreq === 'Continuous') retrainCost = 45000;

                let sizeMult = 2.5;
                if(inputs.value.modelSize.includes('Small')) sizeMult = 1;
                if(inputs.value.modelSize.includes('Large')) sizeMult = 6;

                const teamCost = inputs.value.teamSize * 160000;
                const infraBase = inputs.value.hostingType === 'Cloud-managed' ? 12000 : 25000;
                
                const annualCost = (modelMult + predictionCost + retrainCost + infraBase) * sizeMult + teamCost;

                const compRisk = inputs.value.compliance === 'Regulated' ? 500000 : (inputs.value.compliance === 'None' ? 5000 : 50000);
                const baseRisk = (compRisk + (inputs.value.monthlyPredictions / 1000 * 0.5)) * (inputs.value.numModels * 0.2 + 1);

                return {
                    annualCost,
                    riskExposure: { low: baseRisk * 0.5, expected: baseRisk, high: baseRisk * 2.5 }
                };
            });

            const insightMessage = computed(() => {
                if (outputs.value.riskExposure.expected > outputs.value.annualCost) {
                    return "⚠️ High exposure. MLOps will likely save you money by mitigating financial risks.";
                }
                return "💡 Costs are balanced. Maintain lightweight monitoring to avoid over-engineering.";
            });

            const formatNum = (n) => Math.round(n).toLocaleString();

            // Chart Logic
            let chartInstance = null;
            const updateChart = () => {
                const ctx = document.getElementById('riskChart');
                if (!ctx) return;
                
                const data = {
                    labels: ['Mgmt Cost', 'Fin. Risk'],
                    datasets: [{
                        data: [outputs.value.annualCost, outputs.value.riskExposure.expected],
                        backgroundColor: ['#3b82f6', '#ef4444'],
                        borderRadius: 8
                    }]
                };

                if (chartInstance) {
                    chartInstance.data = data;
                    chartInstance.update();
                } else {
                    chartInstance = new Chart(ctx, {
                        type: 'bar',
                        data: data,
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: { legend: { display: false } },
                            scales: { y: { display: false }, x: { ticks: { color: '#fff' } } }
                        }
                    });
                }
            };

            watch(outputs, () => updateChart(), { deep: true });
            onMounted(() => updateChart());

            return { 
                inputs, outputs, formatNum, insightMessage,
                retrainingOptions, hostingTypes, modelSizes, complianceLevels 
            };
        }
    }).mount('#app');
</script>



</body>

</html>