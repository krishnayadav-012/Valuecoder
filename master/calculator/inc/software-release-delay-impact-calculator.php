<main class="flex-grow container mx-auto px-4 py-12 max-w-6xl">
            <div id="calculator-container" class="space-y-12 animate-fade-in">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <section class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="bg-blue-100 text-blue-600 p-2 rounded-lg">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                            </div>
                            <h2 class="text-xl font-bold text-slate-900">Release Information</h2>
                        </div>
                        
                        <div class="space-y-5">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1.5">Planned Release Frequency (per year)</label>
                                <input type="number" id="plannedFrequency" value="4" class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1.5">Average Revenue per Release ($)</label>
                                <input type="number" id="avgRevenuePerRelease" value="500000" class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1.5">Average Release Delay (Weeks)</label>
                                <input type="number" id="avgDelayWeeks" value="6" class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1.5">Delayed Major Releases (Last 12 Months)</label>
                                <input type="number" id="delayedReleasesLastYear" value="3" class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1.5">Average Team Size per Release</label>
                                <input type="number" id="teamSize" value="15" class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1.5">Avg. Monthly Cost per Engineer ($)</label>
                                <input type="number" id="monthlyCostPerEngineer" value="8000" class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                            </div>
                        </div>
                    </section>

                    <section class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="bg-green-100 text-green-600 p-2 rounded-lg">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                            </div>
                            <h2 class="text-xl font-bold text-slate-900">Revenue & Market Impact</h2>
                        </div>

                        <div class="space-y-5">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1.5">Revenue Impact per Week of Delay ($)</label>
                                <input type="number" id="revenueImpactPerWeek" value="15000" class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                            </div>
                            <div class="space-y-2">
                                <label class="block text-sm font-semibold text-slate-700">Churn Risk Increase Due to Delay (<span id="churnRiskValue">12</span>%)</label>
                                <input type="range" id="churnRiskIncrease" min="0" max="50" value="12" class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-blue-600">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1.5">Competitive Impact (Lost Deals per Delay)</label>
                                <input type="number" id="competitiveLostDeals" value="2" class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1.5">Average Deal Size ($)</label>
                                <input type="number" id="avgDealSize" value="25000" class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1.5">Marketing Launch Spend Already Committed ($)</label>
                                <input type="number" id="marketingSpend" value="40000" class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                            </div>

                            <div class="flex items-center space-x-3 pt-2">
                                <input type="checkbox" id="enterpriseWaiting" checked class="w-5 h-5 rounded text-blue-600 focus:ring-blue-500">
                                <label for="enterpriseWaiting" class="text-sm font-semibold text-slate-700">Enterprise Clients waiting for this release?</label>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="flex justify-center">
                    <button id="calculate-btn" class="bg-blue-600 hover:bg-blue-700 text-white text-xl font-extrabold py-5 px-12 rounded-full shadow-2xl shadow-blue-300 transform transition-all hover:scale-105 active:scale-95 disabled:opacity-50 disabled:cursor-not-allowed">
                        Calculate Release Delay Impact
                    </button>
                </div>
            </div>

            <div id="results-container" class="hidden mt-12 space-y-8 animate-slide-up">
                <div id="risk-card" class="p-6 rounded-2xl border-2 flex flex-col md:flex-row items-center justify-between gap-4">
                    <div class="flex items-center space-x-4">
                        <div id="risk-icon" class="p-3 rounded-full text-white"></div>
                        <div>
                            <h3 class="text-xl font-bold uppercase tracking-tight">Systematic Release Risk: <span id="risk-level-text"></span></h3>
                            <p class="text-sm opacity-80">You are losing <span id="benchmark-diff"></span>% more revenue per release compared to industry benchmarks.</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="text-xs uppercase font-bold opacity-60">Status</div>
                        <div id="status-text" class="text-2xl font-black"></div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-1 bg-white p-8 rounded-3xl shadow-xl border border-slate-100 flex flex-col justify-center items-center text-center relative overflow-hidden">
                        <div class="absolute top-0 right-0 p-4 opacity-5">
                            <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L10 10.586 13.586 7H12z" clip-rule="evenodd" /></svg>
                        </div>
                        <p class="text-slate-500 font-bold uppercase tracking-widest text-xs mb-2">Total Release Delay Impact</p>
                        <h2 id="total-impact" class="text-3xl  font-black text-slate-900 mb-4"></h2>
                        <div class="w-full h-px bg-slate-100 my-4"></div>
                        <div class="bg-red-50 p-4 rounded-xl w-full">
                            <p class="text-red-800 font-bold">Annualized Projected Loss</p>
                            <p id="annual-impact" class="text-3xl font-black text-red-600"></p>
                            <p class="text-xs text-red-700 mt-1 italic">“At current velocity slippage rates.”</p>
                        </div>
                    </div>
                    <div class="lg:col-span-2 bg-white p-8 rounded-3xl shadow-lg border border-slate-100">
                        <h3 class="text-xl font-bold text-slate-900 mb-6">Financial Impact Breakdown</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="space-y-6">
                                <div class="space-y-2">
                                    <div class="flex justify-between text-xs font-bold text-slate-500 uppercase">
                                        <span>Revenue Loss</span>
                                        <span id="val-rev"></span>
                                    </div>
                                    <div class="w-full bg-slate-100 rounded-full h-4 overflow-hidden">
                                        <div id="bar-rev" class="bg-blue-500 h-full transition-all duration-1000" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex justify-between text-xs font-bold text-slate-500 uppercase">
                                        <span>Momentum Loss</span>
                                        <span id="val-mom"></span>
                                    </div>
                                    <div class="w-full bg-slate-100 rounded-full h-4 overflow-hidden">
                                        <div id="bar-mom" class="bg-green-500 h-full transition-all duration-1000" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex justify-between text-xs font-bold text-slate-500 uppercase">
                                        <span>Team Burn</span>
                                        <span id="val-burn"></span>
                                    </div>
                                    <div class="w-full bg-slate-100 rounded-full h-4 overflow-hidden">
                                        <div id="bar-burn" class="bg-red-500 h-full transition-all duration-1000" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex justify-between text-xs font-bold text-slate-500 uppercase">
                                        <span>Competitive Loss</span>
                                        <span id="val-comp"></span>
                                    </div>
                                    <div class="w-full bg-slate-100 rounded-full h-4 overflow-hidden">
                                        <div id="bar-comp" class="bg-yellow-500 h-full transition-all duration-1000" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="p-4 bg-slate-50 rounded-xl border border-slate-200">
                                    <p class="text-sm font-medium text-slate-600">
                                        <span class="font-bold text-slate-900">Insight:</span> 
                                        <span id="insight-text"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="recommendations-container" class="bg-slate-50 border border-slate-200 rounded-3xl p-8">
                    <h3 class="text-2xl font-black text-slate-900 mb-6 flex items-center">
                        <span class="mr-2">💡</span> Strategic Recommendations
                    </h3>
                    <div id="recommendations-list" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        </div>
                </div>
                <section class="bg-slate-900 rounded-3xl p-10 text-white text-center relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
                        <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-500 rounded-full blur-3xl"></div>
                        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-indigo-500 rounded-full blur-3xl"></div>
                    </div>
                    <h2 class="text-3xl md:text-4xl text-white mb-4">Recover 30–50% Release Velocity</h2>
                    <p class="text-slate-400 text-lg mb-8 max-w-2xl mx-auto">
                        Our experts specialize in unblocking delivery pipelines. Let's turn your roadmaps into reliable revenue.
                    </p>
                    <div class="flex flex-col md:flex-row justify-center gap-4">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-xl transition-all">
                            Book a Delivery Strategy Call
                        </button>
                        <button class="bg-white/10 hover:bg-white/20 text-white font-bold py-4 px-8 rounded-xl backdrop-blur-sm transition-all border border-white/20">
                            Compare Pod vs In-House Model
                        </button>
                    </div>
                </section>
            </div>
        </main>