<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GenAI Cost Architect | Interactive Estimator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--gradient--midnight: linear-gradient(135deg, #020381 0%, #2874fc 100%);
        }
        body { font-family: 'Inter', sans-serif; }
        .preset-gradient-hero { background: var(--wp--preset--gradient--midnight); }
        .transition-all { transition: all 0.3s ease; }
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

<body class="bg-slate-50 text-slate-900" x-data="costCalculator()">
    <?php require_once './include/menu-v8.php'; ?>


    <section class="preset-gradient-hero text-white py-20 px-6">
        <div class="max-w-6xl mx-auto flex flex-col items-center text-center">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6 tracking-tight">
                LLM / GenAI <span class="text-cyan-300">Cost Calculator</span>
            </h1>
            <p class="text-xl md:text-2xl mb-10 max-w-3xl opacity-90">
                Estimate infrastructure, model usage, and ongoing ops — before you scale your AI application.
            </p>
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <template x-for="item in ['Model usage + infrastructure', 'RAG + vector DB costs', 'Ops + monitoring']">
                    <span class="flex items-center gap-2 text-sm font-medium bg-black/20 px-4 py-2 rounded-full border border-white/10 backdrop-blur-sm">
                        <span class="text-green-400">✔</span> <span x-text="item"></span>
                    </span>
                </template>
            </div>
            <button @click="document.getElementById('calculator-inputs').scrollIntoView({ behavior: 'smooth' })" 
                class="bg-[#0693e3] hover:scale-105 font-bold py-4 px-8 rounded-xl transition-all shadow-lg">
                Calculate My GenAI Cost
            </button>
        </div>
    </section>

    <section class="py-20 px-6 max-w-6xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-12">What you’ll see in your estimate</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm">
                <div class="w-12 h-12 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
                </div>
                <h3 class="text-xl font-bold mb-3">1️⃣ Model & Infra</h3>
                <p class="text-slate-600 text-sm">API tokens, vector DB, embedding costs, and GPU hosting.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm">
                <div class="w-12 h-12 rounded-lg bg-purple-100 text-purple-600 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                </div>
                <h3 class="text-xl font-bold mb-3">2️⃣ Dev & Ops</h3>
                <p class="text-slate-600 text-sm">Engineering salaries, evaluation pipelines, and maintenance.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm">
                <div class="w-12 h-12 rounded-lg bg-green-100 text-green-600 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <h3 class="text-xl font-bold mb-3">3️⃣ Risk Savings</h3>
                <p class="text-slate-600 text-sm">Potential savings from hallucination mitigation via RAG.</p>
            </div>
        </div>
    </section>

    <section id="calculator-inputs" class="py-20 bg-slate-100/50 border-y border-slate-200">
        <div class="max-w-5xl mx-auto px-6">
            <h2 class="text-3xl font-bold mb-8">Tell us about your GenAI app</h2>
            <div class="grid lg:grid-cols-2 gap-8">
                <div class="space-y-8">
                    <div class="bg-white p-6 rounded-2xl border border-slate-200">
                        <h3 class="text-lg font-bold mb-4 flex items-center gap-2">
                            <span class="bg-blue-500 text-white px-2 py-0.5 rounded text-sm">A</span> Usage & Load
                        </h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-slate-700">Active Users</label>
                                <input type="number" x-model.number="users" class="mt-1 block w-full rounded-lg border-slate-300 border p-2 bg-slate-50">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700">Prompts/Day</label>
                                <input type="number" x-model.number="promptsPerDay" class="mt-1 block w-full rounded-lg border-slate-300 border p-2 bg-slate-50">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700">Input Tokens</label>
                                <input type="number" x-model.number="inputTokens" class="mt-1 block w-full rounded-lg border-slate-300 border p-2 bg-slate-50">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700">Output Tokens</label>
                                <input type="number" x-model.number="outputTokens" class="mt-1 block w-full rounded-lg border-slate-300 border p-2 bg-slate-50">
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-2xl border border-slate-200">
                        <h3 class="text-lg font-bold mb-4 flex items-center gap-2">
                            <span class="bg-purple-500 text-white px-2 py-0.5 rounded text-sm">B</span> Model Selection
                        </h3>
                        <select x-model="model" class="block w-full rounded-lg border-slate-300 border p-2 bg-slate-50">
                            <option value="GPT-4o-mini">GPT-4o-mini</option>
                            <option value="GPT-4">GPT-4</option>
                            <option value="Claude-3-Haiku">Claude 3 Haiku</option>
                            <option value="Open-Source">Open-Source (Self-Hosted)</option>
                        </select>
                    </div>
                </div>

                <div class="space-y-8">
                    <div class="bg-white p-6 rounded-2xl border border-slate-200">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-bold flex items-center gap-2">
                                <span class="bg-green-500 text-white px-2 py-0.5 rounded text-sm">C</span> RAG Layer
                            </h3>
                            <button @click="useRAG = !useRAG" 
                                :class="useRAG ? 'bg-blue-600' : 'bg-slate-300'"
                                class="w-12 h-6 flex items-center rounded-full p-1 transition-colors">
                                <div :class="useRAG ? 'translate-x-6' : 'translate-x-0'" class="bg-white w-4 h-4 rounded-full shadow-md transform transition-transform"></div>
                            </button>
                        </div>
                        <div x-show="useRAG" x-transition class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-slate-700">Total Docs</label>
                                <input type="number" x-model.number="numDocs" class="mt-1 block w-full rounded-lg border-slate-300 border p-2 bg-slate-50">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700">Update Freq</label>
                                <select x-model="updateFreq" class="mt-1 block w-full rounded-lg border-slate-300 border p-2 bg-slate-50">
                                    <option>Low</option><option>Medium</option><option>High</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-2xl border border-slate-200">
                        <h3 class="text-lg font-bold mb-4 flex items-center gap-2">
                            <span class="bg-orange-500 text-white px-2 py-0.5 rounded text-sm">D</span> Team & Platform
                        </h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-slate-700">Team Size</label>
                                <input type="number" x-model.number="teamSize" class="mt-1 block w-full rounded-lg border-slate-300 border p-2 bg-slate-50">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700">Security</label>
                                <select x-model="security" class="mt-1 block w-full rounded-lg border-slate-300 border p-2 bg-slate-50">
                                    <option value="Standard">Standard</option>
                                    <option value="Regulated">Regulated (HIPAA/SOC2)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-6 max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold text-center mb-12">Your GenAI Cost Estimate</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-3xl p-8 border-t-8 border-blue-500 shadow-lg">
                <h3 class="text-slate-500 font-bold uppercase text-xs tracking-widest mb-2">Model & API</h3>
                <div class="text-4xl font-black mb-4" x-text="'$' + Math.round(estimate().modelMonthly).toLocaleString()"></div>
                <p class="text-slate-400 text-sm" x-text="'Per 1k Users: $' + Math.round(estimate().costPer1k)"></p>
            </div>
            <div class="bg-white rounded-3xl p-8 border-t-8 border-purple-500 shadow-lg">
                <h3 class="text-slate-500 font-bold uppercase text-xs tracking-widest mb-2">Infrastructure</h3>
                <div class="text-4xl font-black mb-4" x-text="'$' + Math.round(estimate().infraMonthly).toLocaleString()"></div>
                <p class="text-slate-400 text-sm">Scales with RAG & Usage</p>
            </div>
            <div class="bg-white rounded-3xl p-8 border-t-8 border-orange-500 shadow-lg">
                <h3 class="text-slate-500 font-bold uppercase text-xs tracking-widest mb-2">Dev & Ops</h3>
                <div class="text-4xl font-black mb-4" x-text="'$' + Math.round(estimate().devOpsMonthly).toLocaleString()"></div>
                <p class="text-slate-400 text-sm">Blended Salary Burn</p>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-900 text-white px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12">The Cost of Hallucinations</h2>
            <div class="grid md:grid-cols-2 gap-12 bg-white/5 p-10 rounded-[3rem] border border-white/10 backdrop-blur-xl">
                <div class="space-y-8">
                    <div>
                        <p class="text-slate-400 text-sm font-bold uppercase mb-2">Without Safeguards</p>
                        <p class="text-5xl font-black text-red-500" x-text="'$' + Math.round(estimate().hallucinationCostWithout).toLocaleString()"></p>
                    </div>
                    <div class="pt-8 border-t border-white/10">
                        <p class="text-slate-400 text-sm font-bold uppercase mb-2">With RAG + Governance</p>
                        <p class="text-5xl font-black text-emerald-400" x-text="'$' + Math.round(estimate().hallucinationCostWith).toLocaleString()"></p>
                    </div>
                </div>
                <div class="flex flex-col justify-center">
                    <div class="p-6 rounded-2xl bg-white/5 border border-white/10">
                        <h4 class="font-bold text-xl mb-4">Impact Breakdown</h4>
                        <ul class="space-y-3 text-slate-300 text-sm">
                            <li>• Support ticket volume spikes</li>
                            <li>• Brand reputation damage</li>
                            <li>• Legal/Compliance exposure</li>
                            <li>• Engineering rework time</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-12 text-center text-slate-400 text-xs border-t border-slate-100">
        Estimate powered by GenAI Cost Architect. Data based on current market model pricing.
    </footer>

    <script>
        function costCalculator() {
            return {
                // State
                users: 1000,
                promptsPerDay: 5,
                inputTokens: 300,
                outputTokens: 800,
                model: 'GPT-4o-mini',
                useRAG: true,
                numDocs: 500,
                updateFreq: 'Medium',
                security: 'Standard',
                teamSize: 2,
                monitoring: 'Basic',

                // Pricing Constants
                MODEL_PRICING: {
                    'GPT-4': { input: 30 / 1000000, output: 60 / 1000000 },
                    'Claude-3-Haiku': { input: 0.25 / 1000000, output: 1.25 / 1000000 },
                    'GPT-4o-mini': { input: 0.15 / 1000000, output: 0.6 / 1000000 },
                    'Open-Source': { input: 0, output: 0 }
                },

                // Calculation Logic
                estimate() {
                    const daysInMonth = 30;
                    const totalPromptsMonthly = this.users * this.promptsPerDay * daysInMonth;
                    
                    const modelRates = this.MODEL_PRICING[this.model];
                    let tokenCost = (this.inputTokens * modelRates.input + this.outputTokens * modelRates.output) * totalPromptsMonthly;
                    
                    let baseInfra = 0;
                    if (this.model === 'Open-Source') {
                        baseInfra += 1500;
                        tokenCost = 0;
                    }

                    let ragInfra = 0;
                    let ragOps = 0;
                    if (this.useRAG) {
                        ragInfra += 200;
                        ragInfra += (this.numDocs * 0.05);
                        ragOps += 500;
                    }

                    let platformCost = 300;
                    if (this.monitoring === 'Advanced') platformCost += 400;
                    if (this.security === 'Regulated') platformCost += 1000;
                    
                    const engineeringRate = 80;
                    const engineeringMonthly = this.teamSize * 160 * engineeringRate;

                    const baseHallucinationRisk = (totalPromptsMonthly * 0.02) * 25;
                    const riskReduction = this.useRAG ? 0.85 : 0;
                    const mitigatedRisk = baseHallucinationRisk * (1 - riskReduction);

                    return {
                        modelMonthly: tokenCost,
                        costPer1k: (tokenCost / (this.users || 1)) * 1000,
                        infraMonthly: baseInfra + ragInfra + platformCost,
                        devOpsMonthly: engineeringMonthly + ragOps,
                        hallucinationCostWithout: baseHallucinationRisk,
                        hallucinationCostWith: mitigatedRisk
                    };
                }
            }
        }
    </script>




</body>

</html>