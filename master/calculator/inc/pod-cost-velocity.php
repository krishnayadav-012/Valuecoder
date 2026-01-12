<div id="calc" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12 relative z-20 mb-10">
    
    <section class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-6 mb-10 md:mb-16">
        <div class="glass-card p-6 md:p-8 rounded-3xl border-t-4 border-amber-400 shadow-lg bg-white/80 backdrop-blur-md">
            <div class="text-3xl mb-4">💰</div>
            <h3 class="text-xl font-bold mb-2">Monthly Cost</h3>
            <p class="text-slate-500 text-sm">Transparent pricing vs volatile salary and overhead costs.</p>
        </div>
        <div class="glass-card p-6 md:p-8 rounded-3xl border-t-4 border-sky-500 shadow-lg bg-white/80 backdrop-blur-md">
            <div class="text-3xl mb-4">🚀</div>
            <h3 class="text-xl font-bold mb-2">Delivery Speed</h3>
            <p class="text-slate-500 text-sm">Velocity points vs time-to-hire delays and ramp-up.</p>
        </div>
        <div class="glass-card p-6 md:p-8 rounded-3xl border-t-4 border-emerald-400 shadow-lg bg-white/80 backdrop-blur-md">
            <div class="text-3xl mb-4">📈</div>
            <h3 class="text-xl font-bold mb-2">Savings & ROI</h3>
            <p class="text-slate-500 text-sm">The bottom line on shipping your roadmap 2-3x faster.</p>
        </div>
    </section>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-10">
        
        <div class="lg:col-span-7 space-y-6 md:space-y-10">
            
            <section class="glass-card p-6 md:p-8 rounded-3xl shadow-sm bg-white border border-slate-100">
                <h2 class="text-xl md:text-2xl font-bold mb-6 flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-sky-100 text-sky-600 flex-shrink-0 flex items-center justify-center text-sm font-bold">1</span>
                    Define Roadmap
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Roadmap Items</label>
                        <input type="number" id="itemCount" value="25"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-sky-500 transition-all">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Complexity</label>
                        <select id="complexity"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-sky-500 bg-white">
                            <option value="5">Low (Minor features)</option>
                            <option value="13" selected>Medium (Standard)</option>
                            <option value="21">High (Complex Epics)</option>
                        </select>
                    </div>
                </div>
            </section>

            <section class="glass-card p-6 md:p-8 rounded-3xl shadow-sm border-2 border-sky-100 bg-sky-50/30">
                <h2 class="text-xl md:text-2xl font-bold mb-6 flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-sky-500 text-white flex-shrink-0 flex items-center justify-center text-sm font-bold">2</span>
                    Product Pod
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Pod Type</label>
                        <select id="podType"
                            class="w-full px-4 py-3 rounded-xl border border-sky-200 bg-white font-semibold outline-none focus:ring-2 focus:ring-sky-500">
                            <option value="standard">Standard Pod ($35k)</option>
                            <option value="advanced">Advanced Pod ($55k)</option>
                            <option value="enterprise">Enterprise Pod ($85k)</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Monthly Cost ($)</label>
                        <input type="number" id="podCost" value="35000"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-sky-500">
                    </div>
                </div>
            </section>

            <section class="glass-card p-6 md:p-8 rounded-3xl shadow-sm bg-slate-50/80 border border-slate-200">
                <h2 class="text-xl md:text-2xl font-bold mb-6 flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-slate-200 text-slate-600 flex-shrink-0 flex items-center justify-center text-sm font-bold">3</span>
                    Traditional Hiring
                </h2>
                <div id="rolesList" class="space-y-3 mb-6">
                    </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[10px] md:text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Hiring Delay (Mo)</label>
                        <input type="number" id="hiringDelay" value="3" class="w-full p-3 border border-slate-200 rounded-xl outline-none focus:ring-2 focus:ring-slate-400">
                    </div>
                    <div>
                        <label class="block text-[10px] md:text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Overhead %</label>
                        <input type="number" id="overhead" value="25" class="w-full p-3 border border-slate-200 rounded-xl outline-none focus:ring-2 focus:ring-slate-400">
                    </div>
                </div>
            </section>
        </div>

        <div class="lg:col-span-5 mt-4 lg:mt-0">
            <section class="lg:sticky lg:top-6 rounded-[2rem] md:rounded-[2.5rem] p-6 md:p-8 bg-slate-950 text-white shadow-2xl">
                <h2 class="text-xl md:text-2xl font-bold mb-6 md:mb-8">Cost & Delivery</h2>

                <div class="grid grid-cols-2 gap-3 md:gap-4 mb-6 md:mb-8">
                    <div class="p-4 md:p-5 rounded-2xl md:rounded-3xl bg-white/5 border border-white/10 text-center">
                        <p class="text-[10px] uppercase tracking-wide text-slate-400 mb-1">Monthly Pod Cost</p>
                        <div id="resPodMonthly" class="text-lg md:text-2xl font-bold text-sky-400">$35,000</div>
                    </div>
                    <div class="p-4 md:p-5 rounded-2xl md:rounded-3xl bg-white/5 border border-white/10 text-center">
                        <p class="text-[10px] uppercase tracking-wide text-slate-400 mb-1">Time to Market</p>
                        <div id="resPodTime" class="text-lg md:text-2xl font-bold text-sky-400">5.2 months</div>
                    </div>
                </div>

                <div class="mb-6 md:mb-8 p-6 md:p-8 rounded-[2rem] bg-gradient-to-br from-sky-600 to-emerald-600 text-center shadow-inner">
                    <p class="text-white/80 text-xs md:text-sm font-semibold mb-1">Total Project Savings</p>
                    <div id="resSavingsTotal" class="text-4xl md:text-5xl font-black mb-1">$142,000</div>
                    <p id="resSavingsPercent" class="text-white/90 text-sm font-bold bg-black/20 inline-block px-3 py-1 rounded-full">34% cost reduction</p>
                </div>

                <div class="mb-8">
                    <div class="flex justify-between items-end mb-2">
                        <h3 class="text-xs font-bold text-slate-300">Velocity Advantage</h3>
                        <div id="resVelocityAdv" class="text-xl md:text-2xl font-black text-emerald-400">+45%</div>
                    </div>
                    <div class="h-2.5 w-full bg-white/10 rounded-full overflow-hidden">
                        <div id="velocityBar" class="h-full bg-emerald-400 rounded-full transition-all duration-700 shadow-[0_0_15px_rgba(52,211,153,0.5)]"
                            style="width: 45%"></div>
                    </div>
                </div>

                <div class="mb-8 h-40 md:h-48 w-full">
                    <canvas id="comparisonChart"></canvas>
                </div>

                <div class="p-5 rounded-2xl bg-white/5 border border-white/10 mb-8 italic text-sm text-slate-300 leading-relaxed">
                    <span class="text-sky-300 font-bold not-italic block text-xs uppercase mb-1 tracking-widest">AI Insight</span>
                    "Predictable throughput achieved by eliminating coordination drag."
                </div>

                <div class="space-y-3">
                    <button class="w-full py-4 bg-white text-black font-bold rounded-2xl hover:bg-slate-100 transform active:scale-[0.98] transition-all">
                        Get Full PDF Report
                    </button>
                    <button class="w-full py-4 bg-transparent border border-white/20 text-white font-bold rounded-2xl hover:bg-white/5 transition-colors">
                        Book Strategy Call
                    </button>
                </div>
            </section>
        </div>
    </div>
</div>