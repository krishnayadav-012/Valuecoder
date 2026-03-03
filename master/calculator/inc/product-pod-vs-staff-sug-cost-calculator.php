 <main class="flex-grow container mx-auto px-4 py-8 md:py-12">
        <div class="max-w-6xl mx-auto space-y-12">

            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-6 md:p-10">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 flex items-center">
                    <span class="bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center text-sm mr-3">1</span>
                    Configure Your Models
                </h2>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div class="space-y-8 bg-gray-50 p-6 md:p-8 rounded-2xl border border-gray-200">
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="p-2 bg-gray-200 rounded-lg">
                                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Your Current Staff Aug Model</h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-1">
                                <label class="text-xs font-bold uppercase tracking-wider text-gray-500">Num Engineers</label>
                                <input type="number" id="sa-num-engineers" value="5" class="w-full px-4 py-3 rounded-xl border border-gray-200 outline-none font-semibold text-gray-800">
                            </div>
                            <div class="space-y-1">
                                <label class="text-xs font-bold uppercase tracking-wider text-gray-500">Monthly Cost/Eng ($)</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 font-medium">$</span>
                                    <input type="number" id="sa-cost-per-eng" value="8000" class="w-full pl-8 py-3 rounded-xl border border-gray-200 outline-none font-semibold text-gray-800">
                                </div>
                            </div>
                            <div class="space-y-1">
                                <label class="text-xs font-bold uppercase tracking-wider text-gray-500">Internal Manager Cost ($/mo)</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 font-medium">$</span>
                                    <input type="number" id="sa-manager-cost" value="6000" class="w-full pl-8 py-3 rounded-xl border border-gray-200 outline-none font-semibold text-gray-800">
                                </div>
                            </div>
                            <div class="space-y-1">
                                <label class="text-xs font-bold uppercase tracking-wider text-gray-500">Hiring Delay (Months)</label>
                                <input type="number" id="sa-hiring-delay" value="3" class="w-full px-4 py-3 rounded-xl border border-gray-200 outline-none font-semibold text-gray-800">
                            </div>
                        </div>

                        <div class="space-y-3">
                            <div class="flex justify-between items-end">
                                <div>
                                    <label class="text-sm font-bold block text-gray-800">% Productivity Loss (Coordination)</label>
                                    <p class="text-xs text-gray-500 mt-0.5">Time lost due to manual handoffs.</p>
                                </div>
                                <span id="sa-prod-loss-val" class="text-lg font-extrabold text-gray-900">20%</span>
                            </div>
                            <input type="range" id="sa-prod-loss" min="0" max="100" value="20" class="w-full h-2 rounded-lg cursor-pointer bg-gray-200">
                        </div>

                        <div class="space-y-3">
                            <div class="flex justify-between items-end">
                                <div>
                                    <label class="text-sm font-bold block text-gray-800">% Time Spent on QA/Rework</label>
                                    <p class="text-xs text-gray-500 mt-0.5">Average time spent fixing bugs.</p>
                                </div>
                                <span id="sa-qa-rework-val" class="text-lg font-extrabold text-gray-900">15%</span>
                            </div>
                            <input type="range" id="sa-qa-rework" min="0" max="100" value="15" class="w-full h-2 rounded-lg cursor-pointer bg-gray-200">
                        </div>
                    </div>

                    <div class="space-y-8 bg-blue-50 p-6 md:p-8 rounded-2xl border border-blue-100 relative">
                        <div class="absolute top-0 right-0 p-3">
                            <span class="bg-blue-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">Recommended</span>
                        </div>

                        <div class="flex items-center space-x-3 mb-4">
                            <div class="p-2 bg-blue-100 rounded-lg">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                            </div>
                            <h3 class="text-xl font-bold text-blue-900">Product Pod Model Inputs</h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-1">
                                <label class="text-xs font-bold uppercase tracking-wider text-blue-700">Pod Size (Eng+QA+PM)</label>
                                <input type="number" id="pod-size" value="7" class="w-full px-4 py-3 rounded-xl border border-blue-200 outline-none font-semibold text-gray-800">
                            </div>
                            <div class="space-y-1">
                                <label class="text-xs font-bold uppercase tracking-wider text-blue-700">Avg Monthly Pod Cost ($)</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 font-medium">$</span>
                                    <input type="number" id="pod-cost" value="45000" class="w-full pl-8 py-3 rounded-xl border border-blue-200 outline-none font-semibold text-gray-800">
                                </div>
                            </div>
                        </div>

                        <div class="space-y-3">
                            <div class="flex justify-between items-end">
                                <div>
                                    <label class="text-sm font-bold block text-blue-900">Productivity Improvement (%)</label>
                                </div>
                                <span id="pod-prod-gain-val" class="text-lg font-extrabold text-blue-600">25%</span>
                            </div>
                            <input type="range" id="pod-prod-gain" min="0" max="100" value="25" class="w-full h-2 rounded-lg cursor-pointer bg-blue-200">
                        </div>

                        <div class="space-y-3">
                            <div class="flex justify-between items-end">
                                <div>
                                    <label class="text-sm font-bold block text-blue-900">Acceleration (Weeks Saved)</label>
                                </div>
                                <span id="pod-accel-val" class="text-lg font-extrabold text-blue-600">6 weeks/qtr</span>
                            </div>
                            <input type="range" id="pod-accel" min="0" max="20" value="6" class="w-full h-2 rounded-lg cursor-pointer bg-blue-200">
                        </div>
                    </div>
                </div>

                <div class="mt-12 flex justify-center">
                    <button id="calculate-btn" class="bg-blue-600 hover:bg-blue-700 text-white text-xl font-bold py-4 px-12 rounded-xl transition-all shadow-lg active:scale-95 flex items-center space-x-2">
                        <span>Compare Cost & Efficiency</span>
                    </button>
                </div>
            </div>

            <div id="results-section" class="hidden space-y-12">
                <h2 class="text-3xl font-bold text-gray-900 flex items-center">
                    <span class="bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center text-sm mr-3">2</span>
                    Side-by-Side Results
                </h2>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                        <span class="text-sm font-bold text-gray-500 uppercase tracking-widest">Annual Savings</span>
                        <div id="res-annual-savings" class="text-4xl font-black text-green-600 mt-2">$0</div>
                        <p id="res-savings-desc" class="text-gray-500 text-sm mt-4"></p>
                        <div class="mt-8 pt-6 border-t border-gray-100 flex justify-between items-center">
                            <span class="text-gray-600 text-sm">Risk Assessment</span>
                            <span id="res-risk-badge" class="px-2 py-0.5 rounded text-[10px] font-bold uppercase"></span>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 lg:col-span-2">
                        <div class="flex flex-col md:flex-row h-full">
                            <div class="flex-1">
                                <span class="text-sm font-bold text-gray-500 uppercase tracking-widest">Annual Cost Comparison</span>
                                <div id="chart-container" class="h-48 mt-4 relative"></div>
                            </div>
                            <div class="md:w-1/3 md:pl-8 mt-6 md:mt-0 flex flex-col justify-center border-l border-gray-100">
                                <div class="bg-blue-50 p-4 rounded-xl">
                                    <h4 class="text-blue-900 font-bold text-sm">Recommendation</h4>
                                    <p id="res-recommendation" class="text-blue-700 text-2xl font-black"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-xl border border-gray-200 w-full overflow-x-scroll">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="bg-gray-50 text-xs font-bold uppercase text-gray-500 tracking-wider">
                                <th class="px-8 py-6">Metric</th>
                                <th class="px-8 py-6">Staff Aug</th>
                                <th class="px-8 py-6 bg-blue-50 text-blue-700">Product Pod</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr>
                                <td class="px-8 py-6 font-semibold text-gray-700">Monthly Run Rate</td>
                                <td id="res-sa-monthly" class="px-8 py-6"></td>
                                <td id="res-pod-monthly" class="px-8 py-6 bg-blue-50 font-bold text-blue-600"></td>
                            </tr>
                            <tr>
                                <td class="px-8 py-6 font-semibold text-gray-700">Annual Total Cost</td>
                                <td id="res-sa-annual" class="px-8 py-6"></td>
                                <td id="res-pod-annual" class="px-8 py-6 bg-blue-50 font-bold text-blue-600"></td>
                            </tr>
                            <tr>
                                <td class="px-8 py-6 font-semibold text-gray-700">Efficiency Score</td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center space-x-2">
                                        <span id="res-sa-eff-val" class="text-gray-900 font-medium"></span>
                                        <div class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                                            <div id="res-sa-eff-bar" class="h-full bg-gray-400"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-6 bg-blue-50">
                                    <div class="flex items-center space-x-2">
                                        <span id="res-pod-eff-val" class="text-blue-700 font-bold"></span>
                                        <div class="w-24 h-2 bg-blue-200 rounded-full overflow-hidden">
                                            <div id="res-pod-eff-bar" class="h-full bg-blue-600"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-red-50 p-8 rounded-2xl border border-red-100">
                        <h4 class="text-red-900 font-bold mb-6 uppercase text-sm">Hidden Costs (Staff Aug)</h4>
                        <div id="hidden-costs-list" class="space-y-4"></div>
                    </div>
                    <div class="bg-blue-600 p-8 rounded-2xl text-white">
                        <h4 class="text-blue-100 font-bold mb-6 uppercase text-sm">Pod Advantages</h4>
                        <ul class="space-y-4 text-sm text-white">
                            <li>✓ Instant Onboarding</li>
                            <li>✓ Built-in Quality Control</li>
                            <li>✓ Managed Governance</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-gray-100 p-8 rounded-2xl text-center">
                    <p id="res-impact-statement" class="text-gray-800 text-lg max-w-3xl mx-auto"></p>
                </div>
            </div>
        </div>
    </main>