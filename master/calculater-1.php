<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Pod ROI Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --midnight: linear-gradient(135deg, #020381 0%, #2874fc 100%);
            --vivid-blue-purple: linear-gradient(135deg, #0693e3 0%, #9b51e0 100%);
        }

        .hero-gradient {
            background: var(--midnight);
        }

        .roi-gradient {
            background: var(--vivid-blue-purple);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid #e2e8f0;
        }
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

<body class="pb-20">
    <?php require_once './include/menu-v8.php'; ?>
    <div class="relative overflow-hidden hero-gradient pt-28 pb-24 text-white">
        <div class="container  px-6 text-center  relative z-10">
            <span
                class="inline-block px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-sm font-semibold mb-6 text-white">ROI CALCULATOR v2.5</span>
            <h1 class="text-4xl md:text-6xl font-bold tracking-tight mb-6">Product Pod <span class="text-sky-300">Cost &
                    Velocity</span> Calculator</h1>
            <p class="text-xl text-white/80 mb-10">See how a dedicated product pod outperforms traditional hiring in
                speed and cost. Stop hiring headcounts, start buying outcomes.</p>
            <button onclick="document.getElementById('calc').scrollIntoView({behavior:'smooth'})"
                class="px-8 py-4 bg-white text-blue-700 font-bold rounded-xl shadow-xl hover:scale-105 transition-transform">Calculate
                Your Pod ROI</button>
        </div>
    </div>

    <main id="calc" class="container mx-auto px-4 -mt-12 relative z-20  mb-10">
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
            <div class="glass-card p-8 rounded-3xl border-t-4 border-amber-400 shadow-lg">
                <div class="text-3xl mb-4">💰</div>
                <h3 class="text-xl font-bold mb-2">Monthly Cost</h3>
                <p class="text-slate-500 text-sm">Transparent pricing vs volatile salary and overhead costs.</p>
            </div>
            <div class="glass-card p-8 rounded-3xl border-t-4 border-sky-500 shadow-lg">
                <div class="text-3xl mb-4">🚀</div>
                <h3 class="text-xl font-bold mb-2">Delivery Speed</h3>
                <p class="text-slate-500 text-sm">Velocity points vs time-to-hire delays and ramp-up.</p>
            </div>
            <div class="glass-card p-8 rounded-3xl border-t-4 border-emerald-400 shadow-lg">
                <div class="text-3xl mb-4">📈</div>
                <h3 class="text-xl font-bold mb-2">Savings & ROI</h3>
                <p class="text-slate-500 text-sm">The bottom line on shipping your roadmap 2-3x faster.</p>
            </div>
        </section>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            <div class="lg:col-span-7 space-y-10">
                <section class="glass-card p-8 rounded-3xl shadow-sm">
                    <h2 class="text-2xl font-bold mb-6 flex items-center gap-2">
                        <span
                            class="w-8 h-8 rounded-lg bg-sky-100 text-sky-600 flex items-center justify-center text-sm">1</span>
                        Define Roadmap
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Roadmap Items</label>
                            <input type="number" id="itemCount" value="25"
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-sky-500">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Complexity</label>
                            <select id="complexity"
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 outline-none">
                                <option value="5">Low (Minor features)</option>
                                <option value="13" selected>Medium (Standard)</option>
                                <option value="21">High (Complex Epics)</option>
                            </select>
                        </div>
                    </div>
                </section>

                <section class="glass-card p-8 rounded-3xl shadow-sm border-2 border-sky-100">
                    <h2 class="text-2xl font-bold mb-6 flex items-center gap-2">
                        <span
                            class="w-8 h-8 rounded-lg bg-sky-500 text-white flex items-center justify-center text-sm">2</span>
                        Product Pod
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Pod Type</label>
                            <select id="podType"
                                class="w-full px-4 py-3 rounded-xl border border-sky-200 bg-sky-50/50 font-semibold outline-none">
                                <option value="standard">Standard Pod ($35k)</option>
                                <option value="advanced">Advanced Pod ($55k)</option>
                                <option value="enterprise">Enterprise Pod ($85k)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Monthly Cost ($)</label>
                            <input type="number" id="podCost" value="35000"
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 outline-none">
                        </div>
                    </div>
                </section>

                <section class="glass-card p-8 rounded-3xl shadow-sm bg-slate-50/50">
                    <h2 class="text-2xl font-bold mb-6 flex items-center gap-2">
                        <span
                            class="w-8 h-8 rounded-lg bg-slate-200 text-slate-600 flex items-center justify-center text-sm">3</span>
                        Traditional Hiring
                    </h2>
                    <div id="rolesList" class="space-y-3 mb-6">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-500 mb-1">Hiring Delay (Mo)</label>
                            <input type="number" id="hiringDelay" value="3" class="w-full p-2 border rounded-lg">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-500 mb-1">Overhead %</label>
                            <input type="number" id="overhead" value="25" class="w-full p-2 border rounded-lg">
                        </div>
                    </div>
                </section>
            </div>

            <div class="lg:col-span-5">
                <section class="sticky top-6 rounded-[2.5rem] p-8 bg-black text-white shadow-2xl">
                    <h2 class="text-2xl font-bold mb-8">Cost & Delivery Comparison</h2>

                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="p-5 rounded-3xl bg-white/5 border border-white/10 text-center">
                            <p class="text-xs text-slate-400 mb-1">Monthly Pod Cost</p>
                            <div id="resPodMonthly" class="text-2xl font-bold">$35,000</div>
                        </div>
                        <div class="p-5 rounded-3xl bg-white/5 border border-white/10 text-center">
                            <p class="text-xs text-slate-400 mb-1">Time to Market</p>
                            <div id="resPodTime" class="text-2xl font-bold">5.2 months</div>
                        </div>
                    </div>

                    <div class="mb-8 p-6 rounded-3xl roi-gradient text-center">
                        <p class="text-white/80 text-sm font-semibold mb-1">Total Project Savings</p>
                        <div id="resSavingsTotal" class="text-5xl font-black mb-1">$142,000</div>
                        <p id="resSavingsPercent" class="text-white/90 text-sm font-bold">34% cost reduction</p>
                    </div>

                    <div class="mb-8">
                        <div class="flex justify-between items-end mb-2">
                            <h3 class="text-sm font-bold text-slate-300">Velocity Advantage</h3>
                            <div id="resVelocityAdv" class="text-2xl font-black text-emerald-400">+45%</div>
                        </div>
                        <div class="h-2 w-full bg-white/10 rounded-full">
                            <div id="velocityBar" class="h-full bg-emerald-400 rounded-full transition-all duration-700"
                                style="width: 45%"></div>
                        </div>
                    </div>

                    <div class="mb-8 h-48">
                        <canvas id="comparisonChart"></canvas>
                    </div>

                    <div class="p-5 rounded-2xl bg-white/5 border border-white/10 mb-8 italic text-sm text-slate-300">
                        <span class="text-sky-300 font-bold not-italic block text-xs uppercase mb-1">AI Insight</span>
                        "With a Product Pod, you eliminate the 3-month hiring delay and coordination drag, allowing for
                        predictable throughput."
                    </div>

                    <button
                        class="w-full py-4 bg-white text-black font-bold rounded-2xl mb-4 hover:bg-slate-100 transition-colors">Get
                        Full PDF Report</button>
                    <button
                        class="w-full py-4 bg-transparent border border-white/20 text-white font-bold rounded-2xl hover:bg-white/5">Book
                        Strategy Call</button>
                </section>
            </div>
        </div>
    </main>

    <script>
        // Constants & Data
        const ROLES = [
            { name: 'Product Manager', salary: 12000, alloc: 1 },
            { name: 'Product Designer', salary: 10000, alloc: 0.5 },
            { name: 'Frontend Engineer', salary: 11000, alloc: 1 },
            { name: 'Backend Engineer', salary: 11000, alloc: 1 },
            { name: 'QA Engineer', salary: 8000, alloc: 0.5 },
        ];

        const POD_TEMPLATES = {
            standard: { cost: 35000, velocity: 45 },
            advanced: { cost: 55000, velocity: 80 },
            enterprise: { cost: 85000, velocity: 120 }
        };

        let myChart;

        // Initialize Traditional Roles UI
        function initRoles() {
            const container = document.getElementById('rolesList');
            ROLES.forEach((role, i) => {
                container.innerHTML += `
                    <div class="grid grid-cols-12 gap-4 items-center bg-white p-3 rounded-xl border border-slate-100 shadow-sm">
                        <div class="col-span-6 text-sm font-semibold">${role.name}</div>
                        <div class="col-span-4">
                            <input type="number" value="${role.salary}" class="role-salary w-full p-1 text-sm border-b" data-index="${i}">
                        </div>
                        <div class="col-span-2 text-[10px] text-slate-400 font-bold">${role.alloc * 100}%</div>
                    </div>
                `;
            });
        }

        function calculate() {
            const itemCount = Number(document.getElementById('itemCount').value);
            const complexityMult = Number(document.getElementById('complexity').value);
            const podMonthlyCost = Number(document.getElementById('podCost').value);
            const podType = document.getElementById('podType').value;
            const podVelocityPerSprint = POD_TEMPLATES[podType].velocity;

            const totalPointsNeeded = itemCount * complexityMult;
            const sprintsPerMonth = 2; // Assuming 2-week sprints

            // Pod Calcs
            const podVelocityPerMonth = podVelocityPerSprint * sprintsPerMonth;
            const podTime = totalPointsNeeded / podVelocityPerMonth;

            // Traditional Calcs
            let salaryBase = 0;
            document.querySelectorAll('.role-salary').forEach((input, i) => {
                salaryBase += Number(input.value) * ROLES[i].alloc;
            });

            const overhead = Number(document.getElementById('overhead').value) / 100;
            const tradMonthlyCost = salaryBase * (1 + overhead);
            const tradVelocityPerMonth = podVelocityPerMonth * 0.8; // Coordination drag
            const hiringDelay = Number(document.getElementById('hiringDelay').value);
            const tradTime = (totalPointsNeeded / tradVelocityPerMonth) + hiringDelay + 1; // +1 for ramp

            // Results
            const totalCostPod = podMonthlyCost * podTime;
            const totalCostTrad = tradMonthlyCost * tradTime;
            const savingsTotal = totalCostTrad - totalCostPod;
            const savingsPercent = (savingsTotal / totalCostTrad) * 100;
            const velAdvantage = ((tradTime - podTime) / tradTime) * 100;

            // Update UI
            document.getElementById('resPodMonthly').innerText = `$${podMonthlyCost.toLocaleString()}`;
            document.getElementById('resPodTime').innerText = `${podTime.toFixed(1)} months`;
            document.getElementById('resSavingsTotal').innerText = `$${Math.round(savingsTotal).toLocaleString()}`;
            document.getElementById('resSavingsPercent').innerText = `${Math.round(savingsPercent)}% cost reduction`;
            document.getElementById('resVelocityAdv').innerText = `+${Math.round(velAdvantage)}%`;
            document.getElementById('velocityBar').style.width = `${Math.min(100, velAdvantage)}%`;

            updateChart(podTime, tradTime, podMonthlyCost, tradMonthlyCost);
        }

        function updateChart(pTime, tTime, pCost, tCost) {
            const ctx = document.getElementById('comparisonChart').getContext('2d');
            if (myChart) myChart.destroy();

            myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Time (Mo)', 'Cost ($k)'],
                    datasets: [
                        { label: 'Pod', data: [pTime, pCost / 1000], backgroundColor: '#0693e3', borderRadius: 5 },
                        { label: 'Trad', data: [tTime, tCost / 1000], backgroundColor: '#abb8c3', borderRadius: 5 }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: { y: { display: false }, x: { ticks: { color: '#64748b', font: { size: 10 } } } },
                    plugins: { legend: { display: false } }
                }
            });
        }

        // Listeners
        document.getElementById('podType').addEventListener('change', (e) => {
            const temp = POD_TEMPLATES[e.target.value];
            document.getElementById('podCost').value = temp.cost;
            calculate();
        });

        document.addEventListener('input', calculate);

        // Run
        initRoles();
        calculate();
    </script>

</body>

</html>