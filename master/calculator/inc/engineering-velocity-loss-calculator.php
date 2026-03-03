<main class="max-w-6xl mx-auto px-4 -mt-16 relative z-20 pb-20">
            <div class="space-y-12">
                <!-- Calculator Section (Unlocked by default) -->
                <div id="calculator-section" class="transition-all duration-700">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                        <!-- Engineering Setup Card -->
                        <div class="bg-white p-8 md:p-10 rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100 flex flex-col relative overflow-hidden">
                             <div class="absolute top-0 right-0 p-4 opacity-[0.03]">
                                <i data-lucide="users" class="w-32 h-32"></i>
                             </div>
                             <div class="flex items-center gap-3 mb-10 pb-4">
                                <div class="bg-blue-600 text-white p-2.5 rounded-xl shadow-lg shadow-blue-200">
                                  <i data-lucide="users" class="w-5 h-5"></i>
                                </div>
                                <h2 class="text-2xl font-black text-slate-800 tracking-tight">Current Engineering Setup</h2>
                             </div>
                             
                             <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-10">
                                <div class="space-y-2 group">
                                    <label class="text-sm font-bold text-slate-600 group-hover:text-blue-600 transition-colors flex items-center gap-2">
                                        <i data-lucide="users" class="w-4 h-4"></i> Total Engineers
                                    </label>
                                    <input type="number" id="input-totalEngineers" value="25" class="w-full p-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition-all shadow-sm font-bold text-slate-800">
                                </div>
                                <div class="space-y-2 group">
                                    <label class="text-sm font-bold text-slate-600 group-hover:text-blue-600 transition-colors flex items-center gap-2">
                                        <i data-lucide="dollar-sign" class="w-4 h-4"></i> Monthly Cost / Eng
                                    </label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 font-bold">$</span>
                                        <input type="number" id="input-avgMonthlyCost" value="12000" class="w-full p-4 pl-8 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition-all shadow-sm font-bold text-slate-800">
                                    </div>
                                </div>
                                <div class="space-y-2 group">
                                    <label class="text-sm font-bold text-slate-600 group-hover:text-blue-600 transition-colors flex items-center gap-2">
                                        <i data-lucide="user-plus" class="w-4 h-4"></i> Open Positions
                                    </label>
                                    <input type="number" id="input-openPositions" value="3" class="w-full p-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition-all shadow-sm font-bold text-slate-800">
                                </div>
                                <div class="space-y-2 group">
                                    <label class="text-sm font-bold text-slate-600 group-hover:text-blue-600 transition-colors flex items-center gap-2">
                                        <i data-lucide="clock" class="w-4 h-4"></i> Avg Time-to-Hire
                                    </label>
                                    <div class="relative">
                                        <input type="number" id="input-timeToHire" value="3" class="w-full p-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition-all shadow-sm font-bold text-slate-800">
                                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 text-sm font-medium">mo</span>
                                    </div>
                                </div>
                             </div>

                             <div class="space-y-8 mt-auto">
                                <div class="space-y-4 py-2">
                                    <div class="flex justify-between items-center">
                                        <label class="text-sm font-bold text-slate-600 flex items-center gap-2">
                                            <i data-lucide="alert-circle" class="w-4 h-4"></i> % Time on Rework/Bugs
                                        </label>
                                        <span id="label-reworkPercent" class="bg-blue-50 text-blue-700 px-3 py-1 rounded-lg font-black text-lg border border-blue-100">15%</span>
                                    </div>
                                    <input type="range" id="input-reworkPercent" min="0" max="50" value="15" class="w-full h-2.5 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-blue transition-all">
                                </div>
                                <div class="space-y-4 py-2">
                                    <div class="flex justify-between items-center">
                                        <label class="text-sm font-bold text-slate-600 flex items-center gap-2">
                                            <i data-lucide="activity" class="w-4 h-4"></i> % Productivity Loss
                                        </label>
                                        <span id="label-productivityLossPercent" class="bg-blue-50 text-blue-700 px-3 py-1 rounded-lg font-black text-lg border border-blue-100">10%</span>
                                    </div>
                                    <input type="range" id="input-productivityLossPercent" min="0" max="50" value="10" class="w-full h-2.5 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-blue transition-all">
                                </div>
                             </div>
                        </div>

                        <!-- Business Impact Card -->
                        <div class="bg-white p-8 md:p-10 rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100 flex flex-col relative overflow-hidden">
                            <div class="absolute top-0 right-0 p-4 opacity-[0.03]">
                                <i data-lucide="calendar" class="w-32 h-32"></i>
                             </div>
                             <div class="flex items-center gap-3 mb-10 pb-4">
                                <div class="bg-rose-500 text-white p-2.5 rounded-xl shadow-lg shadow-rose-200">
                                  <i data-lucide="calendar" class="w-5 h-5"></i>
                                </div>
                                <h2 class="text-2xl font-black text-slate-800 tracking-tight">Business Impact</h2>
                             </div>

                             <div class="grid grid-cols-1 gap-6 mb-10">
                                <div class="space-y-2 group">
                                    <label class="text-sm font-bold text-slate-600 group-hover:text-blue-600 transition-colors flex items-center gap-2">
                                        <i data-lucide="dollar-sign" class="w-4 h-4"></i> Monthly Revenue Influenced
                                    </label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 font-bold">$</span>
                                        <input type="number" id="input-monthlyRevenueInfluenced" value="500000" class="w-full p-4 pl-8 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition-all shadow-sm font-bold text-slate-800">
                                    </div>
                                </div>
                                <div class="space-y-2 group">
                                    <label class="text-sm font-bold text-slate-600 group-hover:text-blue-600 transition-colors flex items-center gap-2">
                                        <i data-lucide="clock" class="w-4 h-4"></i> Avg Roadmap Delay
                                    </label>
                                    <div class="relative">
                                        <input type="number" id="input-roadmapDelay" value="2" class="w-full p-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition-all shadow-sm font-bold text-slate-800">
                                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 text-sm font-medium">Weeks/Qtr</span>
                                    </div>
                                </div>
                             </div>

                             <div class="space-y-8 flex-1">
                                <div class="space-y-4 py-2">
                                    <div class="flex justify-between items-center">
                                        <label class="text-sm font-bold text-slate-600 flex items-center gap-2">
                                            <i data-lucide="percent" class="w-4 h-4"></i> Sprint Velocity Drop
                                        </label>
                                        <span id="label-velocityDropPercent" class="bg-rose-50 text-rose-700 px-3 py-1 rounded-lg font-black text-lg border border-rose-100">12%</span>
                                    </div>
                                    <input type="range" id="input-velocityDropPercent" min="0" max="100" value="12" class="w-full h-2.5 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-rose transition-all">
                                </div>
                                
                                <div class="flex flex-col gap-3">
                                    <span class="text-sm font-bold text-slate-600">Missed Deadlines (Last 6 Months)?</span>
                                    <div class="flex gap-4" id="missed-deadlines-container">
                                      <button data-value="true" class="flex-1 py-4 rounded-2xl font-black transition-all border-2 bg-rose-600 border-rose-600 text-white shadow-xl shadow-rose-200 scale-[1.02]">Yes</button>
                                      <button data-value="false" class="flex-1 py-4 rounded-2xl font-black transition-all border-2 bg-white border-slate-100 text-slate-400 hover:border-slate-200">No</button>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>

                    <!-- Initial Calculate Button -->
                    <div id="initial-calc-trigger" class="flex flex-col items-center pt-8">
                        <button id="btn-calculate" class="group relative w-full md:w-auto px-16 py-7 bg-blue-600 text-white rounded-2xl font-black text-2xl flex items-center justify-center gap-4 hover:bg-blue-700 transition-all shadow-[0_25px_60px_-15px_rgba(37,99,235,0.4)] hover:shadow-[0_30px_70px_-15px_rgba(37,99,235,0.5)] transform hover:-translate-y-1.5 active:translate-y-0">
                          <i data-lucide="calculator" class="w-8 h-8 group-hover:rotate-12 transition-transform"></i>
                          Calculate My Velocity Loss
                        </button>
                    </div>
                </div>

                <!-- Section 4: Results Display (Hidden initially) -->
                <div id="results-display" class="hidden space-y-12">
                    <!-- High Level Stats -->
                    <div class="bg-slate-950 rounded-[40px] overflow-hidden shadow-2xl relative border border-white/5 fade-in">
                        <div class="absolute top-[-50px] left-[-50px] w-64 h-64 bg-rose-600/20 rounded-full blur-[100px] pointer-events-none"></div>
                        <div class="absolute bottom-[-50px] right-[-50px] w-80 h-80 bg-blue-600/20 rounded-full blur-[100px] pointer-events-none"></div>
                        
                        <div class="p-8 md:p-14 relative z-10">
                            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-10 mb-16 border-b border-white/10 pb-12">
                                <div class="space-y-2">
                                    <div class="inline-flex items-center gap-2 bg-rose-500/10 text-rose-400 px-3 py-1 rounded-full text-xs font-black uppercase tracking-widest border border-rose-500/20">
                                        Performance Audit
                                    </div>
                                    <h2 class="text-white text-4xl md:text-5xl font-black tracking-tighter">Your Efficiency Analysis</h2>
                                </div>
                                
                                <div class="bg-slate-900 border border-white/10 rounded-3xl p-6 flex items-center gap-5 shadow-inner">
                                   <div class="bg-gradient-to-br from-rose-500 to-rose-700 p-4 rounded-2xl shadow-[0_10px_30px_rgba(244,63,94,0.3)]">
                                     <i data-lucide="alert-triangle" class="w-8 h-8 text-white"></i>
                                   </div>
                                   <div>
                                     <p class="text-rose-400 text-xs font-black uppercase tracking-widest mb-1">Velocity Gap</p>
                                     <p class="text-white font-black text-2xl tracking-tight leading-none">
                                        +<span id="res-benchmark">0</span>% <span class="text-slate-500 text-lg font-bold">vs Avg</span>
                                     </p>
                                     <p class="text-slate-500 text-[10px] mt-1 font-semibold uppercase">Exceeds industry efficiency baseline</p>
                                   </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                <div class="bg-white/5 p-10 rounded-[32px] border border-white/10 group hover:bg-white/10 transition-all cursor-default">
                                  <p class="text-slate-400 text-sm font-black uppercase tracking-widest mb-4">Monthly Loss</p>
                                  <p id="res-monthly" class="text-rose-500 text-5xl font-black mb-3 group-hover:scale-105 transition-transform origin-left">$0</p>
                                  <div class="w-12 h-1 bg-rose-500/30 rounded-full group-hover:w-20 transition-all duration-500"></div>
                                </div>

                                <div class="bg-white/5 p-10 rounded-[32px] border border-white/10 group hover:bg-white/10 transition-all cursor-default">
                                  <p class="text-slate-400 text-sm font-black uppercase tracking-widest mb-4">Annual Cost</p>
                                  <p id="res-annual" class="text-rose-500 text-5xl font-black mb-3 group-hover:scale-105 transition-transform origin-left">$0M</p>
                                  <div class="w-12 h-1 bg-rose-500/30 rounded-full group-hover:w-20 transition-all duration-500"></div>
                                </div>

                                <div class="bg-emerald-500/5 p-10 rounded-[32px] border border-emerald-500/20 group hover:bg-emerald-500/10 transition-all cursor-default">
                                  <div class="flex items-center gap-2 mb-4">
                                    <i data-lucide="rocket" class="w-5 h-5 text-emerald-400"></i>
                                    <p class="text-emerald-400 text-sm font-black uppercase tracking-widest">Opportunity</p>
                                  </div>
                                  <p id="res-opportunity" class="text-emerald-400 text-5xl font-black mb-3 group-hover:scale-105 transition-transform origin-left">35%+</p>
                                  <p class="text-slate-500 text-xs font-bold uppercase tracking-widest">Recoverable in 90 Days</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Financial Breakdown Table/Chart Card -->
                    <div class="bg-white rounded-[40px] shadow-sm border border-slate-100 overflow-hidden fade-in" style="animation-delay: 0.2s">
                        <div class="p-10 border-b border-slate-100 bg-slate-50/30">
                            <div class="flex items-center gap-4">
                                <div class="bg-blue-50 p-3 rounded-2xl text-blue-600">
                                    <i data-lucide="pie-chart" class="w-7 h-7"></i>
                                </div>
                                <div class="text-left">
                                    <h3 class="text-2xl font-black text-slate-800 tracking-tight">Financial Breakdown</h3>
                                    <p class="text-slate-500 font-medium">Categorized analysis of engineering leakage</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-10">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                                <!-- Minimal Visual Bars (Chart Alternative) -->
                                <div id="chart-container" class="space-y-6 flex flex-col justify-center">
                                    <!-- Bars injected by JS -->
                                </div>

                                <div class="flex flex-col justify-center space-y-5" id="breakdown-list">
                                    <!-- List items injected by JS -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Section -->
                    <div class="bg-gradient-to-br from-blue-700 via-blue-600 to-indigo-800 rounded-[40px] p-10 md:p-16 text-center text-white shadow-2xl relative overflow-hidden group fade-in" style="animation-delay: 0.4s">
                        <div class="absolute top-0 left-0 w-full h-full opacity-20 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] pointer-events-none"></div>
                        <div class="absolute -top-24 -left-24 w-96 h-96 bg-white/10 rounded-full blur-[80px] group-hover:scale-125 transition-transform duration-1000"></div>
                        
                        <div class="relative z-10 space-y-8">
                          <div class="space-y-4">
                            <h2 class="text-4xl md:text-5xl text-white tracking-tight leading-tight">Ready to recover your velocity?</h2>
                            <p class="text-blue-100 text-xl max-w-2xl mx-auto font-medium">
                              We provide structured engineering pods designed to eliminate these inefficiencies. Recover 35% of your roadmap velocity in 12 weeks.
                            </p>
                          </div>
                          
                          <div class="flex flex-col sm:flex-row gap-5 justify-center pt-4">
                            <button class="flex items-center justify-center gap-3 bg-white text-blue-700 px-10 py-5 rounded-2xl font-black text-lg hover:shadow-[0_20px_40px_rgba(0,0,0,0.2)] transition-all transform hover:-translate-y-1 active:translate-y-0">
                              <i data-lucide="phone" class="w-6 h-6"></i>
                              Book Strategy Call
                            </button>
                            <button class="flex items-center justify-center gap-3 bg-blue-500/20 text-white border-2 border-white/20 px-10 py-5 rounded-2xl font-black text-lg hover:bg-blue-500/40 transition-all backdrop-blur-md">
                              <i data-lucide="download" class="w-6 h-6"></i>
                              Full PDF Report
                            </button>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>