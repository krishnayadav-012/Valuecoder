 <main class="max-w-6xl mx-auto px-4 py-12 w-full space-y-12">
        <section id="calculator-section">
            <div class="bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden">
                <div class="p-8 border-b border-slate-100 bg-slate-50/50">
                    <h2 class="text-2xl font-bold text-slate-800">Configure Your Hiring Scenario</h2>
                    <p class="text-slate-500">Adjust the values below to match your current engineering department status.</p>
                </div>
                
                <div class="p-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-10">
                        <div class="space-y-6">
                            <h3 class="text-lg font-bold text-slate-800 flex items-center border-b pb-2 border-slate-100">
                                <span class="w-8 h-8 rounded-lg bg-indigo-100 text-indigo-600 flex items-center justify-center mr-3 text-sm">1</span>
                                Your Current Hiring Situation
                            </h3>
                            
                            <div class="grid grid-cols-1 gap-4">
                                <div class="space-y-1">
                                    <label class="text-sm font-semibold text-slate-700">Number of Open Engineering Roles</label>
                                    <input type="number" id="openRoles" value="5" class="w-full p-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                                </div>
                                <div class="space-y-1">
                                    <label class="text-sm font-semibold text-slate-700">Avg. Monthly Revenue per Engineer ($)</label>
                                    <div class="relative">
                                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 font-medium">$</span>
                                        <input type="number" id="revPerEngineer" value="15000" class="w-full p-3 pl-8 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <label class="text-sm font-semibold text-slate-700">Avg. Monthly Cost per Engineer ($)</label>
                                    <div class="relative">
                                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 font-medium">$</span>
                                        <input type="number" id="costPerEngineer" value="8000" class="w-full p-3 pl-8 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <label class="text-sm font-semibold text-slate-700">Avg. Time to Hire (Months)</label>
                                    <input type="number" id="timeToHire" value="4" class="w-full p-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                                </div>
                                <div class="space-y-1">
                                    <label class="text-sm font-semibold text-slate-700">Current Average Hiring Delay (Months)</label>
                                    <input type="number" id="hiringDelay" value="2" class="w-full p-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                                </div>
                                <div class="space-y-1">
                                    <label class="text-sm font-semibold text-slate-700">Cost per Hire ($)</label>
                                    <div class="relative">
                                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 font-medium">$</span>
                                        <input type="number" id="costPerHire" value="5000" class="w-full p-3 pl-8 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <h3 class="text-lg font-bold text-slate-800 flex items-center border-b pb-2 border-slate-100">
                                <span class="w-8 h-8 rounded-lg bg-indigo-100 text-indigo-600 flex items-center justify-center mr-3 text-sm">2</span>
                                Delivery & Revenue Impact
                            </h3>

                            <div class="grid grid-cols-1 gap-4">
                                <div class="space-y-1">
                                    <label class="text-sm font-semibold text-slate-700">Avg. Project Delay per Open Role (Weeks)</label>
                                    <input type="number" id="projectDelayWeeks" value="8" class="w-full p-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                                </div>
                                <div class="space-y-1">
                                    <label class="text-sm font-semibold text-slate-700">Revenue Impact per Week of Delay ($)</label>
                                    <div class="relative">
                                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 font-medium">$</span>
                                        <input type="number" id="revenueImpactPerWeek" value="12000" class="w-full p-3 pl-8 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                                    </div>
                                </div>
                                
                                <div class="flex items-center justify-between p-4 bg-slate-50 rounded-xl">
                                    <span class="text-sm font-semibold text-slate-700">Are Deadlines Being Missed?</span>
                                    <button data-id="deadlinesMissed" class="toggle-btn w-12 h-6 rounded-full transition-colors relative bg-red-500">
                                        <div class="toggle-dot absolute top-1 left-1 bg-white w-4 h-4 rounded-full translate-x-6"></div>
                                    </button>
                                </div>

                                <div class="flex items-center justify-between p-4 bg-slate-50 rounded-xl">
                                    <span class="text-sm font-semibold text-slate-700">Are Existing Engineers Overloaded?</span>
                                    <button data-id="overloaded" class="toggle-btn w-12 h-6 rounded-full transition-colors relative bg-red-500">
                                        <div class="toggle-dot absolute top-1 left-1 bg-white w-4 h-4 rounded-full translate-x-6"></div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button id="calculate-btn" class="px-12 py-5 bg-indigo-600 hover:bg-indigo-700 text-white text-xl font-bold rounded-2xl shadow-2xl transition-all transform hover:scale-105 active:scale-95 flex items-center gap-3">
                            <span>Calculate My Hiring Delay Cost</span>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section id="results-section" class="hidden animate-in space-y-12">
            <div class="bg-white rounded-3xl shadow-2xl border-4 border-slate-100 p-8 md:p-12 overflow-hidden relative">
                <div class="relative z-10">
                    <div class="text-center mb-12">
                        <h2 class="text-xl font-bold text-slate-500 uppercase tracking-widest mb-4">Total Cost of Hiring Delay</h2>
                        <div id="total-cost" class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-black text-red-600 mb-6 drop-shadow-sm">$0</div>
                        <div class="inline-block p-4 bg-red-50 border border-red-100 rounded-2xl">
                            <p id="projected-loss-text" class="text-red-700 font-medium"></p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div id="chart-container" class="h-64 md:h-80 w-full flex items-center justify-center"></div>
                        <div class="space-y-6">
                            <h3 class="text-xl font-bold text-slate-800 border-b pb-4">Loss Breakdown</h3>
                            
                            <div class="flex gap-4">
                                <div class="w-1 shrink-0 bg-indigo-600 rounded-full"></div>
                                <div class="w-full">
                                    <div class="flex justify-between items-center mb-1">
                                        <span class="text-sm font-bold text-slate-700">Revenue Lost from Vacancies</span>
                                        <span id="revenue-loss-val" class="font-bold text-slate-900">$0</span>
                                    </div>
                                    <p class="text-xs text-slate-500">Unrealized revenue from missing development capacity.</p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="w-1 shrink-0 bg-rose-500 rounded-full"></div>
                                <div class="w-full">
                                    <div class="flex justify-between items-center mb-1">
                                        <span class="text-sm font-bold text-slate-700">Project Delay Cost</span>
                                        <span id="project-delay-val" class="font-bold text-slate-900">$0</span>
                                    </div>
                                    <p class="text-xs text-slate-500">Financial impact of missed milestones and delivery cycles.</p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="w-1 shrink-0 bg-emerald-500 rounded-full"></div>
                                <div class="w-full">
                                    <div class="flex justify-between items-center mb-1">
                                        <span class="text-sm font-bold text-slate-700">Hiring Process Expense</span>
                                        <span id="hiring-expense-val" class="font-bold text-slate-900">$0</span>
                                    </div>
                                    <p class="text-xs text-slate-500">Recruiter fees, job boards, and internal overhead.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-slate-900 rounded-3xl p-8 md:p-12 text-white shadow-2xl overflow-hidden relative">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl font-bold mb-6 text-white">Velocity is Your Biggest ROI</h2>
                        <p class="text-slate-400 text-lg mb-8 leading-relaxed">
                            Standard hiring cycles for specialized engineering talent now exceed 120 days. 
                            Deploying dedicated teams cuts this delay by 90%, preserving project timelines and revenue.
                        </p>
                    </div>
                    
                    <div class="bg-white/5 rounded-2xl p-6 border border-white/10 backdrop-blur-sm">
                        <h4 class="text-xs font-bold text-slate-500 uppercase mb-4 tracking-widest">Scenario Comparison</h4>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center p-4 bg-red-950/30 rounded-xl border border-red-500/20">
                                <span class="font-medium text-red-200">Current Hiring Delay</span>
                                <span id="delay-scenario-val" class="font-bold text-red-400">$0</span>
                            </div>
                            <div class="flex justify-between items-center p-4 bg-emerald-950/30 rounded-xl border border-emerald-500/20">
                                <span class="font-medium text-emerald-200">Deploy Dedicated (3 weeks)</span>
                                <span id="dedicated-scenario-val" class="font-bold text-emerald-400">$0</span>
                            </div>
                            <div class="pt-4 border-t border-white/10 mt-4 flex justify-between items-center px-2">
                                <span class="text-sm text-slate-400 italic">Net Savings with Acceleration</span>
                                <span id="net-savings-val" class="text-xl font-bold text-white">$0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>